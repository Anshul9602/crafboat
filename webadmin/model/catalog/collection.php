<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Collection
 */
class Collection extends \Opencart\System\Engine\Model {
	/**
	 * @return array<string, bool>
	 */
	private function getColumns(): array {
		static $columns = null;

		if ($columns !== null) {
			return $columns;
		}

		$columns = [];

		foreach ($this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "collection`")->rows as $row) {
			$columns[$row['Field']] = true;
		}

		return $columns;
	}

	public function hasColumn(string $name): bool {
		$columns = $this->getColumns();

		return isset($columns[$name]);
	}

	/**
	 * Kept for callers; does not ALTER (shared hosts drop the connection on DDL).
	 */
	public function ensureSchema(): void {
		$this->getColumns();
	}

	/**
	 * @param array<string, mixed> $data
	 */
	public function addCollection(array $data): int {
		$sql = "INSERT INTO `" . DB_PREFIX . "collection` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "', `image` = '" . $this->db->escape((string)($data['image'] ?? '')) . "'";

		if ($this->hasColumn('video')) {
			$sql .= ", `video` = '" . $this->db->escape((string)($data['video'] ?? '')) . "'";
		}

		$sql .= ", `blurb` = '" . $this->db->escape((string)($data['blurb'] ?? '')) . "', `summary` = '" . $this->db->escape((string)($data['summary'] ?? '')) . "', `sort_order` = '" . (int)($data['sort_order'] ?? 0) . "', `status` = '" . (int)($data['status'] ?? 1) . "'";

		if ($this->hasColumn('menu')) {
			$sql .= ", `menu` = '" . (int)($data['menu'] ?? 1) . "'";
		}

		$sql .= ", `date_added` = NOW(), `date_modified` = NOW()";

		$this->db->query($sql);

		return $this->db->getLastId();
	}

	/**
	 * @param array<string, mixed> $data
	 */
	public function editCollection(int $collection_id, array $data): void {
		$old = $this->getCollection($collection_id);
		$old_name = (string)($old['name'] ?? '');

		$sql = "UPDATE `" . DB_PREFIX . "collection` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "', `image` = '" . $this->db->escape((string)($data['image'] ?? '')) . "'";

		if ($this->hasColumn('video')) {
			$sql .= ", `video` = '" . $this->db->escape((string)($data['video'] ?? '')) . "'";
		}

		$sql .= ", `blurb` = '" . $this->db->escape((string)($data['blurb'] ?? '')) . "', `summary` = '" . $this->db->escape((string)($data['summary'] ?? '')) . "', `sort_order` = '" . (int)($data['sort_order'] ?? 0) . "', `status` = '" . (int)($data['status'] ?? 1) . "'";

		if ($this->hasColumn('menu')) {
			$sql .= ", `menu` = '" . (int)($data['menu'] ?? 1) . "'";
		}

		$sql .= ", `date_modified` = NOW() WHERE `collection_id` = '" . (int)$collection_id . "'";

		$this->db->query($sql);

		// Keep product ↔ collection link in sync when the name changes
		if ($old_name !== '' && $old_name !== (string)$data['name']) {
			$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `location` = '" . $this->db->escape((string)$data['name']) . "' WHERE `location` = '" . $this->db->escape($old_name) . "'");
		}
	}

	public function deleteCollection(int $collection_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "collection` WHERE `collection_id` = '" . (int)$collection_id . "'");
	}

	/**
	 * @return array<string, mixed>
	 */
	public function getCollection(int $collection_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "collection` WHERE `collection_id` = '" . (int)$collection_id . "'");

		return $query->row;
	}

	/**
	 * @return array<int, array<string, mixed>>
	 */
	public function getCollections(string $filter = 'published'): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "collection`";

		if ($filter === 'published') {
			$sql .= " WHERE `status` = '1'";
		} elseif ($filter === 'unpublished') {
			$sql .= " WHERE `status` = '0'";
		} elseif ($filter === 'draft') {
			$sql .= " WHERE `status` = '2'";
		}

		$sql .= " ORDER BY `sort_order` ASC, `name` ASC";

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * @return array<string, int>
	 */
	public function getStatusTotals(): array {
		$query = $this->db->query("SELECT `status`, COUNT(*) AS `total` FROM `" . DB_PREFIX . "collection` GROUP BY `status`");
		$totals = [
			'published'   => 0,
			'unpublished' => 0,
			'draft'       => 0
		];

		foreach ($query->rows as $row) {
			if ((int)$row['status'] === 1) {
				$totals['published'] = (int)$row['total'];
			} elseif ((int)$row['status'] === 2) {
				$totals['draft'] = (int)$row['total'];
			} else {
				$totals['unpublished'] = (int)$row['total'];
			}
		}

		return $totals;
	}

	/**
	 * @return array<string, array{total: int, image: string}>
	 */
	public function getProductStats(): array {
		$query = $this->db->query("SELECT `p`.`location`, COUNT(*) AS `total`, MIN(`p`.`image`) AS `image` FROM `" . DB_PREFIX . "product` `p` WHERE `p`.`status` = '1' AND `p`.`location` <> '' GROUP BY `p`.`location`");
		$stats = [];

		foreach ($query->rows as $row) {
			$stats[$row['location']] = [
				'total' => (int)$row['total'],
				'image' => (string)$row['image']
			];
		}

		return $stats;
	}

	/**
	 * Products assigned to a collection (via product.location = collection name).
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getProducts(string $location, int $start = 0, int $limit = 100): array {
		if ($location === '') {
			return [];
		}

		$query = $this->db->query("SELECT `p`.`product_id`, `p`.`model`, `p`.`image`, `p`.`price`, `p`.`quantity`, `p`.`status`, `pd`.`name` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `p`.`location` = '" . $this->db->escape($location) . "' ORDER BY `pd`.`name` ASC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function assignProduct(int $product_id, string $location): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `location` = '" . $this->db->escape($location) . "' WHERE `product_id` = '" . (int)$product_id . "'");
	}

	public function removeProduct(int $product_id): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `location` = '' WHERE `product_id` = '" . (int)$product_id . "'");
	}

	/**
	 * Product IDs currently assigned to a collection name.
	 *
	 * @return array<int, int>
	 */
	public function getProductIds(string $location): array {
		if ($location === '') {
			return [];
		}

		$query = $this->db->query("SELECT `product_id` FROM `" . DB_PREFIX . "product` WHERE `location` = '" . $this->db->escape($location) . "'");
		$ids = [];

		foreach ($query->rows as $row) {
			$ids[] = (int)$row['product_id'];
		}

		return $ids;
	}

	/**
	 * All products for the collection picker modal.
	 *
	 * @return array{products: array<int, array<string, mixed>>, total: int}
	 */
	public function getPickerProducts(string $filter_name = '', int $start = 0, int $limit = 100): array {
		$where = "WHERE `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'";

		if ($filter_name !== '') {
			$where .= " AND (LCASE(`pd`.`name`) LIKE '%" . $this->db->escape(oc_strtolower($filter_name)) . "%' OR LCASE(`p`.`model`) LIKE '%" . $this->db->escape(oc_strtolower($filter_name)) . "%')";
		}

		$total = (int)$this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) " . $where)->row['total'];

		$query = $this->db->query("SELECT `p`.`product_id`, `p`.`model`, `p`.`image`, `p`.`price`, `p`.`quantity`, `p`.`status`, `p`.`location`, `pd`.`name` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) " . $where . " ORDER BY `pd`.`name` ASC LIMIT " . (int)$start . "," . (int)$limit);

		return [
			'products' => $query->rows,
			'total'    => $total
		];
	}

	/**
	 * Sync collection membership to exactly the selected product IDs.
	 *
	 * @param array<int, int> $product_ids
	 */
	public function syncProducts(string $location, array $product_ids): void {
		if ($location === '') {
			return;
		}

		$selected = [];

		foreach ($product_ids as $product_id) {
			$product_id = (int)$product_id;

			if ($product_id > 0) {
				$selected[$product_id] = $product_id;
			}
		}

		$current = $this->getProductIds($location);

		foreach ($selected as $product_id) {
			if (!in_array($product_id, $current, true)) {
				$this->assignProduct($product_id, $location);
			}
		}

		foreach ($current as $product_id) {
			if (!isset($selected[$product_id])) {
				$this->removeProduct($product_id);
			}
		}
	}

	public function codeExists(string $code, int $exclude_id = 0): bool {
		$query = $this->db->query("SELECT `collection_id` FROM `" . DB_PREFIX . "collection` WHERE `code` = '" . $this->db->escape($code) . "' AND `collection_id` != '" . (int)$exclude_id . "'");

		return (bool)$query->num_rows;
	}

	public function makeCode(string $name): string {
		$code = strtolower($name);
		$code = str_replace(['–', '—', '&'], ['-', '-', ' '], $code);
		$code = preg_replace('/[^a-z0-9]+/', '-', $code) ?? '';
		$code = trim($code, '-');

		if ($code === '') {
			$code = 'collection';
		}

		$base = $code;
		$i = 2;

		while ($this->codeExists($code)) {
			$code = $base . '-' . $i;
			$i++;
		}

		return $code;
	}
}

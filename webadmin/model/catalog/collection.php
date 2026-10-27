<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Collection
 */
class Collection extends \Opencart\System\Engine\Model {
	/**
	 * @param array<string, mixed> $data
	 */
	public function addCollection(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "collection` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "', `image` = '', `blurb` = '', `summary` = '', `sort_order` = '" . (int)$data['sort_order'] . "', `status` = '" . (int)$data['status'] . "', `date_added` = NOW(), `date_modified` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * @param array<string, mixed> $data
	 */
	public function editCollection(int $collection_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "collection` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `sort_order` = '" . (int)$data['sort_order'] . "', `status` = '" . (int)$data['status'] . "', `date_modified` = NOW() WHERE `collection_id` = '" . (int)$collection_id . "'");
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
	public function getCollections(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "collection` ORDER BY `sort_order` ASC, `name` ASC");

		return $query->rows;
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

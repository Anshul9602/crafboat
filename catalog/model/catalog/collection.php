<?php
namespace Opencart\Catalog\Model\Catalog;
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

	private function hasColumn(string $name): bool {
		$columns = $this->getColumns();

		return isset($columns[$name]);
	}

	/**
	 * @return array<int, array<string, mixed>>
	 */
	public function getCollections(): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "collection` WHERE `status` = '1'";

		if ($this->hasColumn('menu')) {
			$sql .= " AND `menu` = '1'";
		}

		$sql .= " ORDER BY `sort_order` ASC, `name` ASC";

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * @return array<string, mixed>
	 */
	public function getCollectionByCode(string $code): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "collection` WHERE `code` = '" . $this->db->escape($code) . "' AND `status` = '1'");

		return $query->row;
	}

	/**
	 * @return array<string, mixed>
	 */
	public function getCollectionByName(string $name): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "collection` WHERE `name` = '" . $this->db->escape($name) . "' AND `status` = '1'");

		return $query->row;
	}
}

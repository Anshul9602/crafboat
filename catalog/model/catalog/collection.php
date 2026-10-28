<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * Class Collection
 */
class Collection extends \Opencart\System\Engine\Model {
	/**
	 * @return array<int, array<string, mixed>>
	 */
	public function getCollections(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "collection` WHERE `status` = '1' AND `menu` = '1' ORDER BY `sort_order` ASC, `name` ASC");

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

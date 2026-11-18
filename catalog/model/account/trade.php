<?php
namespace Opencart\Catalog\Model\Account;

class Trade extends \Opencart\System\Engine\Model {
	private bool $schema_ready = false;

	public function ensureSchema(): void {
		if ($this->schema_ready) {
			return;
		}

		$column = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "customer_trade` LIKE 'profile_complete'");

		if (!$column->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_trade` ADD COLUMN `profile_complete` TINYINT(1) NOT NULL DEFAULT 0 AFTER `reference`");
			$this->db->query("UPDATE `" . DB_PREFIX . "customer_trade` SET `profile_complete` = 1 WHERE TRIM(`company`) <> ''");
		}

		$this->schema_ready = true;
	}

	public function getProfile(int $customer_id): array {
		$this->ensureSchema();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_trade` WHERE `customer_id` = '" . (int)$customer_id . "'");

		return $query->row;
	}

	public function isProfileComplete(int $customer_id = 0): bool {
		$this->ensureSchema();

		if (!$customer_id) {
			$customer_id = (int)$this->customer->getId();
		}

		if (!$customer_id) {
			return false;
		}

		$profile = $this->getProfile($customer_id);

		return !empty($profile) && (int)($profile['profile_complete'] ?? 0) === 1;
	}

	public function requiresCompletion(): bool {
		if (!$this->customer->isLogged()) {
			return false;
		}

		$group = $this->db->query("SELECT `name` FROM `" . DB_PREFIX . "customer_group_description` WHERE `customer_group_id` = '" . (int)$this->customer->getGroupId() . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");
		$role = oc_strtolower((string)($group->row['name'] ?? ''));

		if (!in_array($role, ['trade', 'wholesale'], true)) {
			return false;
		}

		return !$this->isProfileComplete((int)$this->customer->getId());
	}

	public function addLeadProfile(int $customer_id): void {
		$this->ensureSchema();

		$this->db->query("REPLACE INTO `" . DB_PREFIX . "customer_trade` SET `customer_id` = '" . (int)$customer_id . "', `company` = '', `contact` = '', `gstin` = '', `pan` = '', `business_type` = '', `monthly_purchase` = '', `stores` = '', `website` = '', `billing_address` = '', `billing_city` = '', `billing_postcode` = '', `billing_country` = '', `billing_zone` = '', `shipping_same` = '1', `shipping_address` = '', `shipping_city` = '', `shipping_postcode` = '', `shipping_country` = '', `shipping_zone` = '', `trade_license` = '', `pan_document` = '', `cheque` = '', `reference` = '', `profile_complete` = '0'");
	}

	public function addProfile(int $customer_id, array $data): void {
		$this->ensureSchema();

		$complete = array_key_exists('profile_complete', $data) ? (int)$data['profile_complete'] : 1;

		$this->db->query("REPLACE INTO `" . DB_PREFIX . "customer_trade` SET `customer_id` = '" . (int)$customer_id . "', `company` = '" . $this->db->escape((string)$data['company']) . "', `contact` = '" . $this->db->escape((string)$data['contact']) . "', `gstin` = '" . $this->db->escape((string)$data['gstin']) . "', `pan` = '" . $this->db->escape((string)$data['pan']) . "', `business_type` = '" . $this->db->escape((string)$data['business_type']) . "', `monthly_purchase` = '" . $this->db->escape((string)$data['monthly_purchase']) . "', `stores` = '" . $this->db->escape((string)$data['stores']) . "', `website` = '" . $this->db->escape((string)$data['website']) . "', `billing_address` = '" . $this->db->escape((string)$data['billing_address']) . "', `billing_city` = '" . $this->db->escape((string)$data['billing_city']) . "', `billing_postcode` = '" . $this->db->escape((string)$data['billing_postcode']) . "', `billing_country` = '" . $this->db->escape((string)$data['billing_country']) . "', `billing_zone` = '" . $this->db->escape((string)$data['billing_zone']) . "', `shipping_same` = '" . (int)$data['shipping_same'] . "', `shipping_address` = '" . $this->db->escape((string)$data['shipping_address']) . "', `shipping_city` = '" . $this->db->escape((string)$data['shipping_city']) . "', `shipping_postcode` = '" . $this->db->escape((string)$data['shipping_postcode']) . "', `shipping_country` = '" . $this->db->escape((string)$data['shipping_country']) . "', `shipping_zone` = '" . $this->db->escape((string)$data['shipping_zone']) . "', `trade_license` = '" . $this->db->escape((string)$data['trade_license']) . "', `pan_document` = '" . $this->db->escape((string)$data['pan_document']) . "', `cheque` = '" . $this->db->escape((string)$data['cheque']) . "', `reference` = '" . $this->db->escape((string)$data['reference']) . "', `profile_complete` = '" . (int)$complete . "'");
	}
}

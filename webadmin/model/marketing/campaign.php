<?php
namespace Opencart\Admin\Model\Marketing;

class Campaign extends \Opencart\System\Engine\Model {
	private bool $ready = false;

	public function ensureTable(): void {
		if ($this->ready) {
			return;
		}

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "campaign` (
			`campaign_id` INT(11) NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(255) NOT NULL,
			`subject` VARCHAR(255) NOT NULL,
			`preview_text` VARCHAR(255) NOT NULL DEFAULT '',
			`template` VARCHAR(64) NOT NULL DEFAULT 'announcement',
			`message` MEDIUMTEXT NOT NULL,
			`to` VARCHAR(32) NOT NULL DEFAULT 'newsletter',
			`customer_group_id` INT(11) NOT NULL DEFAULT 0,
			`store_id` INT(11) NOT NULL DEFAULT 0,
			`status` VARCHAR(32) NOT NULL DEFAULT 'draft',
			`recipients` VARCHAR(255) NOT NULL DEFAULT '',
			`delivered` INT(11) NOT NULL DEFAULT 0,
			`total` INT(11) NOT NULL DEFAULT 0,
			`opens` INT(11) NOT NULL DEFAULT 0,
			`clicks` INT(11) NOT NULL DEFAULT 0,
			`orders_opens` INT(11) NOT NULL DEFAULT 0,
			`orders_clicks` INT(11) NOT NULL DEFAULT 0,
			`volume_opens` DECIMAL(15,4) NOT NULL DEFAULT 0.0000,
			`volume_clicks` DECIMAL(15,4) NOT NULL DEFAULT 0.0000,
			`date_sent` DATETIME DEFAULT NULL,
			`date_added` DATETIME NOT NULL,
			`date_modified` DATETIME NOT NULL,
			PRIMARY KEY (`campaign_id`),
			KEY `status` (`status`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

		$this->ensureColumn('preview_text', "VARCHAR(255) NOT NULL DEFAULT '' AFTER `subject`");
		$this->ensureColumn('template', "VARCHAR(64) NOT NULL DEFAULT 'announcement' AFTER `preview_text`");

		$this->ready = true;
	}

	private function ensureColumn(string $column, string $definition): void {
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "campaign` LIKE '" . $this->db->escape($column) . "'");

		if (!$query->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "campaign` ADD `" . $column . "` " . $definition);
		}
	}

	public function addCampaign(array $data): int {
		$this->ensureTable();

		$this->db->query("INSERT INTO `" . DB_PREFIX . "campaign` SET
			`name` = '" . $this->db->escape((string)$data['name']) . "',
			`subject` = '" . $this->db->escape((string)$data['subject']) . "',
			`preview_text` = '" . $this->db->escape((string)($data['preview_text'] ?? '')) . "',
			`template` = '" . $this->db->escape((string)($data['template'] ?? 'announcement')) . "',
			`message` = '" . $this->db->escape((string)$data['message']) . "',
			`to` = '" . $this->db->escape((string)($data['to'] ?? 'newsletter')) . "',
			`customer_group_id` = '" . (int)($data['customer_group_id'] ?? 0) . "',
			`store_id` = '" . (int)($data['store_id'] ?? 0) . "',
			`status` = '" . $this->db->escape((string)($data['status'] ?? 'draft')) . "',
			`recipients` = '" . $this->db->escape((string)($data['recipients'] ?? '')) . "',
			`delivered` = '" . (int)($data['delivered'] ?? 0) . "',
			`total` = '" . (int)($data['total'] ?? 0) . "',
			`date_sent` = " . (!empty($data['date_sent']) ? "'" . $this->db->escape((string)$data['date_sent']) . "'" : 'NULL') . ",
			`date_added` = NOW(),
			`date_modified` = NOW()");

		return (int)$this->db->getLastId();
	}

	public function editCampaign(int $campaign_id, array $data): void {
		$this->ensureTable();

		$sets = [];

		foreach (['name', 'subject', 'preview_text', 'template', 'message', 'to', 'recipients', 'status'] as $field) {
			if (array_key_exists($field, $data)) {
				$sets[] = "`" . $field . "` = '" . $this->db->escape((string)$data[$field]) . "'";
			}
		}

		foreach (['customer_group_id', 'store_id', 'delivered', 'total', 'opens', 'clicks', 'orders_opens', 'orders_clicks'] as $field) {
			if (array_key_exists($field, $data)) {
				$sets[] = "`" . $field . "` = '" . (int)$data[$field] . "'";
			}
		}

		foreach (['volume_opens', 'volume_clicks'] as $field) {
			if (array_key_exists($field, $data)) {
				$sets[] = "`" . $field . "` = '" . (float)$data[$field] . "'";
			}
		}

		if (array_key_exists('date_sent', $data)) {
			$sets[] = "`date_sent` = " . ($data['date_sent'] ? "'" . $this->db->escape((string)$data['date_sent']) . "'" : 'NULL');
		}

		if (!$sets) {
			return;
		}

		$sets[] = "`date_modified` = NOW()";

		$this->db->query("UPDATE `" . DB_PREFIX . "campaign` SET " . implode(', ', $sets) . " WHERE `campaign_id` = '" . (int)$campaign_id . "'");
	}

	public function getCampaign(int $campaign_id): array {
		$this->ensureTable();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "campaign` WHERE `campaign_id` = '" . (int)$campaign_id . "'");

		return $query->row;
	}

	public function getCampaigns(array $data = []): array {
		$this->ensureTable();

		$sql = "SELECT * FROM `" . DB_PREFIX . "campaign` WHERE 1";

		if (!empty($data['filter_status']) && $data['filter_status'] !== 'all') {
			$sql .= " AND `status` = '" . $this->db->escape((string)$data['filter_status']) . "'";
		}

		$sql .= " ORDER BY `date_modified` DESC";

		if (isset($data['start']) || isset($data['limit'])) {
			$start = max(0, (int)($data['start'] ?? 0));
			$limit = max(1, (int)($data['limit'] ?? 20));
			$sql .= " LIMIT " . $start . "," . $limit;
		}

		return $this->db->query($sql)->rows;
	}

	public function getTotalCampaigns(array $data = []): int {
		$this->ensureTable();

		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "campaign` WHERE 1";

		if (!empty($data['filter_status']) && $data['filter_status'] !== 'all') {
			$sql .= " AND `status` = '" . $this->db->escape((string)$data['filter_status']) . "'";
		}

		return (int)$this->db->query($sql)->row['total'];
	}

	public function deleteCampaign(int $campaign_id): void {
		$this->ensureTable();
		$this->db->query("DELETE FROM `" . DB_PREFIX . "campaign` WHERE `campaign_id` = '" . (int)$campaign_id . "'");
	}

	public function defaultMessage(string $store_name, string $catalog_url, string $store_logo = ''): string {
		$store = htmlspecialchars($store_name, ENT_QUOTES, 'UTF-8');
		$url = htmlspecialchars($catalog_url, ENT_QUOTES, 'UTF-8');
		$logo = htmlspecialchars($store_logo, ENT_QUOTES, 'UTF-8');

		$logo_html = $logo
			? '<div class="cb-hero-logo"><a href="' . $url . '"><img src="' . $logo . '" alt="' . $store . '" style="max-height:72px;width:auto;"/></a></div>'
			: '<div class="cb-hero-logo" style="font-weight:700;font-size:18px;">' . $store . '</div>';

		return '<div class="cb-email" style="font-family:Arial,sans-serif;color:#1a1a1a;max-width:640px;margin:0 auto;">'
			. '<div class="cb-email-hero cb-media" data-block="hero" contenteditable="false" style="position:relative;background:#f0eee9;min-height:220px;overflow:hidden;">'
			. $logo_html
			. '<div class="cb-hero-placeholder">Add a hero image</div>'
			. '</div>'
			. '<div class="cb-email-body" style="padding:28px 24px;">'
			. '<p class="cb-email-text" style="margin:0 0 20px;font-size:16px;line-height:1.5;">Tell your retailers about the new products they can order. Leave a note about shipping times or wholesale pricing.</p>'
			. '<p style="text-align:center;margin:0 0 28px;"><a class="cb-email-cta" href="' . $url . '" style="display:inline-block;background:#2f2f2f;color:#fff;text-decoration:none;padding:12px 28px;border-radius:999px;font-weight:600;">Shop Now</a></p>'
			. '</div>'
			. '<div class="cb-email-promo" style="background:#f7f6f3;padding:24px;border-top:1px solid #ebe8e2;">'
			. '<div style="font-weight:700;margin-bottom:8px;">Craft Boat x ' . $store . '</div>'
			. '<ul style="margin:0 0 16px;padding-left:18px;color:#4a4741;font-size:14px;line-height:1.5;">'
			. '<li>Net 60 payment terms</li>'
			. '<li>Free returns on your first order</li>'
			. '<li>Dedicated wholesale support</li>'
			. '</ul>'
			. '<a href="' . $url . '" style="color:#2f5ea8;font-size:14px;">Sign up to shop</a>'
			. '</div></div>';
	}
}

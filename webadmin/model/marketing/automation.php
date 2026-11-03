<?php
namespace Opencart\Admin\Model\Marketing;

class Automation extends \Opencart\System\Engine\Model {
	private bool $ready = false;
	private bool $metrics_ready = false;

	/**
	 * @return array<int, array<string, mixed>>
	 */
	private function catalog(): array {
		return [
			['code' => 'abandoned_cart', 'category' => 'convert', 'name' => 'Abandoned cart follow-up', 'description' => 'Encourage customers with items in their cart to check out', 'sort' => 1],
			['code' => 'new_customer_welcome', 'category' => 'convert', 'name' => 'New customer welcome', 'description' => 'Welcome new customers and introduce your brand', 'sort' => 2],
			['code' => 'signup_offer', 'category' => 'convert', 'name' => 'Sign-up offer reminder', 'description' => 'Remind shoppers about their sign-up offer before it expires', 'sort' => 3],
			['code' => 'direct_signup', 'category' => 'convert', 'name' => 'Faire Direct signup follow-up', 'description' => 'Follow up with retailers who signed up through your Direct link', 'sort' => 4],
			['code' => 'browse_abandon', 'category' => 'convert', 'name' => 'Browse abandonment', 'description' => 'Re-engage shoppers who viewed products but did not add to cart', 'sort' => 5],
			['code' => 'first_order_nudge', 'category' => 'convert', 'name' => 'First order nudge', 'description' => 'Prompt new leads who have not yet placed their first order', 'sort' => 6],
			['code' => 'lead_nurture', 'category' => 'convert', 'name' => 'Lead nurture series', 'description' => 'Send a short series introducing bestsellers and terms', 'sort' => 7],
			['code' => 'lapsed_reengage', 'category' => 'reorder', 'name' => 'Lapsed customer reengagement', 'description' => 'Win back customers who have not ordered in a while', 'sort' => 8],
			['code' => 'day90_reengage', 'category' => 'reorder', 'name' => '90-day reengagement', 'description' => 'Reach out after 90 days without an order', 'sort' => 9],
			['code' => 'follower_conversion', 'category' => 'reorder', 'name' => 'Follower conversion', 'description' => 'Convert store followers into ordering customers', 'sort' => 10],
			['code' => 'replenishment', 'category' => 'reorder', 'name' => 'Replenishment reminder', 'description' => 'Remind buyers when it is time to restock bestsellers', 'sort' => 11],
			['code' => 'seasonal_reorder', 'category' => 'reorder', 'name' => 'Seasonal reorder nudge', 'description' => 'Suggest seasonal reorder windows based on past purchases', 'sort' => 12],
			['code' => 'thank_you', 'category' => 'loyalty', 'name' => 'Post-purchase thank you', 'description' => 'Thank customers after an order and share care tips', 'sort' => 13],
			['code' => 'review_request', 'category' => 'loyalty', 'name' => 'Review request', 'description' => 'Ask happy customers for a review after delivery', 'sort' => 14],
			['code' => 'vip_upgrade', 'category' => 'loyalty', 'name' => 'VIP loyalty upgrade', 'description' => 'Invite top retailers into a loyalty or VIP program', 'sort' => 15],
		];
	}

	public function ensureTable(): void {
		if ($this->ready) {
			return;
		}

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "automation` (
			`automation_id` INT(11) NOT NULL AUTO_INCREMENT,
			`code` VARCHAR(64) NOT NULL,
			`category` VARCHAR(32) NOT NULL,
			`name` VARCHAR(255) NOT NULL,
			`description` VARCHAR(512) NOT NULL DEFAULT '',
			`status` TINYINT(1) NOT NULL DEFAULT 0,
			`delivered` INT(11) NOT NULL DEFAULT 0,
			`opens` INT(11) NOT NULL DEFAULT 0,
			`clicks` INT(11) NOT NULL DEFAULT 0,
			`revenue` DECIMAL(15,4) NOT NULL DEFAULT 0.0000,
			`sort_order` INT(11) NOT NULL DEFAULT 0,
			`date_modified` DATETIME NOT NULL,
			PRIMARY KEY (`automation_id`),
			UNIQUE KEY `code` (`code`),
			KEY `category` (`category`),
			KEY `status` (`status`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

		$this->seed();
		$this->ready = true;
	}

	private function seed(): void {
		$existing = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "automation`");

		if ((int)$existing->row['total'] > 0) {
			return;
		}

		foreach ($this->catalog() as $item) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "automation` SET
				`code` = '" . $this->db->escape($item['code']) . "',
				`category` = '" . $this->db->escape($item['category']) . "',
				`name` = '" . $this->db->escape($item['name']) . "',
				`description` = '" . $this->db->escape($item['description']) . "',
				`status` = '0',
				`delivered` = '0',
				`opens` = '0',
				`clicks` = '0',
				`revenue` = '0.0000',
				`sort_order` = '" . (int)$item['sort'] . "',
				`date_modified` = NOW()");
		}
	}

	/**
	 * Pull live audience / order metrics from the store into automation rows.
	 */
	public function refreshMetrics(): void {
		$this->ensureTable();

		if ($this->metrics_ready) {
			return;
		}

		$stats = $this->computeStoreStats();

		foreach ($stats as $code => $metric) {
			$this->db->query("UPDATE `" . DB_PREFIX . "automation` SET
				`delivered` = '" . (int)$metric['delivered'] . "',
				`opens` = '" . (int)$metric['opens'] . "',
				`clicks` = '" . (int)$metric['clicks'] . "',
				`revenue` = '" . (float)$metric['revenue'] . "',
				`date_modified` = NOW()
				WHERE `code` = '" . $this->db->escape($code) . "'");
		}

		$this->metrics_ready = true;
	}

	/**
	 * @return array<string, array{delivered:int,opens:int,clicks:int,revenue:float}>
	 */
	private function computeStoreStats(): array {
		$since = date('Y-m-d H:i:s', strtotime('-30 days'));
		$zero = ['delivered' => 0, 'opens' => 0, 'clicks' => 0, 'revenue' => 0.0];
		$stats = [];

		foreach ($this->catalog() as $item) {
			$stats[$item['code']] = $zero;
		}

		// Abandoned carts: distinct shoppers with cart activity older than 1 hour, no completed order after cart add.
		$abandoned = $this->db->query("SELECT COUNT(*) AS `total` FROM (
			SELECT COALESCE(NULLIF(`c`.`customer_id`, 0), CONCAT('s:', `c`.`session_id`)) AS `shopper`
			FROM `" . DB_PREFIX . "cart` `c`
			WHERE `c`.`date_added` <= DATE_SUB(NOW(), INTERVAL 1 HOUR)
			AND NOT EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "order` `o`
				WHERE `o`.`customer_id` = `c`.`customer_id`
				AND `c`.`customer_id` > 0
				AND `o`.`order_status_id` > '0'
				AND `o`.`date_added` >= `c`.`date_added`
			)
			GROUP BY `shopper`
		) `t`");
		$stats['abandoned_cart']['delivered'] = (int)($abandoned->row['total'] ?? 0);

		// New customers in last 30 days.
		$new = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` WHERE `status` = '1' AND `date_added` >= '" . $this->db->escape($since) . "'");
		$stats['new_customer_welcome']['delivered'] = (int)($new->row['total'] ?? 0);

		// Newsletter sign-ups without an order yet.
		$signup = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` `c`
			WHERE `c`.`status` = '1' AND `c`.`newsletter` = '1'
			AND NOT EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "order` `o`
				WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
			)");
		$stats['signup_offer']['delivered'] = (int)($signup->row['total'] ?? 0);

		// Trade / Direct signups.
		$trade = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer_trade` `ct`
			LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`ct`.`customer_id` = `c`.`customer_id`)
			WHERE `c`.`status` = '1'");
		$stats['direct_signup']['delivered'] = (int)($trade->row['total'] ?? 0);

		// Browse abandonment from customer activity product views without cart.
		$browse = $this->db->query("SELECT COUNT(DISTINCT `ca`.`customer_id`) AS `total`
			FROM `" . DB_PREFIX . "customer_activity` `ca`
			WHERE `ca`.`date_added` >= '" . $this->db->escape($since) . "'
			AND (`ca`.`key` LIKE '%product%' OR `ca`.`key` = 'view')
			AND NOT EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "cart` `cart` WHERE `cart`.`customer_id` = `ca`.`customer_id`
			)
			AND NOT EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "order` `o`
				WHERE `o`.`customer_id` = `ca`.`customer_id` AND `o`.`order_status_id` > '0'
			)");
		$stats['browse_abandon']['delivered'] = (int)($browse->row['total'] ?? 0);

		// Registered customers with zero successful orders.
		$nudge = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` `c`
			WHERE `c`.`status` = '1'
			AND NOT EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "order` `o`
				WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
			)");
		$stats['first_order_nudge']['delivered'] = (int)($nudge->row['total'] ?? 0);
		$stats['lead_nurture']['delivered'] = (int)($nudge->row['total'] ?? 0);

		// Lapsed: last order older than 60 days (or customers older than 60d with no order).
		$lapsed = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` `c`
			WHERE `c`.`status` = '1'
			AND (
				(
					SELECT MAX(`o`.`date_added`) FROM `" . DB_PREFIX . "order` `o`
					WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
				) < DATE_SUB(NOW(), INTERVAL 60 DAY)
				OR (
					`c`.`date_added` < DATE_SUB(NOW(), INTERVAL 60 DAY)
					AND NOT EXISTS (
						SELECT 1 FROM `" . DB_PREFIX . "order` `o`
						WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
					)
				)
			)");
		$stats['lapsed_reengage']['delivered'] = (int)($lapsed->row['total'] ?? 0);

		$day90 = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` `c`
			WHERE `c`.`status` = '1'
			AND (
				(
					SELECT MAX(`o`.`date_added`) FROM `" . DB_PREFIX . "order` `o`
					WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
				) < DATE_SUB(NOW(), INTERVAL 90 DAY)
				OR (
					`c`.`date_added` < DATE_SUB(NOW(), INTERVAL 90 DAY)
					AND NOT EXISTS (
						SELECT 1 FROM `" . DB_PREFIX . "order` `o`
						WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
					)
				)
			)");
		$stats['day90_reengage']['delivered'] = (int)($day90->row['total'] ?? 0);

		// Newsletter followers who have not ordered.
		$followers = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` `c`
			WHERE `c`.`status` = '1' AND `c`.`newsletter` = '1'
			AND NOT EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "order` `o`
				WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0'
			)");
		$stats['follower_conversion']['delivered'] = (int)($followers->row['total'] ?? 0);

		// Replenishment / seasonal: customers with an order 30–180 days ago.
		$reorder = $this->db->query("SELECT COUNT(DISTINCT `o`.`customer_id`) AS `total`, COALESCE(SUM(`o`.`total`), 0) AS `revenue`
			FROM `" . DB_PREFIX . "order` `o`
			WHERE `o`.`order_status_id` > '0'
			AND `o`.`date_added` <= DATE_SUB(NOW(), INTERVAL 30 DAY)
			AND `o`.`date_added` >= DATE_SUB(NOW(), INTERVAL 180 DAY)");
		$stats['replenishment']['delivered'] = (int)($reorder->row['total'] ?? 0);
		$stats['seasonal_reorder']['delivered'] = (int)($reorder->row['total'] ?? 0);

		// Post-purchase thank you: orders in last 30 days.
		$thanks = $this->db->query("SELECT COUNT(*) AS `total`, COALESCE(SUM(`total`), 0) AS `revenue`
			FROM `" . DB_PREFIX . "order`
			WHERE `order_status_id` > '0'
			AND `date_added` >= '" . $this->db->escape($since) . "'");
		$stats['thank_you']['delivered'] = (int)($thanks->row['total'] ?? 0);
		$stats['thank_you']['revenue'] = (float)($thanks->row['revenue'] ?? 0);

		// Review request: shipped / complete orders in last 30 days.
		$reviews = $this->db->query("SELECT COUNT(*) AS `total`, COALESCE(SUM(`total`), 0) AS `revenue`
			FROM `" . DB_PREFIX . "order`
			WHERE `order_status_id` IN (3, 5, 15)
			AND `date_added` >= '" . $this->db->escape($since) . "'");
		$stats['review_request']['delivered'] = (int)($reviews->row['total'] ?? 0);
		$stats['review_request']['revenue'] = (float)($reviews->row['revenue'] ?? 0);

		// VIP: customers with lifetime spend >= 500 (or top spenders).
		$vip = $this->db->query("SELECT COUNT(*) AS `total`, COALESCE(SUM(`spend`), 0) AS `revenue` FROM (
			SELECT `o`.`customer_id`, SUM(`o`.`total`) AS `spend`
			FROM `" . DB_PREFIX . "order` `o`
			WHERE `o`.`order_status_id` > '0' AND `o`.`customer_id` > 0
			GROUP BY `o`.`customer_id`
			HAVING `spend` >= 500
		) `t`");
		$stats['vip_upgrade']['delivered'] = (int)($vip->row['total'] ?? 0);
		$stats['vip_upgrade']['revenue'] = (float)($vip->row['revenue'] ?? 0);

		// Attribute recovered revenue for abandoned cart: orders from customers who had a cart before ordering (last 30d).
		$recovered = $this->db->query("SELECT COUNT(DISTINCT `o`.`order_id`) AS `total`, COALESCE(SUM(`o`.`total`), 0) AS `revenue`
			FROM `" . DB_PREFIX . "order` `o`
			WHERE `o`.`order_status_id` > '0'
			AND `o`.`date_added` >= '" . $this->db->escape($since) . "'
			AND EXISTS (
				SELECT 1 FROM `" . DB_PREFIX . "cart` `c`
				WHERE `c`.`customer_id` = `o`.`customer_id` AND `c`.`customer_id` > 0
			)");
		if ((int)($recovered->row['total'] ?? 0) > 0) {
			$stats['abandoned_cart']['revenue'] = (float)($recovered->row['revenue'] ?? 0);
		}

		return $stats;
	}

	/**
	 * @param array<string, mixed> $data
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getAutomations(array $data = []): array {
		$this->refreshMetrics();

		$sql = "SELECT * FROM `" . DB_PREFIX . "automation`";

		$implode = [];

		if (!empty($data['filter_category']) && $data['filter_category'] !== 'all') {
			$implode[] = "`category` = '" . $this->db->escape((string)$data['filter_category']) . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(' AND ', $implode);
		}

		$sql .= " ORDER BY `sort_order` ASC, `name` ASC";

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalAutomations(array $data = []): int {
		$this->ensureTable();

		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "automation`";

		if (!empty($data['filter_category']) && $data['filter_category'] !== 'all') {
			$sql .= " WHERE `category` = '" . $this->db->escape((string)$data['filter_category']) . "'";
		}

		if (isset($data['filter_status'])) {
			$where = !empty($data['filter_category']) && $data['filter_category'] !== 'all' ? ' AND' : ' WHERE';
			$sql .= $where . " `status` = '" . (int)$data['filter_status'] . "'";
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	public function getAutomation(int $automation_id): array {
		$this->ensureTable();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "automation` WHERE `automation_id` = '" . (int)$automation_id . "'");

		return $query->row;
	}

	public function setStatus(int $automation_id, bool $status): void {
		$this->ensureTable();

		$this->db->query("UPDATE `" . DB_PREFIX . "automation` SET `status` = '" . (int)$status . "', `date_modified` = NOW() WHERE `automation_id` = '" . (int)$automation_id . "'");
	}

	/**
	 * @return array<string, mixed>
	 */
	public function getOverview(): array {
		$this->refreshMetrics();

		$query = $this->db->query("SELECT
			SUM(CASE WHEN `status` = 1 THEN 1 ELSE 0 END) AS `active`,
			COUNT(*) AS `total`,
			COALESCE(SUM(CASE WHEN `status` = 1 THEN `delivered` ELSE 0 END), 0) AS `delivered`,
			COALESCE(SUM(CASE WHEN `status` = 1 THEN `opens` ELSE 0 END), 0) AS `opens`,
			COALESCE(SUM(CASE WHEN `status` = 1 THEN `clicks` ELSE 0 END), 0) AS `clicks`,
			COALESCE(SUM(CASE WHEN `status` = 1 THEN `revenue` ELSE 0 END), 0) AS `revenue`
			FROM `" . DB_PREFIX . "automation`");

		$row = $query->row;
		$delivered = (int)($row['delivered'] ?? 0);
		$opens = (int)($row['opens'] ?? 0);
		$clicks = (int)($row['clicks'] ?? 0);

		return [
			'active'     => (int)($row['active'] ?? 0),
			'total'      => (int)($row['total'] ?? 0),
			'delivered'  => $delivered,
			'open_rate'  => $delivered > 0 ? round(($opens / $delivered) * 100, 1) : 0,
			'click_rate' => $delivered > 0 ? round(($clicks / $delivered) * 100, 1) : 0,
			'revenue'    => (float)($row['revenue'] ?? 0)
		];
	}

	public function getNextInactiveId(): int {
		$this->ensureTable();

		$query = $this->db->query("SELECT `automation_id` FROM `" . DB_PREFIX . "automation` WHERE `status` = '0' ORDER BY `sort_order` ASC LIMIT 1");

		return (int)($query->row['automation_id'] ?? 0);
	}
}

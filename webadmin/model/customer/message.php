<?php
namespace Opencart\Admin\Model\Customer;

class Message extends \Opencart\System\Engine\Model {
	private bool $ready = false;

	public function ensureTables(): void {
		if ($this->ready) {
			return;
		}

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "message_thread` (
			`thread_id` INT(11) NOT NULL AUTO_INCREMENT,
			`customer_id` INT(11) NOT NULL,
			`order_id` INT(11) NOT NULL DEFAULT 0,
			`subject` VARCHAR(255) NOT NULL DEFAULT '',
			`starred` TINYINT(1) NOT NULL DEFAULT 0,
			`admin_unread` INT(11) NOT NULL DEFAULT 0,
			`customer_unread` INT(11) NOT NULL DEFAULT 0,
			`last_message` TEXT NOT NULL,
			`last_sender` VARCHAR(16) NOT NULL DEFAULT 'customer',
			`date_last` DATETIME NOT NULL,
			`date_added` DATETIME NOT NULL,
			PRIMARY KEY (`thread_id`),
			KEY `customer_id` (`customer_id`),
			KEY `starred` (`starred`),
			KEY `date_last` (`date_last`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "message` (
			`message_id` INT(11) NOT NULL AUTO_INCREMENT,
			`thread_id` INT(11) NOT NULL,
			`sender` VARCHAR(16) NOT NULL,
			`user_id` INT(11) NOT NULL DEFAULT 0,
			`customer_id` INT(11) NOT NULL DEFAULT 0,
			`body` TEXT NOT NULL,
			`attachment` VARCHAR(255) NOT NULL DEFAULT '',
			`date_added` DATETIME NOT NULL,
			PRIMARY KEY (`message_id`),
			KEY `thread_id` (`thread_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

		$this->ready = true;
	}

	public function getThreads(array $filter = []): array {
		$this->ensureTables();

		$sql = "SELECT `t`.*, CONCAT(TRIM(`c`.`firstname`), ' ', TRIM(`c`.`lastname`)) AS `customer_name`, `c`.`firstname`, `c`.`lastname`, `c`.`email`, `c`.`telephone`, `c`.`date_added` AS `customer_since`, COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `c`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company` FROM `" . DB_PREFIX . "message_thread` `t` LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`t`.`customer_id` = `c`.`customer_id`) WHERE 1";

		if (!empty($filter['filter_unread'])) {
			$sql .= " AND `t`.`admin_unread` > '0'";
		}

		if (!empty($filter['filter_starred'])) {
			$sql .= " AND `t`.`starred` = '1'";
		}

		if (!empty($filter['filter_search'])) {
			$search = $this->db->escape((string)$filter['filter_search']);
			$sql .= " AND (CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) LIKE '%" . $search . "%' OR `c`.`email` LIKE '%" . $search . "%' OR `t`.`last_message` LIKE '%" . $search . "%' OR `t`.`subject` LIKE '%" . $search . "%')";
		}

		$sql .= " ORDER BY `t`.`date_last` DESC";

		if (isset($filter['start']) || isset($filter['limit'])) {
			$start = max(0, (int)($filter['start'] ?? 0));
			$limit = max(1, (int)($filter['limit'] ?? 50));
			$sql .= " LIMIT " . $start . "," . $limit;
		}

		return $this->db->query($sql)->rows;
	}

	public function getUnreadCount(): int {
		$this->ensureTables();

		$query = $this->db->query("SELECT COALESCE(SUM(`admin_unread`), 0) AS `total` FROM `" . DB_PREFIX . "message_thread`");

		return (int)$query->row['total'];
	}

	public function getStarredCount(): int {
		$this->ensureTables();

		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "message_thread` WHERE `starred` = '1'");

		return (int)$query->row['total'];
	}

	public function getThread(int $thread_id): array {
		$this->ensureTables();

		$query = $this->db->query("SELECT `t`.*, CONCAT(TRIM(`c`.`firstname`), ' ', TRIM(`c`.`lastname`)) AS `customer_name`, `c`.`firstname`, `c`.`lastname`, `c`.`email`, `c`.`telephone`, `c`.`date_added` AS `customer_since`, COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `c`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company` FROM `" . DB_PREFIX . "message_thread` `t` LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`t`.`customer_id` = `c`.`customer_id`) WHERE `t`.`thread_id` = '" . (int)$thread_id . "' LIMIT 1");

		return $query->row ?: [];
	}

	public function getThreadByCustomer(int $customer_id): array {
		$this->ensureTables();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "message_thread` WHERE `customer_id` = '" . (int)$customer_id . "' ORDER BY `date_last` DESC LIMIT 1");

		return $query->row ?: [];
	}

	public function getOrCreateThread(int $customer_id, int $order_id = 0): int {
		$this->ensureTables();

		$existing = $this->getThreadByCustomer($customer_id);

		if ($existing) {
			if ($order_id && !(int)$existing['order_id']) {
				$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `order_id` = '" . (int)$order_id . "' WHERE `thread_id` = '" . (int)$existing['thread_id'] . "'");
			}

			return (int)$existing['thread_id'];
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "message_thread` SET `customer_id` = '" . (int)$customer_id . "', `order_id` = '" . (int)$order_id . "', `subject` = '', `starred` = '0', `admin_unread` = '0', `customer_unread` = '0', `last_message` = '', `last_sender` = 'admin', `date_last` = NOW(), `date_added` = NOW()");

		return (int)$this->db->getLastId();
	}

	public function getMessages(int $thread_id): array {
		$this->ensureTables();

		return $this->db->query("SELECT * FROM `" . DB_PREFIX . "message` WHERE `thread_id` = '" . (int)$thread_id . "' ORDER BY `date_added` ASC, `message_id` ASC")->rows;
	}

	public function addMessage(int $thread_id, string $sender, string $body, int $user_id = 0, int $customer_id = 0, string $attachment = ''): int {
		$this->ensureTables();

		$body = trim($body);

		$this->db->query("INSERT INTO `" . DB_PREFIX . "message` SET `thread_id` = '" . (int)$thread_id . "', `sender` = '" . $this->db->escape($sender) . "', `user_id` = '" . (int)$user_id . "', `customer_id` = '" . (int)$customer_id . "', `body` = '" . $this->db->escape($body) . "', `attachment` = '" . $this->db->escape($attachment) . "', `date_added` = NOW()");

		$message_id = (int)$this->db->getLastId();

		$preview = mb_substr(preg_replace('/\s+/', ' ', strip_tags($body)), 0, 180);

		if ($sender === 'admin') {
			$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `last_message` = '" . $this->db->escape($preview) . "', `last_sender` = 'admin', `customer_unread` = `customer_unread` + 1, `date_last` = NOW() WHERE `thread_id` = '" . (int)$thread_id . "'");
		} elseif ($sender === 'customer') {
			$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `last_message` = '" . $this->db->escape($preview) . "', `last_sender` = 'customer', `admin_unread` = `admin_unread` + 1, `date_last` = NOW() WHERE `thread_id` = '" . (int)$thread_id . "'");
		} else {
			$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `last_message` = '" . $this->db->escape($preview) . "', `last_sender` = 'system', `date_last` = NOW() WHERE `thread_id` = '" . (int)$thread_id . "'");
		}

		return $message_id;
	}

	public function markAdminRead(int $thread_id): void {
		$this->ensureTables();

		$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `admin_unread` = '0' WHERE `thread_id` = '" . (int)$thread_id . "'");
	}

	public function toggleStar(int $thread_id): bool {
		$this->ensureTables();

		$thread = $this->getThread($thread_id);

		if (!$thread) {
			return false;
		}

		$starred = (int)$thread['starred'] ? 0 : 1;

		$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `starred` = '" . (int)$starred . "' WHERE `thread_id` = '" . (int)$thread_id . "'");

		return (bool)$starred;
	}

	public function getCustomerContext(int $customer_id): array {
		$query = $this->db->query("SELECT `c`.*, CONCAT(TRIM(`c`.`firstname`), ' ', TRIM(`c`.`lastname`)) AS `name`, COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `c`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company`, COALESCE((SELECT CONCAT_WS(', ', NULLIF(`a`.`address_1`, ''), NULLIF(`a`.`address_2`, ''), NULLIF(`a`.`city`, ''), NULLIF(`a`.`postcode`, '')) FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `c`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `address_line` FROM `" . DB_PREFIX . "customer` `c` WHERE `c`.`customer_id` = '" . (int)$customer_id . "' LIMIT 1");

		if (!$query->row) {
			return [];
		}

		$stats = $this->db->query("SELECT COUNT(*) AS `orders`, COALESCE(SUM(`total`), 0) AS `volume` FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . (int)$customer_id . "' AND `order_status_id` > '0'")->row;

		$orders = $this->db->query("SELECT `o`.`order_id`, `o`.`total`, `o`.`currency_code`, `o`.`currency_value`, `o`.`date_added`, `os`.`name` AS `status` FROM `" . DB_PREFIX . "order` `o` LEFT JOIN `" . DB_PREFIX . "order_status` `os` ON (`o`.`order_status_id` = `os`.`order_status_id` AND `os`.`language_id` = '" . (int)$this->config->get('config_language_id') . "') WHERE `o`.`customer_id` = '" . (int)$customer_id . "' AND `o`.`order_status_id` > '0' ORDER BY `o`.`date_added` DESC LIMIT 3")->rows;

		foreach ($orders as &$order) {
			$products = $this->db->query("SELECT `name`, `image` FROM `" . DB_PREFIX . "order_product` `op` LEFT JOIN `" . DB_PREFIX . "product` `p` ON (`op`.`product_id` = `p`.`product_id`) WHERE `op`.`order_id` = '" . (int)$order['order_id'] . "' LIMIT 5")->rows;
			$order['products'] = $products;
			$order['product_count'] = (int)$this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "order_product` WHERE `order_id` = '" . (int)$order['order_id'] . "'")->row['total'];
		}

		return [
			'customer' => $query->row,
			'orders_total' => (int)($stats['orders'] ?? 0),
			'volume' => (float)($stats['volume'] ?? 0),
			'orders' => $orders
		];
	}
}

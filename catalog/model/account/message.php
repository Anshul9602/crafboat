<?php
namespace Opencart\Catalog\Model\Account;

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

	public function getThreadForCustomer(int $customer_id): array {
		$this->ensureTables();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "message_thread` WHERE `customer_id` = '" . (int)$customer_id . "' ORDER BY `date_last` DESC LIMIT 1");

		return $query->row ?: [];
	}

	public function getOrCreateThread(int $customer_id, int $order_id = 0): int {
		$this->ensureTables();

		$existing = $this->getThreadForCustomer($customer_id);

		if ($existing) {
			if ($order_id && !(int)$existing['order_id']) {
				$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `order_id` = '" . (int)$order_id . "' WHERE `thread_id` = '" . (int)$existing['thread_id'] . "'");
			}

			return (int)$existing['thread_id'];
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "message_thread` SET `customer_id` = '" . (int)$customer_id . "', `order_id` = '" . (int)$order_id . "', `subject` = '', `starred` = '0', `admin_unread` = '0', `customer_unread` = '0', `last_message` = '', `last_sender` = 'customer', `date_last` = NOW(), `date_added` = NOW()");

		return (int)$this->db->getLastId();
	}

	public function getMessages(int $thread_id, int $customer_id): array {
		$this->ensureTables();

		$thread = $this->db->query("SELECT `thread_id` FROM `" . DB_PREFIX . "message_thread` WHERE `thread_id` = '" . (int)$thread_id . "' AND `customer_id` = '" . (int)$customer_id . "' LIMIT 1");

		if (!$thread->row) {
			return [];
		}

		return $this->db->query("SELECT * FROM `" . DB_PREFIX . "message` WHERE `thread_id` = '" . (int)$thread_id . "' ORDER BY `date_added` ASC, `message_id` ASC")->rows;
	}

	public function addMessage(int $thread_id, int $customer_id, string $body, string $attachment = ''): int {
		$this->ensureTables();

		$thread = $this->db->query("SELECT `thread_id` FROM `" . DB_PREFIX . "message_thread` WHERE `thread_id` = '" . (int)$thread_id . "' AND `customer_id` = '" . (int)$customer_id . "' LIMIT 1");

		if (!$thread->row) {
			return 0;
		}

		$body = trim($body);

		$this->db->query("INSERT INTO `" . DB_PREFIX . "message` SET `thread_id` = '" . (int)$thread_id . "', `sender` = 'customer', `user_id` = '0', `customer_id` = '" . (int)$customer_id . "', `body` = '" . $this->db->escape($body) . "', `attachment` = '" . $this->db->escape($attachment) . "', `date_added` = NOW()");

		$message_id = (int)$this->db->getLastId();
		$preview = mb_substr(preg_replace('/\s+/', ' ', strip_tags($body)), 0, 180);

		$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `last_message` = '" . $this->db->escape($preview) . "', `last_sender` = 'customer', `admin_unread` = `admin_unread` + 1, `date_last` = NOW() WHERE `thread_id` = '" . (int)$thread_id . "'");

		return $message_id;
	}

	public function markCustomerRead(int $thread_id, int $customer_id): void {
		$this->ensureTables();

		$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `customer_unread` = '0' WHERE `thread_id` = '" . (int)$thread_id . "' AND `customer_id` = '" . (int)$customer_id . "'");
	}

	public function getUnreadCount(int $customer_id): int {
		$this->ensureTables();

		$query = $this->db->query("SELECT COALESCE(SUM(`customer_unread`), 0) AS `total` FROM `" . DB_PREFIX . "message_thread` WHERE `customer_id` = '" . (int)$customer_id . "'");

		return (int)$query->row['total'];
	}
}

<?php
namespace Opencart\Admin\Controller\Common;
/**
 * Faire-style Home dashboard
 *
 * @package Opencart\Admin\Controller\Common
 */
class Dashboard extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 */
	public function index(): void {
		$this->load->language('common/dashboard');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];
		$hour = (int)date('G');

		if ($hour < 12) {
			$greeting_key = 'text_greeting_morning';
		} elseif ($hour < 17) {
			$greeting_key = 'text_greeting_afternoon';
		} else {
			$greeting_key = 'text_greeting_evening';
		}

		$firstname = trim((string)$this->user->getFirstName()) ?: 'there';

		$data['greeting'] = sprintf($this->language->get($greeting_key), $firstname);
		$data['see_updates'] = $this->language->get('text_see_updates');
		$data['updates_href'] = $this->url->link('sale/order', $token);

		$data['tip'] = [
			'title' => $this->language->get('text_tip_title'),
			'body'  => $this->language->get('text_tip_body'),
			'link'  => $this->language->get('text_tip_link'),
			'href'  => $this->url->link('catalog/product', $token)
		];

		$data['potential_title'] = $this->language->get('text_potential_title');
		$data['potential_sub'] = $this->language->get('text_potential_sub');
		$data['text_view_all'] = $this->language->get('text_view_all');
		$data['text_beta'] = $this->language->get('text_beta');
		$data['text_no_potential'] = $this->language->get('text_no_potential');
		$data['potential_href'] = $this->url->link('customer/customer', $token . '&tab=potential');
		$data['potentials'] = $this->getHighPotentialCustomers(3);

		$orders = $this->getOpenOrders(6);
		$data['open_orders_title'] = $this->language->get('text_open_orders');
		$data['open_orders_summary'] = sprintf($this->language->get('text_open_summary'), $orders['new_count'], $orders['unfulfilled_count']);
		$data['text_no_orders'] = $this->language->get('text_no_orders');
		$data['orders_href'] = $this->url->link('sale/order', $token);
		$data['open_orders'] = $orders['rows'];

		$data['developer_status'] = $this->user->hasPermission('access', 'common/developer');
		$data['user_token'] = $this->session->data['user_token'];
		$data['security'] = $this->load->controller('common/security');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/dashboard', $data));
	}

	/**
	 * @return array<int, array<string, mixed>>
	 */
	private function getHighPotentialCustomers(int $limit = 3): array {
		$token = 'user_token=' . $this->session->data['user_token'];

		try {
			$rows = $this->db->query("SELECT `c`.`customer_id`, CONCAT(TRIM(`c`.`firstname`), ' ', TRIM(`c`.`lastname`)) AS `name`, `c`.`firstname`, `c`.`date_added`, COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `c`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company`, (SELECT COUNT(*) FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0') AS `orders`, (SELECT COALESCE(SUM(`o`.`total`), 0) FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0') AS `volume`, (SELECT MAX(`o`.`date_added`) FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0') AS `last_order` FROM `" . DB_PREFIX . "customer` `c` ORDER BY `volume` DESC, `c`.`date_added` DESC LIMIT 40")->rows;
		} catch (\Throwable $e) {
			return [];
		}

		$with_orders = [];

		foreach ($rows as $row) {
			if ((int)$row['orders'] > 0) {
				$with_orders[] = $row;
			}
		}

		usort($with_orders, static function ($a, $b) {
			return (float)$b['volume'] <=> (float)$a['volume'];
		});

		$top_count = max(1, (int)ceil(count($with_orders) * 0.1));
		$top_ids = array_column(array_slice($with_orders, 0, $top_count), 'customer_id');

		$out = [];

		foreach ($rows as $row) {
			$orders = (int)$row['orders'];
			$days = $row['last_order'] ? (int)floor((time() - strtotime($row['last_order'])) / 86400) : null;
			$store = trim((string)$row['company']) !== '' ? trim((string)$row['company']) : trim((string)$row['name']);
			$initial = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $store) ?: 'C', 0, 1));
			$first = trim((string)$row['firstname']) ?: explode(' ', $store)[0];

			if ($orders > 0 && $days !== null && $days >= 30) {
				$badge = in_array($row['customer_id'], $top_ids, true) ? $this->language->get('text_top_account') : $this->language->get('text_account');
				$insight = "Hasn't ordered in " . $days . " days";
			} elseif ($orders === 0) {
				$badge = $this->language->get('text_lead');
				$insight = 'Has an account but has not ordered yet';
			} elseif ($orders === 1) {
				$badge = $this->language->get('text_new_account');
				$insight = 'Placed their first order recently';
			} else {
				continue;
			}

			$out[] = [
				'badge'   => $badge,
				'initial' => $initial,
				'store'   => $store,
				'insight' => $insight,
				'action'  => 'Message ' . $first,
				'href'    => $this->url->link('customer/customer.form', $token . '&customer_id=' . (int)$row['customer_id'])
			];

			if (count($out) >= $limit) {
				break;
			}
		}

		return $out;
	}

	/**
	 * @return array{rows: array<int, array<string, mixed>>, new_count: int, unfulfilled_count: int}
	 */
	private function getOpenOrders(int $limit = 6): array {
		$token = 'user_token=' . $this->session->data['user_token'];
		$complete = array_map('intval', (array)$this->config->get('config_complete_status'));
		$processing = array_map('intval', (array)$this->config->get('config_processing_status'));

		$exclude = $complete ?: [-1];
		$exclude_sql = implode(',', array_map('intval', $exclude));

		try {
			$total_q = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "order` WHERE `order_status_id` > '0' AND `order_status_id` NOT IN (" . $exclude_sql . ")");
			$unfulfilled = (int)$total_q->row['total'];

			$new_count = 0;
			if ($processing) {
				$proc_sql = implode(',', array_map('intval', $processing));
				$new_count = (int)$this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "order` WHERE `order_status_id` IN (" . $proc_sql . ")")->row['total'];
			}

			$rows = $this->db->query("SELECT `o`.`order_id`, `o`.`firstname`, `o`.`lastname`, `o`.`total`, `o`.`currency_code`, `o`.`currency_value`, `o`.`date_added`, `o`.`order_status_id`, `os`.`name` AS `order_status`, COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `o`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company`, (SELECT COALESCE(SUM(`ot`.`value`), 0) FROM `" . DB_PREFIX . "order_total` `ot` WHERE `ot`.`order_id` = `o`.`order_id` AND `ot`.`code` = 'coupon') AS `discount` FROM `" . DB_PREFIX . "order` `o` LEFT JOIN `" . DB_PREFIX . "order_status` `os` ON (`o`.`order_status_id` = `os`.`order_status_id` AND `os`.`language_id` = '" . (int)$this->config->get('config_language_id') . "') WHERE `o`.`order_status_id` > '0' AND `o`.`order_status_id` NOT IN (" . $exclude_sql . ") ORDER BY `o`.`date_added` DESC LIMIT " . (int)$limit)->rows;
		} catch (\Throwable $e) {
			return ['rows' => [], 'new_count' => 0, 'unfulfilled_count' => 0];
		}

		$out = [];

		foreach ($rows as $row) {
			$is_new = in_array((int)$row['order_status_id'], $processing, true);
			$name = trim((string)$row['company']);
			if ($name === '') {
				$name = trim($row['firstname'] . ' ' . $row['lastname']);
			}

			$discount = (float)$row['discount'];
			$discount_label = $discount < 0
				? $this->currency->format(abs($discount), $row['currency_code'], $row['currency_value'])
				: '';

			$out[] = [
				'status'         => $is_new ? $this->language->get('text_status_new') : $this->language->get('text_status_unfulfilled'),
				'status_class'   => $is_new ? 'new' : 'unfulfilled',
				'date'           => date('M j, Y', strtotime($row['date_added'])),
				'customer'       => $name,
				'discount'       => $discount_label,
				'total'          => $this->currency->format($row['total'], $row['currency_code'], $row['currency_value']),
				'href'           => $this->url->link('sale/order.info', $token . '&order_id=' . (int)$row['order_id'])
			];
		}

		return [
			'rows'               => $out,
			'new_count'          => $new_count,
			'unfulfilled_count'  => max(0, $unfulfilled - $new_count)
		];
	}
}

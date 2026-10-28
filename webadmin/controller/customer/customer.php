<?php
namespace Opencart\Admin\Controller\Customer;
/**
 * Class Customer
 *
 * Can be loaded using $this->load->controller('customer/customer');
 *
 * @package Opencart\Admin\Controller\Customer
 */
class Customer extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('customer/customer');

		$this->document->setTitle($this->language->get('heading_title'));

		if (isset($this->request->get['filter_name'])) {
			$filter_name = (string)$this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = (string)$this->request->get['filter_email'];
		} else {
			$filter_email = '';
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$filter_customer_group_id = (int)$this->request->get['filter_customer_group_id'];
		} else {
			$filter_customer_group_id = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = (bool)$this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_ip'])) {
			$filter_ip = (string)$this->request->get['filter_ip'];
		} else {
			$filter_ip = '';
		}

		if (isset($this->request->get['filter_date_from'])) {
			$filter_date_from = (string)$this->request->get['filter_date_from'];
		} else {
			$filter_date_from = '';
		}

		if (isset($this->request->get['filter_date_to'])) {
			$filter_date_to = (string)$this->request->get['filter_date_to'];
		} else {
			$filter_date_to = '';
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['add'] = $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('customer/customer.delete', 'user_token=' . $this->session->data['user_token']);

		$this->load->model('customer/customer');
		$data['total_all'] = $this->model_customer_customer->getTotalCustomers([]);
		$data['total_enabled'] = $this->model_customer_customer->getTotalCustomers(['filter_status' => true]);
		$data['total_customers'] = $this->model_customer_customer->getTotalCustomers([
			'filter_name'              => $filter_name,
			'filter_email'             => $filter_email,
			'filter_customer_group_id' => $filter_customer_group_id,
			'filter_status'            => $filter_status,
			'filter_ip'                => $filter_ip,
			'filter_date_from'         => $filter_date_from,
			'filter_date_to'           => $filter_date_to
		]);
		$tab = (string)($this->request->get['tab'] ?? 'all');

		if (!in_array($tab, ['all', 'enabled', 'potential'], true)) {
			$tab = 'all';
		}

		if ($filter_status === true || $filter_status === '1' || $filter_status === 1) {
			$tab = 'enabled';
		}

		$token = 'user_token=' . $this->session->data['user_token'];
		$data['filter_all'] = $this->url->link('customer/customer', $token . '&tab=all');
		$data['filter_enabled'] = $this->url->link('customer/customer', $token . '&tab=enabled&filter_status=1');
		$data['filter_potential'] = $this->url->link('customer/customer', $token . '&tab=potential');
		$data['status_tab'] = $tab;

		$insights = $this->getCustomerInsights();
		$data['recommendations'] = $insights['recommendations'];
		$data['segments'] = $insights['segments'];
		$data['recommendation_total'] = $insights['recommendation_total'];

		$data['list'] = ($tab === 'potential') ? '' : $this->getList();

		// Customer Groups
		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$data['filter_name'] = $filter_name;
		$data['filter_email'] = $filter_email;
		$data['filter_customer_group_id'] = $filter_customer_group_id;
		$data['filter_status'] = $filter_status;
		$data['filter_ip'] = $filter_ip;
		$data['filter_date_from'] = $filter_date_from;
		$data['filter_date_to'] = $filter_date_to;

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/customer', $data));
	}

	/**
	 * Build Faire-style customer insights / segments from live order data.
	 *
	 * @return array{recommendations: array<int, array<string, mixed>>, segments: array<int, array<string, mixed>>, recommendation_total: int}
	 */
	private function getCustomerInsights(): array {
		$token = 'user_token=' . $this->session->data['user_token'];
		$currency = $this->config->get('config_currency');

		$stats = $this->db->query("SELECT `c`.`customer_id`, CONCAT(TRIM(`c`.`firstname`), ' ', TRIM(`c`.`lastname`)) AS `name`, `c`.`email`, `c`.`date_added`, COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = `c`.`customer_id` ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company`, (SELECT COUNT(*) FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0') AS `orders`, (SELECT COALESCE(SUM(`o`.`total`), 0) FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0') AS `volume`, (SELECT MAX(`o`.`date_added`) FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0') AS `last_order` FROM `" . DB_PREFIX . "customer` `c` ORDER BY `volume` DESC, `c`.`date_added` DESC")->rows;

		$with_orders = [];
		$no_orders = [];
		$reorder = [];
		$newest = [];
		$cart_customers = [];
		$engaged = [];

		foreach ($stats as $row) {
			$orders = (int)$row['orders'];
			$volume = (float)$row['volume'];
			$days_since_order = $row['last_order'] ? (int)floor((time() - strtotime($row['last_order'])) / 86400) : null;
			$days_since_join = (int)floor((time() - strtotime($row['date_added'])) / 86400);
			$store = trim((string)$row['company']) !== '' ? trim((string)$row['company']) : trim((string)$row['name']);

			$row['_store'] = $store;
			$row['_volume'] = $volume;
			$row['_orders'] = $orders;
			$row['_days_since_order'] = $days_since_order;
			$row['_edit'] = $this->url->link('customer/customer.form', $token . '&customer_id=' . (int)$row['customer_id']);

			if ($orders > 0) {
				$with_orders[] = $row;

				if ($days_since_order !== null && $days_since_order >= 30) {
					$reorder[] = $row;
				}

				if ($orders === 1 && $days_since_join <= 90) {
					$newest[] = $row;
				}
			} else {
				$no_orders[] = $row;

				if ($days_since_join <= 14) {
					$engaged[] = $row;
				}
			}
		}

		// Open carts (session carts linked by customer_id when available)
		$cart_q = $this->db->query("SELECT `customer_id`, SUM(`quantity`) AS `qty` FROM `" . DB_PREFIX . "cart` WHERE `customer_id` > '0' GROUP BY `customer_id`");
		$cart_ids = [];

		foreach ($cart_q->rows as $cart) {
			$cart_ids[(int)$cart['customer_id']] = (int)$cart['qty'];
		}

		foreach ($stats as $row) {
			if (isset($cart_ids[(int)$row['customer_id']])) {
				$cart_customers[] = $row;
			}
		}

		usort($with_orders, static function ($a, $b) {
			return $b['_volume'] <=> $a['_volume'];
		});

		$top_count = max(1, (int)ceil(count($with_orders) * 0.1));
		$top_accounts = array_slice($with_orders, 0, $top_count);
		$top_ids = array_column($top_accounts, 'customer_id');

		$sum_volume = static function (array $rows): float {
			$total = 0.0;

			foreach ($rows as $row) {
				$total += (float)$row['_volume'];
			}

			return $total;
		};

		$recommendations = [];

		foreach (array_slice($with_orders, 0, 12) as $row) {
			$badge = in_array($row['customer_id'], $top_ids, true) ? 'Top account' : (($row['_orders'] === 1) ? 'New account' : 'Account');
			$insight = 'Review recent activity and reach out.';

			if ($row['_days_since_order'] !== null && $row['_days_since_order'] >= 30) {
				$insight = "Hasn't ordered in " . $row['_days_since_order'] . " days";
			} elseif ($row['_orders'] === 1) {
				$insight = 'Placed their first order recently';
			} elseif ($row['_volume'] > 0) {
				$insight = 'Order volume ' . $this->currency->format($row['_volume'], $currency);
			}

			$tip = ($row['_days_since_order'] !== null && $row['_days_since_order'] >= 30)
				? 'Check in and share new arrivals.'
				: 'Send a personal thank-you or reorder reminder.';

			$recommendations[] = [
				'badge'   => $badge,
				'store'   => $row['_store'],
				'insight' => $insight,
				'tip'     => $tip,
				'action'  => 'Message ' . explode(' ', trim((string)$row['name']))[0],
				'href'    => $row['_edit']
			];
		}

		foreach (array_slice($no_orders, 0, 6) as $row) {
			$recommendations[] = [
				'badge'   => 'Lead',
				'store'   => $row['_store'],
				'insight' => 'Has an account but has not ordered yet',
				'tip'     => 'Invite them to place an opening order.',
				'action'  => 'Message ' . explode(' ', trim((string)$row['name']))[0],
				'href'    => $row['_edit']
			];
		}

		$segments = [
			[
				'key'         => 'top',
				'icon'        => 'fa-trophy',
				'title'       => 'Your top accounts',
				'desc'        => 'Your highest spenders (Top 10%).',
				'count_label' => 'Total customers',
				'count'       => count($top_accounts),
				'value_label' => 'Total order volume',
				'value'       => $this->currency->format($sum_volume($top_accounts), $currency),
				'href'        => $this->url->link('customer/customer', $token . '&tab=all')
			],
			[
				'key'         => 'reorder',
				'icon'        => 'fa-rotate',
				'title'       => 'Reorder ready customers',
				'desc'        => "Haven't ordered in a while — likely ready to restock.",
				'count_label' => 'Total customers',
				'count'       => count($reorder),
				'value_label' => 'Value of opportunity',
				'value'       => $this->currency->format($sum_volume($reorder), $currency),
				'href'        => $this->url->link('customer/customer', $token . '&tab=all')
			],
			[
				'key'         => 'cart',
				'icon'        => 'fa-cart-shopping',
				'title'       => 'Open cart customers',
				'desc'        => 'Added products but have not checked out.',
				'count_label' => 'Total customers',
				'count'       => count($cart_customers),
				'value_label' => 'Open carts',
				'value'       => (string)count($cart_customers),
				'href'        => $this->url->link('customer/customer', $token . '&tab=all')
			],
			[
				'key'         => 'newest',
				'icon'        => 'fa-star',
				'title'       => 'Newest accounts',
				'desc'        => 'Retailers who placed their first order.',
				'count_label' => 'Total customers',
				'count'       => count($newest),
				'value_label' => 'Total order volume',
				'value'       => $this->currency->format($sum_volume($newest), $currency),
				'href'        => $this->url->link('customer/customer', $token . '&tab=all')
			],
			[
				'key'         => 'leads',
				'icon'        => 'fa-user-plus',
				'title'       => 'Direct leads',
				'desc'        => 'Accounts that have not ordered yet.',
				'count_label' => 'Total leads',
				'count'       => count($no_orders),
				'value_label' => 'Leads',
				'value'       => (string)count($no_orders),
				'href'        => $this->url->link('customer/customer', $token . '&tab=all')
			],
			[
				'key'         => 'engaged',
				'icon'        => 'fa-bolt',
				'title'       => 'Engaged leads',
				'desc'        => 'New accounts from the last 14 days still waiting to order.',
				'count_label' => 'Total leads',
				'count'       => count($engaged),
				'value_label' => 'Leads',
				'value'       => (string)count($engaged),
				'href'        => $this->url->link('customer/customer', $token . '&tab=all')
			]
		];

		return [
			'recommendations'      => array_slice($recommendations, 0, 6),
			'recommendation_total' => count($recommendations),
			'segments'             => $segments
		];
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = $this->request->get['filter_email'];
		} else {
			$filter_email = '';
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$filter_customer_group_id = (int)$this->request->get['filter_customer_group_id'];
		} else {
			$filter_customer_group_id = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = (bool)$this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_ip'])) {
			$filter_ip = (string)$this->request->get['filter_ip'];
		} else {
			$filter_ip = '';
		}

		if (isset($this->request->get['filter_date_from'])) {
			$filter_date_from = (string)$this->request->get['filter_date_from'];
		} else {
			$filter_date_from = '';
		}

		if (isset($this->request->get['filter_date_to'])) {
			$filter_date_to = (string)$this->request->get['filter_date_to'];
		} else {
			$filter_date_to = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = (string)$this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = (string)$this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['action'] = $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . $url);

		// Stores
		$this->load->model('setting/store');

		$stores = $this->model_setting_store->getStores();

		// Customers
		$data['customers'] = [];

		$filter_data = [
			'filter_name'              => $filter_name,
			'filter_email'             => $filter_email,
			'filter_customer_group_id' => $filter_customer_group_id,
			'filter_status'            => $filter_status,
			'filter_ip'                => $filter_ip,
			'filter_date_from'         => $filter_date_from,
			'filter_date_to'           => $filter_date_to,
			'sort'                     => $sort,
			'order'                    => $order,
			'start'                    => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit'                    => $this->config->get('config_pagination_admin')
		];

		$this->load->model('customer/customer');

		$results = $this->model_customer_customer->getCustomers($filter_data);

		foreach ($results as $result) {
			$login_info = $this->model_customer_customer->getTotalLoginAttempts($result['email']);

			if ($login_info && $login_info['total'] >= $this->config->get('config_login_attempts')) {
				$unlock = $this->url->link('customer/customer.unlock', 'user_token=' . $this->session->data['user_token'] . '&email=' . $result['email'] . $url);
			} else {
				$unlock = '';
			}

			$store_data = [];

			$store_data[] = [
				'store_id' => 0,
				'name'     => $this->config->get('config_name'),
				'href'     => $this->url->link('customer/customer.login', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $result['customer_id'] . '&store_id=0')
			];

			foreach ($stores as $store) {
				$store_data[] = [
					'store_id' => $store['store_id'],
					'name'     => $store['name'],
					'href'     => $this->url->link('customer/customer.login', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $result['customer_id'] . '&store_id=' . $store['store_id'])
				];
			}

			$language_id = (int)$this->config->get('config_language_id');
			$address = $this->db->query("SELECT `a`.`company`, `a`.`city`, `zd`.`name` AS `zone`, `cd`.`name` AS `country` FROM `" . DB_PREFIX . "address` `a` LEFT JOIN `" . DB_PREFIX . "zone_description` `zd` ON (`a`.`zone_id` = `zd`.`zone_id` AND `zd`.`language_id` = '" . $language_id . "') LEFT JOIN `" . DB_PREFIX . "country_description` `cd` ON (`a`.`country_id` = `cd`.`country_id` AND `cd`.`language_id` = '" . $language_id . "') WHERE `a`.`customer_id` = '" . (int)$result['customer_id'] . "' ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1")->row;

			$company = trim((string)($address['company'] ?? ''));
			$location_parts = array_filter([
				trim((string)($address['city'] ?? '')),
				trim((string)($address['zone'] ?? '')),
				trim((string)($address['country'] ?? ''))
			]);
			$location = $location_parts ? implode(', ', $location_parts) : '—';

			$order_stats = $this->db->query("SELECT COUNT(*) AS `total_orders`, COALESCE(SUM(`total`), 0) AS `order_volume` FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . (int)$result['customer_id'] . "' AND `order_status_id` > '0'")->row;

			$data['customers'][] = [
				'customer_id'    => $result['customer_id'],
				'name'           => $result['name'],
				'store_name'     => $company !== '' ? $company : $result['name'],
				'email'          => $result['email'],
				'store_id'       => $result['store_id'],
				'customer_group' => $result['customer_group'],
				'location'       => $location,
				'total_orders'   => (int)($order_stats['total_orders'] ?? 0),
				'order_volume'   => $this->currency->format((float)($order_stats['order_volume'] ?? 0), $this->config->get('config_currency')),
				'status'         => $result['status'],
				'date_added'     => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'unlock'         => $unlock,
				'store'          => $store_data,
				'edit'           => $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $result['customer_id'] . $url)
			];
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		// Sorts
		$data['sort_name'] = $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url);
		$data['sort_email'] = $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . '&sort=c.email' . $url);
		$data['sort_customer_group'] = $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . '&sort=customer_group' . $url);
		$data['sort_status'] = $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . '&sort=c.status' . $url);
		$data['sort_date_added'] = $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . '&sort=c.date_added' . $url);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		// Total Customers
		$customer_total = $this->model_customer_customer->getTotalCustomers($filter_data);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $customer_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('customer/customer.list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($customer_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($customer_total - $this->config->get('config_pagination_admin'))) ? $customer_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $customer_total, ceil($customer_total / $this->config->get('config_pagination_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['customer_total'] = $customer_total;
		$data['delete'] = $this->url->link('customer/customer.delete', 'user_token=' . $this->session->data['user_token']);

		return $this->load->view('customer/customer_list', $data);
	}

	/**
	 * Form
	 *
	 * @return void
	 */
	public function form(): void {
		$this->load->language('customer/customer');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['text_form'] = !isset($this->request->get['customer_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['error_upload_size'] = sprintf($this->language->get('error_upload_size'), $this->config->get('config_file_max_size'));

		$data['config_file_max_size'] = ((int)$this->config->get('config_file_max_size') * 1024 * 1024);
		$data['config_telephone_required'] = $this->config->get('config_telephone_required');

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['save'] = $this->url->link('customer/customer.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['upload'] = $this->url->link('tool/upload.upload', 'user_token=' . $this->session->data['user_token']);

		if (isset($this->request->get['customer_id'])) {
			$data['orders'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&filter_customer_id=' . $this->request->get['customer_id']);
		} else {
			$data['orders'] = '';
		}

		// Customer
		if (isset($this->request->get['customer_id'])) {
			$this->load->model('customer/customer');

			$customer_info = $this->model_customer_customer->getCustomer((int)$this->request->get['customer_id']);
		}

		if (!empty($customer_info)) {
			$data['customer_id'] = $customer_info['customer_id'];
		} else {
			$data['customer_id'] = 0;
		}

		// Stores
		$stores = [];

		$stores[] = [
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		];

		$this->load->model('setting/store');

		$data['stores'] = array_merge($stores, $this->model_setting_store->getStores());

		if (!empty($customer_info)) {
			$data['store_id'] = $customer_info['store_id'];
		} else {
			$data['store_id'] = 0;
		}

		// Languages
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (!empty($customer_info)) {
			$data['language_id'] = $customer_info['language_id'];
		} else {
			$data['language_id'] = 0;
		}

		// Customer Groups
		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		if (!empty($customer_info)) {
			$data['customer_group_id'] = $customer_info['customer_group_id'];
		} else {
			$data['customer_group_id'] = (int)$this->config->get('config_customer_group_id');
		}

		if (!empty($customer_info)) {
			$data['firstname'] = $customer_info['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (!empty($customer_info)) {
			$data['lastname'] = $customer_info['lastname'];
		} else {
			$data['lastname'] = '';
		}

		if (!empty($customer_info)) {
			$data['email'] = $customer_info['email'];
		} else {
			$data['email'] = '';
		}

		if (!empty($customer_info)) {
			$data['telephone'] = $customer_info['telephone'];
		} else {
			$data['telephone'] = '';
		}

		// Custom Fields
		$data['custom_fields'] = [];

		$filter_data = [
			'filter_location' => 'account',
			'sort'            => 'cf.sort_order',
			'order'           => 'ASC'
		];

		$this->load->model('customer/custom_field');

		$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['status']) {
				$data['custom_fields'][] = [
					'custom_field_value' => $this->model_customer_custom_field->getValues($custom_field['custom_field_id']),
					'value'              => $custom_field['value'],
				] + $custom_field;
			}
		}

		if (!empty($customer_info)) {
			$data['account_custom_field'] = $customer_info['custom_field'];
		} else {
			$data['account_custom_field'] = [];
		}

		$data['password'] = '';
		$data['confirm'] = '';

		if (!empty($customer_info)) {
			$data['newsletter'] = $customer_info['newsletter'];
		} else {
			$data['newsletter'] = 0;
		}

		if (!empty($customer_info)) {
			$data['status'] = $customer_info['status'];
		} else {
			$data['status'] = 1;
		}

		if (!empty($customer_info)) {
			$data['safe'] = $customer_info['safe'];
		} else {
			$data['safe'] = 0;
		}

		if (!empty($customer_info)) {
			$data['commenter'] = $customer_info['commenter'];
		} else {
			$data['commenter'] = 0;
		}

		$data['address'] = $this->load->controller('customer/address.getAddress');
		$data['history'] = $this->getHistory();
		$data['transaction'] = $this->getTransaction();
		$data['reward'] = $this->getReward();
		$data['ip'] = $this->getIp();
		$data['authorize'] = $this->getAuthorize();

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('customer/trade');
		$this->load->model('tool/upload');

		$trade = $data['customer_id'] ? $this->model_customer_trade->getProfile((int)$data['customer_id']) : [];
		$trade_fields = ['company', 'contact', 'gstin', 'pan', 'business_type', 'monthly_purchase', 'stores', 'website', 'billing_address', 'billing_city', 'billing_postcode', 'billing_country', 'billing_zone', 'shipping_same', 'shipping_address', 'shipping_city', 'shipping_postcode', 'shipping_country', 'shipping_zone', 'trade_license', 'pan_document', 'cheque', 'reference'];

		foreach ($trade_fields as $field) {
			$data[$field] = (string)($trade[$field] ?? '');
		}

		$data['business_types'] = ['Retailer', 'Wholesaler', 'Distributor', 'Reseller', 'Other'];
		$data['upload_download'] = $this->url->link('tool/upload.download', 'user_token=' . $this->session->data['user_token']);

		foreach (['trade_license', 'pan_document', 'cheque'] as $file_field) {
			$upload = $data[$file_field] !== '' ? $this->model_tool_upload->getUploadByCode($data[$file_field]) : [];
			$data[$file_field . '_name'] = (string)($upload['name'] ?? '');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/customer_form', $data));
	}

	/**
	 * Save
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		$required = [
			'customer_id'       => 0,
			'store_id'          => 0,
			'language_id'       => 0,
			'customer_group_id' => 0,
			'firstname'         => '',
			'lastname'          => '',
			'email'             => '',
			'telephone'         => '',
			'custom_field'      => [],
			'newsletter'        => 0,
			'password'          => '',
			'confirm'           => '',
			'status'            => 0,
			'safe'              => 0,
			'commenter'         => 0
		];

		$post_info = $this->request->post + $required;

		if (!oc_validate_length($post_info['firstname'], 1, 32)) {
			$json['error']['firstname'] = $this->language->get('error_firstname');
		}

		if (!oc_validate_length($post_info['lastname'], 1, 32)) {
			$json['error']['lastname'] = $this->language->get('error_lastname');
		}

		if (!oc_validate_email($post_info['email'])) {
			$json['error']['email'] = $this->language->get('error_email');
		}

		// Customer
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomerByEmail($post_info['email']);

		if ($customer_info && (!$post_info['customer_id'] || ($post_info['customer_id'] != $customer_info['customer_id']))) {
			$json['error']['warning'] = $this->language->get('error_exists');
		}

		if ($this->config->get('config_telephone_required') && !oc_validate_length($post_info['telephone'], 3, 32)) {
			$json['error']['telephone'] = $this->language->get('error_telephone');
		}

		// Custom fields validation
		$filter_data = [
			'filter_location'          => 'account',
			'filter_customer_group_id' => $post_info['customer_group_id'],
			'filter_status'            => 1
		];

		$this->load->model('customer/custom_field');

		$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['required'] && empty($post_info['custom_field'][$custom_field['custom_field_id']])) {
				$json['error']['custom_field_' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
			} elseif ($custom_field['type'] == 'text' && !empty($custom_field['validation']) && !oc_validate_regex($post_info['custom_field'][$custom_field['custom_field_id']], $custom_field['validation'])) {
				$json['error']['custom_field_' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_regex'), $custom_field['name']);
			}
		}

		if ($post_info['password'] || !$post_info['customer_id']) {
			$password = html_entity_decode($post_info['password'], ENT_QUOTES, 'UTF-8');

			if (!oc_validate_length($password, $this->config->get('config_password_length'), 40)) {
				$json['error']['password'] = sprintf($this->language->get('error_password_length'), $this->config->get('config_password_length'));
			}

			$required = [];

			if ($this->config->get('config_password_uppercase') && !preg_match('/[A-Z]/', $password)) {
				$required[] = $this->language->get('error_password_uppercase');
			}

			if ($this->config->get('config_password_lowercase') && !preg_match('/[a-z]/', $password)) {
				$required[] = $this->language->get('error_password_lowercase');
			}

			if ($this->config->get('config_password_number') && !preg_match('/[0-9]/', $password)) {
				$required[] = $this->language->get('error_password_number');
			}

			if ($this->config->get('config_password_symbol') && !preg_match('/[^a-zA-Z0-9]/', $password)) {
				$required[] = $this->language->get('error_password_symbol');
			}

			if ($required) {
				$json['error']['password'] = sprintf($this->language->get('error_password'), implode(', ', $required), $this->config->get('config_password_length'));
			}

			if ($post_info['password'] != $post_info['confirm']) {
				$json['error']['confirm'] = $this->language->get('error_confirm');
			}
		}

		if (isset($json['error']) && !isset($json['error']['warning'])) {
			$json['error']['warning'] = $this->language->get('error_warning');
		}

		if (!$json) {
			if (!$post_info['customer_id']) {
				$json['customer_id'] = $this->model_customer_customer->addCustomer($post_info);
			} else {
				$this->model_customer_customer->editCustomer($post_info['customer_id'], $post_info);
			}

			$saved_id = (int)($json['customer_id'] ?? $post_info['customer_id']);

			if ($saved_id && isset($this->request->post['company'])) {
				$this->load->model('customer/trade');
				$this->model_customer_trade->saveProfile($saved_id, $post_info);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Unlock
	 *
	 * @return void
	 */
	public function unlock(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (empty($this->request->get['email'])) {
			$json['error'] = $this->language->get('error_email');
		}

		if (!$json) {
			// Customer
			$this->load->model('customer/customer');

			$this->model_customer_customer->deleteLoginAttempts($this->request->get['email']);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Delete
	 *
	 * @return void
	 */
	public function delete(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			// Customer
			$this->load->model('customer/customer');

			foreach ($selected as $customer_id) {
				$this->model_customer_customer->deleteCustomer($customer_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Login
	 *
	 * @return \Opencart\System\Engine\Action|null
	 */
	public function login(): ?\Opencart\System\Engine\Action {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			return new \Opencart\System\Engine\Action('error/permission');
		}

		// Store
		if ($store_id) {
			$this->load->model('setting/store');

			$store_info = $this->model_setting_store->getStore($store_id);

			if (!$store_info) {
				return new \Opencart\System\Engine\Action('error/not_found');
			}
		}

		// Customer
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomer($customer_id);

		if (!$customer_info) {
			return new \Opencart\System\Engine\Action('error/not_found');
		}

		// Create login token
		$token = oc_token(32);

		$this->model_customer_customer->addToken($customer_id, 'login', $token);

		if ($store_id) {
			$this->response->redirect($store_info['url'] . 'index.php?route=account/login.token&email=' . urlencode($customer_info['email']) . '&code=' . $token);
		} else {
			$this->response->redirect(HTTP_CATALOG . 'index.php?route=account/login.token&email=' . urlencode($customer_info['email']) . '&code=' . $token);
		}

		return null;
	}

	/**
	 * Payment
	 *
	 * @return void
	 */
	public function payment(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getPayment());
	}

	/**
	 * Get Payment
	 *
	 * @return string
	 */
	private function getPayment(): string {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'customer/customer.payment') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		// Payment Methods
		$data['payment_methods'] = [];

		// Subscriptions
		$this->load->model('sale/subscription');

		$results = $this->model_sale_subscription->getSubscriptions(['filter_customer_id' => $customer_id]);

		foreach ($results as $result) {
			if (isset($result['image'])) {
				$image = DIR_IMAGE . 'payment/' . $result['image'];
			} else {
				$image = '';
			}

			$data['payment_methods'][] = [
				'image'       => $image,
				'date_expire' => date($this->language->get('date_format_short'), strtotime($result['date_expire'])),
				'delete'      => $this->url->link('customer/customer.deletePayment', 'user_token=' . $this->session->data['user_token'] . '&customer_payment_id=' . $result['customer_payment_id'])
			] + $result;
		}

		// Total Subscriptions
		$payment_total = $this->model_sale_subscription->getTotalSubscriptions(['filter_customer_id' => $customer_id]);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $payment_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('customer/customer.payment', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $customer_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($payment_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($payment_total - $limit)) ? $payment_total : ((($page - 1) * $limit) + $limit), $payment_total, ceil($payment_total / $limit));

		return $this->load->view('customer/customer_payment', $data);
	}

	/**
	 * Delete Payment
	 *
	 * @return void
	 */
	public function deletePayment(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (isset($this->request->get['customer_payment_id'])) {
			$customer_payment_id = (int)$this->request->get['customer_payment_id'];
		} else {
			$customer_payment_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			// Subscription
			$this->load->model('sale/subscription');

			$this->model_sale_subscription->deleteSubscriptionByCustomerPaymentId($customer_payment_id);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * History
	 *
	 * @return void
	 */
	public function history(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getHistory());
	}

	/**
	 * Get History
	 *
	 * @return string
	 */
	public function getHistory(): string {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'customer/customer.history') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		// Histories
		$data['histories'] = [];

		$this->load->model('customer/customer');

		$results = $this->model_customer_customer->getHistories($customer_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$data['histories'][] = [
				'comment'    => nl2br($result['comment']),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			] + $result;
		}

		// Total Histories
		$history_total = $this->model_customer_customer->getTotalHistories($customer_id);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $history_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('customer/customer.history', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $customer_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($history_total - $limit)) ? $history_total : ((($page - 1) * $limit) + $limit), $history_total, ceil($history_total / $limit));

		return $this->load->view('customer/customer_history', $data);
	}

	/**
	 * Add History
	 *
	 * @return void
	 */
	public function addHistory(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Customer
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomer($customer_id);

		if (!$customer_info) {
			$json['error'] = $this->language->get('error_customer');
		}

		if (!$json) {
			$this->model_customer_customer->addHistory($customer_id, isset($this->request->post['comment']) ? (string)$this->request->post['comment'] : '');

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Transaction
	 *
	 * @return void
	 */
	public function transaction(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getTransaction());
	}

	/**
	 * Get Transaction
	 *
	 * @return string
	 */
	public function getTransaction(): string {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'customer/customer.transaction') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		// Transactions
		$data['transactions'] = [];

		$this->load->model('customer/customer');

		$results = $this->model_customer_customer->getTransactions($customer_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$data['transactions'][] = [
				'amount'     => $this->currency->format($result['amount'], $this->config->get('config_currency')),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			] + $result;
		}

		$data['balance'] = $this->currency->format($this->model_customer_customer->getTransactionTotal($customer_id), $this->config->get('config_currency'));

		// Total Transactions
		$transaction_total = $this->model_customer_customer->getTotalTransactions($customer_id);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $transaction_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('customer/customer.transaction', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $customer_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($transaction_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($transaction_total - $limit)) ? $transaction_total : ((($page - 1) * $limit) + $limit), $transaction_total, ceil($transaction_total / $limit));

		return $this->load->view('customer/customer_transaction', $data);
	}

	/**
	 * Add Transaction
	 *
	 * @return void
	 */
	public function addTransaction(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$required = [
			'description' => '',
			'amount'      => 0.0
		];

		$post_info = $this->request->post + $required;

		// Customer
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomer($customer_id);

		if (!$customer_info) {
			$json['error'] = $this->language->get('error_customer');
		}

		if (!$json) {
			// Customer
			$this->model_customer_customer->addTransaction($customer_id, (string)$post_info['description'], (float)$post_info['amount']);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Reward
	 *
	 * @return void
	 */
	public function reward(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getReward());
	}

	/**
	 * Get Reward
	 *
	 * @return string
	 */
	public function getReward(): string {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'customer/customer.reward') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		// Rewards
		$data['rewards'] = [];

		$this->load->model('customer/customer');

		$results = $this->model_customer_customer->getRewards($customer_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$data['rewards'][] = ['date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))] + $result;
		}

		$data['balance'] = $this->model_customer_customer->getRewardTotal($customer_id);

		// Total Rewards
		$reward_total = $this->model_customer_customer->getTotalRewards($customer_id);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $reward_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('customer/customer.reward', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $customer_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($reward_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($reward_total - $limit)) ? $reward_total : ((($page - 1) * $limit) + $limit), $reward_total, ceil($reward_total / $limit));

		return $this->load->view('customer/customer_reward', $data);
	}

	/**
	 * Add Reward
	 *
	 * @return void
	 */
	public function addReward(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$required = [
			'description' => '',
			'points'      => 0,
		];

		$post_info = $this->request->post + $required;

		// Customer
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomer($customer_id);

		if (!$customer_info) {
			$json['error'] = $this->language->get('error_customer');
		}

		if (!$json) {
			// Customer
			$this->load->model('customer/customer');

			$this->model_customer_customer->addReward($customer_id, (string)$post_info['description'], (int)$post_info['points']);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Ip
	 *
	 * @return void
	 */
	public function ip(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getIp());
	}

	/**
	 * Get Ip
	 *
	 * @return string
	 */
	public function getIp(): string {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'customer/customer.ip') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		$data['ips'] = [];

		// Customers
		$this->load->model('customer/customer');

		// Setting
		$this->load->model('setting/store');

		$results = $this->model_customer_customer->getIps($customer_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$store_info = $this->model_setting_store->getStore($result['store_id']);

			if ($store_info) {
				$store = $store_info['name'];
			} elseif (!$result['store_id']) {
				$store = $this->config->get('config_name');
			} else {
				$store = '';
			}

			$data['ips'][] = [
				'account'    => $this->model_customer_customer->getTotalCustomersByIp($result['ip']),
				'store'      => $store,
				'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
				'filter_ip'  => $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'] . '&filter_ip=' . $result['ip'])
			] + $result;
		}

		// Total Customers
		$ip_total = $this->model_customer_customer->getTotalIps($customer_id);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $ip_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('customer/customer.ip', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $customer_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($ip_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($ip_total - $limit)) ? $ip_total : ((($page - 1) * $limit) + $limit), $ip_total, ceil($ip_total / $limit));

		return $this->load->view('customer/customer_ip', $data);
	}

	/**
	 * Authorize
	 *
	 * @return void
	 */
	public function authorize(): void {
		$this->load->language('customer/customer');

		$this->response->setOutput($this->getAuthorize());
	}

	/**
	 * Get Authorize
	 *
	 * @return string
	 */
	public function getAuthorize(): string {
		if (isset($this->request->get['customer_id'])) {
			$customer_id = (int)$this->request->get['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'customer/customer.login') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		// Authorizes
		$data['authorizes'] = [];

		$this->load->model('customer/customer');

		$results = $this->model_customer_customer->getAuthorizes($customer_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$data['authorizes'][] = [
				'date_added'  => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
				'date_expire' => $result['date_expire'] ? date($this->language->get('date_format_short'), strtotime($result['date_expire'])) : '',
				'delete'      => $this->url->link('customer/customer.deleteAuthorize', 'user_token=' . $this->session->data['user_token'] . '&customer_authorize_id=' . $result['customer_authorize_id'])
			] + $result;
		}

		// Total Authorizes
		$authorize_total = $this->model_customer_customer->getTotalAuthorizes($customer_id);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $authorize_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('customer/customer.authorize', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $customer_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($authorize_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($authorize_total - $limit)) ? $authorize_total : ((($page - 1) * $limit) + $limit), $authorize_total, ceil($authorize_total / $limit));

		return $this->load->view('customer/customer_authorize', $data);
	}

	/**
	 * Delete Authorize
	 *
	 * @return void
	 */
	public function deleteAuthorize(): void {
		$this->load->language('customer/customer');

		$json = [];

		if (isset($this->request->get['customer_authorize_id'])) {
			$customer_authorize_id = (int)$this->request->get['customer_authorize_id'];
		} else {
			$customer_authorize_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Authorize
		$this->load->model('customer/customer');

		$authorize_info = $this->model_customer_customer->getAuthorize($customer_authorize_id);

		if (!$authorize_info) {
			$json['error'] = $this->language->get('error_authorize');
		}

		if (!$json) {
			$this->model_customer_customer->deleteAuthorizes($authorize_info['customer_id'], $customer_authorize_id);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Autocomplete
	 *
	 * @return void
	 */
	public function autocomplete(): void {
		$json = [];

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_email'])) {
			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['filter_email'])) {
				$filter_email = $this->request->get['filter_email'];
			} else {
				$filter_email = '';
			}

			// Customers
			$filter_data = [
				'filter_name'  => $filter_name,
				'filter_email' => $filter_email,
				'start'        => 0,
				'limit'        => $this->config->get('config_autocomplete_limit')
			];

			$this->load->model('customer/customer');

			$results = $this->model_customer_customer->getCustomers($filter_data);

			foreach ($results as $result) {
				$json[] = [
					'name'    => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'address' => $this->model_customer_customer->getAddresses($result['customer_id'])
				] + $result;
			}
		}

		$sort_order = [];

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Customfield
	 *
	 * @return void
	 */
	public function customfield(): void {
		$json = [];

		// Customer Group
		if (isset($this->request->get['customer_group_id'])) {
			$customer_group_id = (int)$this->request->get['customer_group_id'];
		} else {
			$customer_group_id = (int)$this->config->get('config_customer_group_id');
		}

		// Custom Fields
		$this->load->model('customer/custom_field');

		$custom_fields = $this->model_customer_custom_field->getCustomFields(['filter_customer_group_id' => $customer_group_id]);

		foreach ($custom_fields as $custom_field) {
			$json[] = ['required' => empty($custom_field['required']) || $custom_field['required'] == 0 ? false : true] + $custom_field;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

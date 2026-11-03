<?php
namespace Opencart\Admin\Controller\Sale;
/**
 * Class Order
 *
 * @package Opencart\Admin\Controller\Sale
 */
class Order extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('sale/order');

		if (isset($this->request->get['filter_order_id'])) {
			$filter_order_id = (int)$this->request->get['filter_order_id'];
		} else {
			$filter_order_id = '';
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$filter_customer_id = $this->request->get['filter_customer_id'];
		} else {
			$filter_customer_id = '';
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
		}

		if (isset($this->request->get['filter_store_id'])) {
			$filter_store_id = (int)$this->request->get['filter_store_id'];
		} else {
			$filter_store_id = '';
		}

		if (isset($this->request->get['filter_order_status'])) {
			$filter_order_status = $this->request->get['filter_order_status'];
		} else {
			$filter_order_status = '';
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$filter_order_status_id = (int)$this->request->get['filter_order_status_id'];
		} else {
			$filter_order_status_id = '';
		}

		if (isset($this->request->get['filter_total'])) {
			$filter_total = $this->request->get['filter_total'];
		} else {
			$filter_total = '';
		}

		if (isset($this->request->get['filter_date_from'])) {
			$filter_date_from = $this->request->get['filter_date_from'];
		} else {
			$filter_date_from = '';
		}

		if (isset($this->request->get['filter_date_to'])) {
			$filter_date_to = $this->request->get['filter_date_to'];
		} else {
			$filter_date_to = '';
		}

		if (isset($this->request->get['filter_date_modified_from'])) {
			$filter_date_modified_from = $this->request->get['filter_date_modified_from'];
		} else {
			$filter_date_modified_from = '';
		}

		if (isset($this->request->get['filter_date_modified_to'])) {
			$filter_date_modified_to = $this->request->get['filter_date_modified_to'];
		} else {
			$filter_date_modified_to = '';
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store_id'])) {
			$url .= '&filter_store_id=' . (int)$this->request->get['filter_store_id'];
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . (int)$this->request->get['filter_order_status_id'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['filter_date_modified_from'])) {
			$url .= '&filter_date_modified_from=' . $this->request->get['filter_date_modified_from'];
		}

		if (isset($this->request->get['filter_date_modified_to'])) {
			$url .= '&filter_date_modified_to=' . $this->request->get['filter_date_modified_to'];
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
			'href' => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['add'] = $this->url->link('sale/order.info', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['create'] = $this->url->link('sale/order.create', 'user_token=' . $this->session->data['user_token']);
		$data['delete'] = $this->url->link('sale/order.delete', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['invoice'] = $this->url->link('sale/order.invoice', 'user_token=' . $this->session->data['user_token']);
		$data['shipping'] = $this->url->link('sale/order.shipping', 'user_token=' . $this->session->data['user_token']);
		$data['ship_date'] = html_entity_decode($this->url->link('sale/order.shipDate', 'user_token=' . $this->session->data['user_token']), ENT_QUOTES, 'UTF-8');
		$data['ship_orders'] = html_entity_decode($this->url->link('sale/order.shipOrders', 'user_token=' . $this->session->data['user_token']), ENT_QUOTES, 'UTF-8');
		$data['pick_list'] = html_entity_decode($this->url->link('sale/order.pickList', 'user_token=' . $this->session->data['user_token']), ENT_QUOTES, 'UTF-8');
		$data['pick_list_csv'] = html_entity_decode($this->url->link('sale/order.pickListCsv', 'user_token=' . $this->session->data['user_token']), ENT_QUOTES, 'UTF-8');
		$data['issues'] = $this->url->link('sale/issue', 'user_token=' . $this->session->data['user_token']);

		$filter_tab = (string)($this->request->get['filter_tab'] ?? 'all');
		$filter_search = '';

		if ($filter_order_id !== '') {
			$filter_search = (string)$filter_order_id;
		} elseif ($filter_customer !== '') {
			$filter_search = (string)$filter_customer;
		}

		$token = 'user_token=' . $this->session->data['user_token'];
		$tab_keys = ['all', 'new', 'unfulfilled', 'fulfilled', 'canceled'];
		$data['tabs'] = [];

		foreach ($tab_keys as $tab_key) {
			$data['tabs'][] = [
				'label'  => $this->language->get('tab_' . $tab_key),
				'href'   => $this->url->link('sale/order', $token . '&filter_tab=' . $tab_key),
				'active' => ($filter_tab === $tab_key)
			];
		}

		$data['text_export'] = $this->language->get('text_export');
		$data['text_create_order'] = $this->language->get('text_create_order');
		$data['text_upload_order'] = $this->language->get('text_upload_order');
		$data['text_forward_email'] = $this->language->get('text_forward_email');
		$data['text_new'] = $this->language->get('text_new');
		$data['text_search_orders'] = $this->language->get('text_search_orders');
		$data['text_order_date'] = $this->language->get('text_order_date');
		$data['text_order_type'] = $this->language->get('text_order_type');
		$data['text_pending_shipment'] = $this->language->get('text_pending_shipment');
		$data['text_print_slips'] = $this->language->get('text_print_slips');
		$data['text_edit_ship_date'] = $this->language->get('text_edit_ship_date');
		$data['text_ship_orders'] = $this->language->get('text_ship_orders');
		$data['text_pick_list'] = $this->language->get('text_pick_list');
		$data['text_print_pick_list'] = $this->language->get('text_print_pick_list');
		$data['text_download_csv'] = $this->language->get('text_download_csv');

		$data['list'] = $this->getList();

		// Stores
		$data['stores'] = [];

		$data['stores'][] = [
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		];

		$this->load->model('setting/store');

		$results = $this->model_setting_store->getStores();

		foreach ($results as $result) {
			$data['stores'][] = $result;
		}

		// Order Statuses
		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$data['filter_order_id'] = $filter_order_id;
		$data['filter_customer_id'] = $filter_customer_id;
		$data['filter_customer'] = $filter_customer;
		$data['filter_store_id'] = $filter_store_id;
		$data['filter_order_status'] = $filter_order_status;
		$data['filter_order_status_id'] = $filter_order_status_id;
		$data['filter_total'] = $filter_total;
		$data['filter_date_from'] = $filter_date_from;
		$data['filter_date_to'] = $filter_date_to;
		$data['filter_date_modified_from'] = $filter_date_modified_from;
		$data['filter_date_modified_to'] = $filter_date_modified_to;
		$data['filter_tab'] = $filter_tab;
		$data['filter_search'] = $filter_search;
		$data['filter_pending_ship'] = !empty($this->request->get['filter_pending_ship']);

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/order', $data));
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('sale/order');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		if (isset($this->request->get['filter_order_id'])) {
			$filter_order_id = (int)$this->request->get['filter_order_id'];
		} else {
			$filter_order_id = '';
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$filter_customer_id = $this->request->get['filter_customer_id'];
		} else {
			$filter_customer_id = '';
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
		}

		if (isset($this->request->get['filter_store_id'])) {
			$filter_store_id = (int)$this->request->get['filter_store_id'];
		} else {
			$filter_store_id = '';
		}

		if (isset($this->request->get['filter_order_status'])) {
			$filter_order_status = $this->request->get['filter_order_status'];
		} else {
			$filter_order_status = '';
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$filter_order_status_id = (int)$this->request->get['filter_order_status_id'];
		} else {
			$filter_order_status_id = '';
		}

		if (isset($this->request->get['filter_total'])) {
			$filter_total = $this->request->get['filter_total'];
		} else {
			$filter_total = '';
		}

		if (isset($this->request->get['filter_date_from'])) {
			$filter_date_from = $this->request->get['filter_date_from'];
		} else {
			$filter_date_from = '';
		}

		if (isset($this->request->get['filter_date_to'])) {
			$filter_date_to = $this->request->get['filter_date_to'];
		} else {
			$filter_date_to = '';
		}

		if (isset($this->request->get['filter_date_modified_from'])) {
			$filter_date_modified_from = $this->request->get['filter_date_modified_from'];
		} else {
			$filter_date_modified_from = '';
		}

		if (isset($this->request->get['filter_date_modified_to'])) {
			$filter_date_modified_to = $this->request->get['filter_date_modified_to'];
		} else {
			$filter_date_modified_to = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = (string)$this->request->get['sort'];
		} else {
			$sort = 'o.order_id';
		}

		if (isset($this->request->get['order'])) {
			$order = (string)$this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store_id'])) {
			$url .= '&filter_store_id=' . (int)$this->request->get['filter_store_id'];
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . (int)$this->request->get['filter_order_status_id'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['filter_date_modified_from'])) {
			$url .= '&filter_date_modified_from=' . $this->request->get['filter_date_modified_from'];
		}

		if (isset($this->request->get['filter_date_modified_to'])) {
			$url .= '&filter_date_modified_to=' . $this->request->get['filter_date_modified_to'];
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

		if (isset($this->request->get['filter_tab'])) {
			$url .= '&filter_tab=' . urlencode((string)$this->request->get['filter_tab']);
		}

		if (!empty($this->request->get['filter_pending_ship'])) {
			$url .= '&filter_pending_ship=1';
		}

		$data['action'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . $url);

		// Orders
		$data['orders'] = [];

		$complete = array_map('intval', (array)$this->config->get('config_complete_status'));
		$processing = array_map('intval', (array)$this->config->get('config_processing_status'));
		$canceled = $this->getCanceledStatusIds();
		$filter_tab = (string)($this->request->get['filter_tab'] ?? 'all');

		if ($filter_tab === 'new' && $processing) {
			$filter_order_status = implode(',', $processing);
			$filter_order_status_id = '';
		} elseif ($filter_tab === 'fulfilled' && $complete) {
			$filter_order_status = implode(',', $complete);
			$filter_order_status_id = '';
		} elseif ($filter_tab === 'canceled' && $canceled) {
			$filter_order_status = implode(',', $canceled);
			$filter_order_status_id = '';
		} elseif ($filter_tab === 'unfulfilled') {
			$open = [];

			$this->load->model('localisation/order_status');

			foreach ($this->model_localisation_order_status->getOrderStatuses() as $status) {
				$id = (int)$status['order_status_id'];

				if ($id && !in_array($id, $complete, true) && !in_array($id, $canceled, true)) {
					$open[] = $id;
				}
			}

			$filter_order_status = $open ? implode(',', $open) : '-1';
			$filter_order_status_id = '';
		}

		$filter_data = [
			'filter_order_id'           => $filter_order_id,
			'filter_customer_id'        => $filter_customer_id,
			'filter_customer'           => $filter_customer,
			'filter_store_id'           => $filter_store_id,
			'filter_order_status'       => $filter_order_status,
			'filter_order_status_id'    => $filter_order_status_id,
			'filter_total'              => $filter_total,
			'filter_date_from'          => $filter_date_from,
			'filter_date_to'            => $filter_date_to,
			'filter_date_modified_from' => $filter_date_modified_from,
			'filter_date_modified_to'   => $filter_date_modified_to,
			'sort'                      => $sort,
			'order'                     => $order,
			'start'                     => ($page - 1) * (int)$this->config->get('config_pagination_admin'),
			'limit'                     => (int)$this->config->get('config_pagination_admin')
		];

		$this->load->model('sale/order');

		$results = $this->model_sale_order->getOrders($filter_data);
		$pending_only = !empty($this->request->get['filter_pending_ship']);

		foreach ($results as $result) {
			if (isset($result['shipping_method']['name'])) {
				$shipping_method = $result['shipping_method']['name'];
			} else {
				$shipping_method = '';
			}

			$status_id = (int)($result['order_status_id'] ?? 0);
			$is_complete = in_array($status_id, $complete, true);
			$is_processing = in_array($status_id, $processing, true);
			$is_canceled = in_array($status_id, $canceled, true);

			if ($pending_only && $is_complete) {
				continue;
			}

			if ($is_complete) {
				$status_class = 'fulfilled';
			} elseif ($is_canceled) {
				$status_class = 'canceled';
			} elseif ($is_processing) {
				$status_class = 'new';
			} else {
				$status_class = 'unfulfilled';
			}

			$expected_raw = !empty($result['expected_ship_date']) && $result['expected_ship_date'] !== '0000-00-00'
				? substr((string)$result['expected_ship_date'], 0, 10)
				: '';
			$shipped_raw = !empty($result['shipped_date']) && $result['shipped_date'] !== '0000-00-00'
				? substr((string)$result['shipped_date'], 0, 10)
				: '';

			if ($is_complete && !$shipped_raw) {
				$shipped_raw = date('Y-m-d', strtotime($result['date_modified']));
			}

			$ship_date = '—';
			$ship_track = '';
			$ship_track_class = '';

			if ($expected_raw) {
				$ship_date = date('M j, Y', strtotime($expected_raw));

				if ($shipped_raw) {
					if ($shipped_raw <= $expected_raw) {
						$ship_track = 'On time';
						$ship_track_class = 'on-time';
					} else {
						$ship_track = 'Late';
						$ship_track_class = 'late';
					}

					$ship_date .= ' · shipped ' . date('M j', strtotime($shipped_raw));
				} elseif (!$is_canceled) {
					if ($expected_raw < date('Y-m-d')) {
						$ship_track = 'Overdue';
						$ship_track_class = 'late';
					} else {
						$ship_track = 'Scheduled';
						$ship_track_class = 'scheduled';
					}
				}
			} elseif ($shipped_raw) {
				$ship_date = date('M j, Y', strtotime($shipped_raw));
				$ship_track = 'Shipped';
				$ship_track_class = 'on-time';
			}

			$customer_display = trim((string)($result['customer'] ?? ''));

			try {
				if (!empty($result['customer_id'])) {
					$company_q = $this->db->query("SELECT COALESCE((SELECT `a`.`company` FROM `" . DB_PREFIX . "address` `a` WHERE `a`.`customer_id` = '" . (int)$result['customer_id'] . "' ORDER BY `a`.`default` DESC, `a`.`address_id` ASC LIMIT 1), '') AS `company`")->row;
					$company = trim((string)($company_q['company'] ?? ''));

					if ($company !== '') {
						$customer_display = $company;
					}
				}
			} catch (\Throwable $e) {
			}

			$data['orders'][] = [
				'order_status'      => $result['order_status'] ? $result['order_status'] : $this->language->get('text_missing'),
				'status_class'      => $status_class,
				'order_code'        => '#' . $result['order_id'],
				'customer_display'  => $customer_display,
				'total'             => $this->currency->format($result['total'], $result['currency_code'], $result['currency_value']),
				'date_added'        => date('M j, Y', strtotime($result['date_added'])),
				'date_modified'     => date('M j, Y', strtotime($result['date_modified'])),
				'ship_date'         => $ship_date,
				'ship_track'        => $ship_track,
				'ship_track_class'  => $ship_track_class,
				'expected_ship_date'=> $expected_raw,
				'shipping_method'   => $shipping_method,
				'message_href'      => !empty($result['customer_id']) ? $this->url->link('customer/message', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . (int)$result['customer_id'] . '&order_id=' . (int)$result['order_id']) : '',
				'view'              => $this->url->link('sale/order.info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $result['order_id'] . $url)
			] + $result;
		}

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store_id'])) {
			$url .= '&filter_store_id=' . (int)$this->request->get['filter_store_id'];
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . (int)$this->request->get['filter_order_status_id'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['filter_date_modified_from'])) {
			$url .= '&filter_date_modified_from=' . $this->request->get['filter_date_modified_from'];
		}

		if (isset($this->request->get['filter_date_modified_to'])) {
			$url .= '&filter_date_modified_to=' . $this->request->get['filter_date_modified_to'];
		}

		if (isset($this->request->get['filter_tab'])) {
			$url .= '&filter_tab=' . urlencode((string)$this->request->get['filter_tab']);
		}

		if (!empty($this->request->get['filter_pending_ship'])) {
			$url .= '&filter_pending_ship=1';
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		$data['column_order'] = $this->language->get('column_order');
		$data['column_order_date'] = $this->language->get('column_order_date');
		$data['column_ship_date'] = $this->language->get('column_ship_date');
		$data['column_commission'] = $this->language->get('column_commission');
		$data['column_source'] = $this->language->get('column_source');
		$data['column_payout'] = $this->language->get('column_payout');

		// Sorts
		$data['sort_order'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=o.order_id' . $url);
		$data['sort_store_name'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=o.store_name' . $url);
		$data['sort_customer'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=customer' . $url);
		$data['sort_status'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=order_status' . $url);
		$data['sort_total'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=o.total' . $url);
		$data['sort_date_added'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=o.date_added' . $url);
		$data['sort_date_modified'] = $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . '&sort=o.date_modified' . $url);

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store_id'])) {
			$url .= '&filter_store_id=' . (int)$this->request->get['filter_store_id'];
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . (int)$this->request->get['filter_order_status_id'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['filter_date_modified_from'])) {
			$url .= '&filter_date_modified_from=' . $this->request->get['filter_date_modified_from'];
		}

		if (isset($this->request->get['filter_date_modified_to'])) {
			$url .= '&filter_date_modified_to=' . $this->request->get['filter_date_modified_to'];
		}

		if (isset($this->request->get['filter_tab'])) {
			$url .= '&filter_tab=' . urlencode((string)$this->request->get['filter_tab']);
		}

		if (!empty($this->request->get['filter_pending_ship'])) {
			$url .= '&filter_pending_ship=1';
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		// Total Orders
		$order_total = $this->model_sale_order->getTotalOrders($filter_data);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $order_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('sale/order.list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($order_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($order_total - $this->config->get('config_pagination_admin'))) ? $order_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $order_total, ceil($order_total / $this->config->get('config_pagination_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		return $this->load->view('sale/order_list', $data);
	}

	/**
	 * Info
	 *
	 * @throws \Exception
	 *
	 * @return void
	 */
	public function info(): void {
		$this->load->language('sale/order');

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['text_form'] = !$order_id ? $this->language->get('text_add') : sprintf($this->language->get('text_edit'), $order_id);

		$data['error_upload_size'] = sprintf($this->language->get('error_upload_size'), $this->config->get('config_file_max_size'));

		$data['config_file_max_size'] = ((int)$this->config->get('config_file_max_size') * 1024 * 1024);
		$data['config_telephone_required'] = $this->config->get('config_telephone_required');

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . (int)$this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_store_id'])) {
			$url .= '&filter_store_id=' . (int)$this->request->get['filter_store_id'];
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_order_status_id'])) {
			$url .= '&filter_order_status_id=' . (int)$this->request->get['filter_order_status_id'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
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
			'href' => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['shipping'] = $this->url->link('sale/order.shipping', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id);
		$data['invoice'] = $this->url->link('sale/order.invoice', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id);
		$data['back'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['upload'] = $this->url->link('tool/upload.upload', 'user_token=' . $this->session->data['user_token']);
		$data['customer_add'] = $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token']);

		// Order
		if ($order_id) {
			$this->load->model('sale/order');

			$order_info = $this->model_sale_order->getOrder($order_id);
		}

		if (!empty($order_info)) {
			$data['order_id'] = $order_info['order_id'];
		} else {
			$data['order_id'] = '';
		}

		// Invoice
		if (!empty($order_info)) {
			$data['invoice_no'] = $order_info['invoice_no'];
		} else {
			$data['invoice_no'] = '';
		}

		if (!empty($order_info)) {
			$data['invoice_prefix'] = $order_info['invoice_prefix'];
		} else {
			$data['invoice_prefix'] = '';
		}

		// Customer
		if (!empty($order_info)) {
			$data['customer_id'] = $order_info['customer_id'];
			$data['customer_edit'] = $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $order_info['customer_id']);
			$data['message_href'] = $this->url->link('customer/message', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . (int)$order_info['customer_id'] . '&order_id=' . (int)$order_id);
		} else {
			$data['customer_id'] = 0;
			$data['customer_edit'] = '';
			$data['message_href'] = '';
		}

		// Customer Group
		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		if (!empty($order_info)) {
			$data['customer_group_id'] = $order_info['customer_group_id'];
		} else {
			$data['customer_group_id'] = (int)$this->config->get('config_customer_group_id');
		}

		if (!empty($order_info)) {
			$data['firstname'] = $order_info['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (!empty($order_info)) {
			$data['lastname'] = $order_info['lastname'];
		} else {
			$data['lastname'] = '';
		}

		if (!empty($order_info)) {
			$data['email'] = $order_info['email'];
		} else {
			$data['email'] = '';
		}

		if (!empty($order_info)) {
			$data['telephone'] = $order_info['telephone'];
		} else {
			$data['telephone'] = '';
		}

		if (!empty($order_info)) {
			$data['account_custom_field'] = $order_info['custom_field'];
		} else {
			$data['account_custom_field'] = [];
		}

		// Custom Fields
		$data['custom_fields'] = [];

		$filter_data = [
			'filter_status' => 1,
			'sort'          => 'cf.sort_order',
			'order'         => 'ASC'
		];

		$this->load->model('customer/custom_field');

		$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);

		foreach ($custom_fields as $custom_field) {
			$data['custom_fields'][] = ['custom_field_value' => $this->model_customer_custom_field->getValues($custom_field['custom_field_id'])] + $custom_field;
		}

		// Stores
		$data['stores'] = [];

		$data['stores'][] = [
			'store_id' => 0,
			'name'     => $this->config->get('config_name')
		];

		$this->load->model('setting/store');

		$results = $this->model_setting_store->getStores();

		foreach ($results as $result) {
			$data['stores'][] = $result;
		}

		if (!empty($order_info)) {
			$data['store_id'] = $order_info['store_id'];
		} else {
			$data['store_id'] = (int)$this->config->get('config_store_id');
		}

		// Languages
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (!empty($order_info)) {
			$data['language_code'] = $order_info['language_code'];
		} else {
			$data['language_code'] = $this->config->get('config_language');
		}

		// Currencies
		$this->load->model('localisation/currency');

		$data['currencies'] = $this->model_localisation_currency->getCurrencies();

		if (!empty($order_info)) {
			$data['currency_code'] = $order_info['currency_code'];
			$currency_value = $order_info['currency_value'];
		} else {
			$data['currency_code'] = $this->config->get('config_currency');
			$currency_value = 1;
		}

		// Products
		$data['order_products'] = [];

		// Order
		$this->load->model('sale/order');

		// Subscription
		$this->load->model('sale/subscription');

		// Upload
		$this->load->model('tool/upload');

		$products = $this->model_sale_order->getProducts($order_id);

		foreach ($products as $product) {
			$option_data = [];

			$options = $this->model_sale_order->getOptions($order_id, $product['order_product_id']);

			foreach ($options as $option) {
				if ($option['type'] != 'file') {
					$option_data[] = $option;
				} else {
					$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

					if ($upload_info) {
						$option_data[] = [
							'filename' => $upload_info['name'],
							'href'     => $this->url->link('tool/upload.download', 'user_token=' . $this->session->data['user_token'] . '&code=' . $upload_info['code'])
						] + $option;
					}
				}
			}

			$subscription_plan = '';

			$subscription_info = $this->model_sale_order->getSubscription($order_id, $product['order_product_id']);

			if ($subscription_info) {
				if ($subscription_info['trial_status']) {
					$trial_price = $this->currency->format($subscription_info['trial_price'] + ($this->config->get('config_tax') ? $subscription_info['trial_tax'] : 0), $this->config->get('config_currency'));
					$trial_cycle = $subscription_info['trial_cycle'];
					$trial_frequency = $this->language->get('text_' . $subscription_info['trial_frequency']);
					$trial_duration = $subscription_info['trial_duration'];

					$subscription_plan .= sprintf($this->language->get('text_subscription_trial'), $trial_price, $trial_cycle, $trial_frequency, $trial_duration);
				}

				$price = $this->currency->format($subscription_info['price'] + ($this->config->get('config_tax') ? $subscription_info['tax'] : 0), $this->config->get('config_currency'));
				$cycle = $subscription_info['cycle'];
				$frequency = $this->language->get('text_' . $subscription_info['frequency']);
				$duration = $subscription_info['duration'];

				if ($subscription_info['duration']) {
					$subscription_plan .= sprintf($this->language->get('text_subscription_duration'), $price, $cycle, $frequency, $duration);
				} else {
					$subscription_plan .= sprintf($this->language->get('text_subscription_cancel'), $price, $cycle, $frequency);
				}

				$subscription_plan_id = $subscription_info['subscription_plan_id'];
			} else {
				$subscription_plan_id = 0;
			}

			$subscription_info = $this->model_sale_subscription->getSubscriptionByOrderProductId($order_id, $product['order_product_id']);

			if ($subscription_info) {
				$subscription_edit = $this->url->link('sale/subscription.info', 'user_token=' . $this->session->data['user_token'] . '&subscription_id=' . $subscription_info['subscription_id']);
			} else {
				$subscription_edit = '';
			}

			$data['order_products'][] = [
				'option'               => $option_data,
				'subscription_plan'    => $subscription_plan,
				'subscription_plan_id' => $subscription_plan_id,
				'subscription_edit'    => $subscription_edit,
				'price'                => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $data['currency_code'], $currency_value),
				'total'                => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $data['currency_code'], $currency_value),
				'product_edit'         => $this->url->link('catalog/product.form', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $product['product_id'])
			] + $product;
		}

		// Totals
		$data['order_totals'] = [];

		$totals = $this->model_sale_order->getTotals($order_id);

		foreach ($totals as $total) {
			$data['order_totals'][] = ['text' => $this->currency->format($total['value'], $data['currency_code'], $currency_value)] + $total;
		}

		// Customers
		if (!empty($order_info)) {
			$this->load->model('customer/customer');

			$data['addresses'] = $this->model_customer_customer->getAddresses($order_info['customer_id']);
		} else {
			$data['addresses'] = [];
		}

		// Payment Address
		if (!empty($order_info)) {
			$data['payment_address_id'] = $order_info['payment_address_id'];
			$data['payment_firstname'] = $order_info['payment_firstname'];
			$data['payment_lastname'] = $order_info['payment_lastname'];
			$data['payment_company'] = $order_info['payment_company'];
			$data['payment_address_1'] = $order_info['payment_address_1'];
			$data['payment_address_2'] = $order_info['payment_address_2'];
			$data['payment_city'] = $order_info['payment_city'];
			$data['payment_postcode'] = $order_info['payment_postcode'];
			$data['payment_country_id'] = $order_info['payment_country_id'];
			$data['payment_country'] = $order_info['payment_country'];
			$data['payment_zone_id'] = $order_info['payment_zone_id'];
			$data['payment_zone'] = $order_info['payment_zone'];
			$data['payment_custom_field'] = $order_info['payment_custom_field'];
		} else {
			$data['payment_address_id'] = 0;
			$data['payment_firstname'] = '';
			$data['payment_lastname'] = '';
			$data['payment_company'] = '';
			$data['payment_address_1'] = '';
			$data['payment_address_2'] = '';
			$data['payment_city'] = '';
			$data['payment_postcode'] = '';
			$data['payment_country_id'] = 0;
			$data['payment_country'] = '';
			$data['payment_zone_id'] = 0;
			$data['payment_zone'] = '';
			$data['payment_custom_field'] = [];
		}

		// Countries
		$this->load->model('localisation/country');

		$data['countries'] = $this->model_localisation_country->getCountries();

		// Zones
		$this->load->model('localisation/zone');

		$data['payment_zones'] = $this->model_localisation_zone->getZonesByCountryId($data['payment_country_id']);

		// Payment Method
		if (!empty($order_info['payment_method'])) {
			$data['payment_method_name'] = $order_info['payment_method']['name'];
			$data['payment_method_code'] = $order_info['payment_method']['code'];
		} else {
			$data['payment_method_name'] = '';
			$data['payment_method_code'] = '';
		}

		// Shipping Address
		if (!empty($order_info)) {
			$data['shipping_address_id'] = $order_info['shipping_address_id'];
			$data['shipping_firstname'] = $order_info['shipping_firstname'];
			$data['shipping_lastname'] = $order_info['shipping_lastname'];
			$data['shipping_company'] = $order_info['shipping_company'];
			$data['shipping_address_1'] = $order_info['shipping_address_1'];
			$data['shipping_address_2'] = $order_info['shipping_address_2'];
			$data['shipping_city'] = $order_info['shipping_city'];
			$data['shipping_postcode'] = $order_info['shipping_postcode'];
			$data['shipping_country_id'] = $order_info['shipping_country_id'];
			$data['shipping_country'] = $order_info['shipping_country'];
			$data['shipping_zone_id'] = $order_info['shipping_zone_id'];
			$data['shipping_zone'] = $order_info['shipping_zone'];
			$data['shipping_custom_field'] = $order_info['shipping_custom_field'];
		} else {
			$data['shipping_address_id'] = 0;
			$data['shipping_firstname'] = '';
			$data['shipping_lastname'] = '';
			$data['shipping_company'] = '';
			$data['shipping_address_1'] = '';
			$data['shipping_address_2'] = '';
			$data['shipping_city'] = '';
			$data['shipping_postcode'] = '';
			$data['shipping_country_id'] = 0;
			$data['shipping_country'] = '';
			$data['shipping_zone_id'] = 0;
			$data['shipping_zone'] = '';
			$data['shipping_custom_field'] = [];
		}

		if ($data['payment_country_id'] == $data['shipping_country_id']) {
			$data['shipping_zones'] = $data['payment_zones'];
		} else {
			$data['shipping_zones'] = $this->model_localisation_zone->getZonesByCountryId($data['shipping_country_id']);
		}

		// Shipping Method
		if (!empty($order_info['shipping_method'])) {
			$data['shipping_method_name'] = $order_info['shipping_method']['name'];
			$data['shipping_method_code'] = $order_info['shipping_method']['code'];
			$data['shipping_method_cost'] = $order_info['shipping_method']['cost'];
			$data['shipping_method_tax_class_id'] = $order_info['shipping_method']['tax_class_id'];
		} else {
			$data['shipping_method_name'] = '';
			$data['shipping_method_code'] = '';
			$data['shipping_method_cost'] = '';
			$data['shipping_method_tax_class_id'] = 0;
		}

		// Reward Points
		if (!empty($order_info)) {
			$data['points'] = $this->model_sale_order->getRewardTotal($order_id);
		} else {
			$data['points'] = 0;
		}

		// Reward Points
		if (!empty($order_info)) {
			$data['reward_total'] = $this->model_customer_customer->getTotalRewardsByOrderId($order_id);
		} else {
			$data['reward_total'] = 0;
		}

		// Affiliate
		if (!empty($order_info)) {
			$data['affiliate_id'] = $order_info['affiliate_id'];
			$data['affiliate_edit'] = $this->url->link('marketing/affiliate.form', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $order_info['customer_id']);
		} else {
			$data['affiliate_id'] = 0;
			$data['affiliate_edit'] = '';
		}

		if (!empty($order_info)) {
			$data['affiliate'] = $order_info['affiliate'];
		} else {
			$data['affiliate'] = '';
		}

		// Commission
		if (!empty($order_info) && (float)$order_info['commission']) {
			$data['commission'] = $this->currency->format($order_info['commission'], $this->config->get('config_currency'));
		} else {
			$data['commission'] = '';
		}

		if (!empty($order_info)) {
			$data['commission_total'] = $this->model_customer_customer->getTotalTransactionsByOrderId($order_id);
		} else {
			$data['commission_total'] = '';
		}

		// Extension Order Tabs can be called here.
		$data['extensions'] = [];

		$this->load->model('setting/extension');

		$extensions = $this->model_setting_extension->getExtensionsByType('total');

		foreach ($extensions as $extension) {
			if ($this->config->get('total_' . $extension['code'] . '_status')) {
				$output = $this->load->controller('extension/' . $extension['extension'] . '/api/' . $extension['code']);

				if ($output && !$output instanceof \Exception) {
					$data['extensions'][] = $output;
				}
			}
		}

		// Comment
		if (!empty($order_info)) {
			$data['comment'] = nl2br($order_info['comment']);
		} else {
			$data['comment'] = '';
		}

		// Totals
		$data['order_totals'] = [];

		if (!empty($order_info)) {
			$totals = $this->model_sale_order->getTotals($order_id);

			foreach ($totals as $total) {
				$data['order_totals'][] = ['text' => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value'])] + $total;
			}
		}

		// Order Statuses
		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (!empty($order_info)) {
			$data['order_status_id'] = $order_info['order_status_id'];
		} else {
			$data['order_status_id'] = (int)$this->config->get('config_order_status_id');
		}

		$data['complete_status'] = in_array($data['order_status_id'], (array)$this->config->get('config_complete_status'));

		// Additional tabs that are payment gateway specific
		$data['tabs'] = [];

		// Extension Order Tabs can be called here.
		$this->load->model('setting/extension');

		if (!empty($order_info['payment_method']['code'])) {
			if (isset($order_info['payment_method']['code'])) {
				$code = oc_substr($order_info['payment_method']['code'], 0, strpos($order_info['payment_method']['code'], '.'));
			} else {
				$code = '';
			}

			$extension_info = $this->model_setting_extension->getExtensionByCode('payment', $code);

			if ($extension_info && $this->user->hasPermission('access', 'extension/' . $extension_info['extension'] . '/payment/' . $extension_info['code'])) {
				$output = $this->load->controller('extension/' . $extension_info['extension'] . '/payment/' . $extension_info['code'] . '.order');

				if ($output && !$output instanceof \Exception) {
					$this->load->language('extension/' . $extension_info['extension'] . '/payment/' . $extension_info['code'], 'extension');

					$data['tabs'][] = [
						'code'    => $extension_info['code'],
						'title'   => $this->language->get('extension_heading_title'),
						'content' => $output
					];
				}
			}
		}

		// Extension Order Tabs can be called here.
		$this->load->model('setting/extension');

		$extensions = $this->model_setting_extension->getExtensionsByType('fraud');

		foreach ($extensions as $extension) {
			if ($this->config->get('fraud_' . $extension['code'] . '_status')) {
				$this->load->language('extension/' . $extension['extension'] . '/fraud/' . $extension['code'], 'extension');

				$output = $this->load->controller('extension/' . $extension['extension'] . '/fraud/' . $extension['code'] . '.order');

				if ($output && !$output instanceof \Exception) {
					$data['tabs'][] = [
						'code'    => $extension['extension'],
						'title'   => $this->language->get('extension_heading_title'),
						'content' => $output
					];
				}
			}
		}

		// Additional information
		if (!empty($order_info)) {
			$data['ip'] = $order_info['ip'];
			$data['forwarded_ip'] = $order_info['forwarded_ip'];
			$data['user_agent'] = $order_info['user_agent'];
			$data['accept_language'] = $order_info['accept_language'];
			$data['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));
			$data['date_modified'] = date($this->language->get('date_format_short'), strtotime($order_info['date_modified']));
		} else {
			$data['ip'] = '';
			$data['forwarded_ip'] = '';
			$data['user_agent'] = '';
			$data['accept_language'] = '';
			$data['date_added'] = date($this->language->get('date_format_short'), time());
			$data['date_modified'] = date($this->language->get('date_format_short'), time());
		}

		$data['user_token'] = $this->session->data['user_token'];

		// Histories
		$data['history'] = $this->getHistory();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/order_info', $data));
	}

	/**
	 * Call
	 *
	 * Method to call the storefront API and return a response.
	 *
	 * @Example
	 *
	 * We create a hash from the data in a similar method to how amazon does things.
	 *
	 * $call     = 'order';
	 * $username = 'API username';
	 * $key      = 'API Key';
	 * $domain   = 'www.yourdomain.com';
	 * $path     = '/';
	 * $store_id = 0;
	 * $language = 'en-gb';
	 * $time     = time();
	 *
	 * // Build hash string
	 * $string  = $call . "\n";
	 * $string .= $username . "\n";
	 * $string .= $domain . "\n";
	 * $string .= $path . "\n";
	 * $string .= $store_id . "\n";
	 * $string .= $language . "\n";
	 * $string .= $currency . "\n";
	 * $string .= json_encode($_POST) . "\n";
	 * $string .= $time . "\n";
	 *
	 * $signature = base64_encode(hash_hmac('sha1', $string, $key, true));
	 *
	 * // Make remote call
	 * $url  = '&call=' . $call;
	 * $url  = '&username=' . urlencode($username);
	 * $url .= '&store_id=' . $store_id;
	 * $url .= '&language=' . $language;
	 * $url .= '&currency=' . $currency;
	 * $url .= '&time=' . $time;
	 * $url .= '&signature=' . rawurlencode($signature);
	 *
	 * $curl = curl_init();
	 *
	 * curl_setopt($curl, CURLOPT_URL, 'https://' . $domain . $path . 'index.php?route=api/api' . $url);
	 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	 * curl_setopt($curl, CURLOPT_HEADER, false);
	 * curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	 * curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
	 * curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	 * curl_setopt($curl, CURLOPT_POST, true);
	 * curl_setopt($curl, CURLOPT_POSTFIELDS, $_POST);
	 *
	 * $response = curl_exec($curl);
	 *
	 * $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	 *
	 * unset($curl);
	 *
	 * if ($status == 200) {
	 *      $response_info = json_decode($response, true);
	 * } else {
	 *      $response_info = [];
	 * }
	 *
	 * @return void
	 */
	public function call(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->get['call'])) {
			$call = (string)$this->request->get['call'];
		} else {
			$call = '';
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (isset($this->request->get['language'])) {
			$language = (string)$this->request->get['language'];
		} else {
			$language = (string)$this->config->get('config_language');
		}

		if (isset($this->request->get['currency'])) {
			$currency = (string)$this->request->get['currency'];
		} else {
			$currency = (string)$this->config->get('config_currency');
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Api
		$this->load->model('user/api');

		$api_info = $this->model_user_api->getApi((int)$this->config->get('config_api_id'));

		if (!$api_info) {
			$json['error'] = $this->language->get('error_api');
		}

		if (!$json) {
			// 1. Create a store instance using loader class to call controllers, models, views, libraries.
			$this->load->model('setting/store');

			$store = $this->model_setting_store->createStoreInstance($store_id, $language, $currency);

			$store->session->data['currency'] = $currency;

			// 2. Remove the unneeded keys.
			$request_data = $this->request->get;

			unset($request_data['user_token']);

			// 3. Add the request GET vars.
			$store->request->get = $request_data;

			$store->request->get['route'] = 'api/order';

			// 4. Add the request POST var, with added preserved order_status_id for confirm
			$store->request->post = $this->request->post;
			if ($call == 'confirm') {
				$order_id = isset($this->request->post['order_id']) ? (int)$this->request->post['order_id'] : 0;
				$this->load->model('sale/order');
				$order_info = $this->model_sale_order->getOrder($order_id);
				$store->request->post['order_status_id'] = $order_info['order_status_id'] ?? $this->config->get('config_order_status_id');
			}

			// 5. Call the required API controller.
			$store->load->controller($store->request->get['route']);

			// 6. Call the required API controller and get the output.
			$output = $store->response->getOutput();

			// 7. Clean up data by clearing cart.
			$store->cart->clear();

			// 8. Deleting the current session, so we are not creating infinite sessions.
			$store->session->destroy();
		} else {
			$output = json_encode($json);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput($output);
	}

	/**
	 * Delete
	 *
	 * @return void
	 */
	public function delete(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			// Order
			$this->load->model('sale/order');

			foreach ($selected as $order_id) {
				$this->model_sale_order->deleteOrder($order_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Invoice
	 *
	 * @return void
	 */
	public function invoice(): void {
		$this->load->language('sale/order');

		$data['title'] = $this->language->get('text_invoice');

		$data['base'] = HTTP_SERVER;
		$data['direction'] = $this->language->get('direction');
		$data['lang'] = $this->language->get('code');

		// Hard coding css paths so that they can be replaced via the event's system.
		$data['bootstrap_css'] = 'view/stylesheet/bootstrap.css';
		$data['icons'] = 'view/stylesheet/fonts/fontawesome/css/all.min.css';
		$data['stylesheet'] = 'view/stylesheet/stylesheet.css';

		// Hard coding scripts so they can be replaced via the events system.
		$data['jquery'] = 'view/javascript/jquery/jquery-3.7.1.min.js';
		$data['bootstrap_js'] = 'view/javascript/bootstrap/js/bootstrap.bundle.min.js';

		// Order
		$this->load->model('sale/order');

		// Subscription
		$this->load->model('sale/subscription');

		// Setting
		$this->load->model('setting/setting');

		// Upload
		$this->load->model('tool/upload');

		$data['orders'] = [];

		$orders = [];

		if (isset($this->request->post['selected'])) {
			$orders = (array)$this->request->post['selected'];
		}

		if (isset($this->request->get['order_id'])) {
			$orders[] = (int)$this->request->get['order_id'];
		}

		foreach ($orders as $order_id) {
			$order_info = $this->model_sale_order->getOrder($order_id);

			if ($order_info) {
				$store_info = $this->model_setting_setting->getSetting('config', $order_info['store_id']);

				if ($store_info) {
					$store_address = $store_info['config_address'];
					$store_email = $store_info['config_email'];
					$store_telephone = $store_info['config_telephone'];
				} else {
					$store_address = $this->config->get('config_address');
					$store_email = $this->config->get('config_email');
					$store_telephone = $this->config->get('config_telephone');
				}

				if ($order_info['invoice_no']) {
					$invoice_no = $order_info['invoice_prefix'] . $order_info['invoice_no'];
				} else {
					$invoice_no = '';
				}

				// Payment Address
				if ($order_info['payment_address_format']) {
					$format = $order_info['payment_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}

				$find = [
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{zone_code}',
					'{country}'
				];

				$replace = [
					'firstname' => $order_info['payment_firstname'],
					'lastname'  => $order_info['payment_lastname'],
					'company'   => $order_info['payment_company'],
					'address_1' => $order_info['payment_address_1'],
					'address_2' => $order_info['payment_address_2'],
					'city'      => $order_info['payment_city'],
					'postcode'  => $order_info['payment_postcode'],
					'zone'      => $order_info['payment_zone'],
					'zone_code' => $order_info['payment_zone_code'],
					'country'   => $order_info['payment_country']
				];

				$pattern_1 = [
					"\r\n",
					"\r",
					"\n"
				];

				$pattern_2 = [
					"/\\s\\s+/",
					"/\r\r+/",
					"/\n\n+/"
				];

				$payment_address = str_replace($pattern_1, '<br/>', preg_replace($pattern_2, '<br/>', trim(str_replace($find, $replace, $format))));

				// Shipping Address
				if ($order_info['shipping_address_format']) {
					$format = $order_info['shipping_address_format'];
				} else {
					$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
				}

				$find = [
					'{firstname}',
					'{lastname}',
					'{company}',
					'{address_1}',
					'{address_2}',
					'{city}',
					'{postcode}',
					'{zone}',
					'{zone_code}',
					'{country}'
				];

				$replace = [
					'firstname' => $order_info['shipping_firstname'],
					'lastname'  => $order_info['shipping_lastname'],
					'company'   => $order_info['shipping_company'],
					'address_1' => $order_info['shipping_address_1'],
					'address_2' => $order_info['shipping_address_2'],
					'city'      => $order_info['shipping_city'],
					'postcode'  => $order_info['shipping_postcode'],
					'zone'      => $order_info['shipping_zone'],
					'zone_code' => $order_info['shipping_zone_code'],
					'country'   => $order_info['shipping_country']
				];

				$shipping_address = str_replace($pattern_1, '<br/>', preg_replace($pattern_2, '<br/>', trim(str_replace($find, $replace, $format))));

				$product_data = [];

				$products = $this->model_sale_order->getProducts($order_id);

				foreach ($products as $product) {
					$option_data = [];

					$options = $this->model_sale_order->getOptions($order_id, $product['order_product_id']);

					foreach ($options as $option) {
						if ($option['type'] != 'file') {
							$value = $option['value'];
						} else {
							$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

							if ($upload_info) {
								$value = $upload_info['name'];
							} else {
								$value = '';
							}
						}

						$option_data[] = ['value' => $value] + $option;
					}

					// Subscription
					$description = '';

					$subscription_info = $this->model_sale_order->getSubscription($order_id, $product['order_product_id']);

					if ($subscription_info) {
						if ($subscription_info['trial_status']) {
							$trial_price = $this->currency->format($subscription_info['trial_price'], $this->config->get('config_currency'));
							$trial_cycle = $subscription_info['trial_cycle'];
							$trial_frequency = $this->language->get('text_' . $subscription_info['trial_frequency']);
							$trial_duration = $subscription_info['trial_duration'];

							$description .= sprintf($this->language->get('text_subscription_trial'), $trial_price, $trial_cycle, $trial_frequency, $trial_duration);
						}
						$price = $this->currency->format($subscription_info['price'], $this->config->get('config_currency'));
						$cycle = $subscription_info['cycle'];
						$frequency = $this->language->get('text_' . $subscription_info['frequency']);
						$duration = $subscription_info['duration'];

						if ($subscription_info['duration']) {
							$description .= sprintf($this->language->get('text_subscription_duration'), $price, $cycle, $frequency, $duration);
						} else {
							$description .= sprintf($this->language->get('text_subscription_cancel'), $price, $cycle, $frequency);
						}
					}

					$product_data[] = [
						'name'         => $product['name'],
						'model'        => $product['model'],
						'option'       => $option_data,
						'subscription' => $description,
						'quantity'     => $product['quantity'],
						'price'        => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
						'total'        => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
					];
				}

				$total_data = [];

				$totals = $this->model_sale_order->getTotals($order_id);

				foreach ($totals as $total) {
					$total_data[] = ['text' => $this->currency->format($total['value'], $order_info['currency_code'], $order_info['currency_value'])] + $total;
				}

				$data['orders'][] = [
					'order_id'         => $order_id,
					'invoice_no'       => $invoice_no,
					'date_added'       => date($this->language->get('date_format_short'), strtotime($order_info['date_added'])),
					'store_name'       => $order_info['store_name'],
					'store_url'        => rtrim($order_info['store_url'], '/'),
					'store_address'    => nl2br($store_address),
					'store_email'      => $store_email,
					'store_telephone'  => $store_telephone,
					'email'            => $order_info['email'],
					'telephone'        => $order_info['telephone'],
					'shipping_address' => $shipping_address,
					'shipping_method'  => ($order_info['shipping_method'] ? $order_info['shipping_method']['name'] : ''),
					'payment_address'  => $payment_address,
					'payment_method'   => $order_info['payment_method']['name'],
					'product'          => $product_data,
					'total'            => $total_data,
					'comment'          => nl2br($order_info['comment'])
				];
			}
		}

		$this->response->setOutput($this->load->view('sale/order_invoice', $data));
	}

	/**
	 * Shipping
	 *
	 * @return void
	 */
	public function shipping(): void {
		$this->load->language('sale/order');

		$data['title'] = 'PACKING SLIP';
		$data['base'] = HTTP_SERVER;
		$data['catalog'] = defined('HTTP_CATALOG') ? HTTP_CATALOG : HTTP_SERVER;
		$data['direction'] = $this->language->get('direction');
		$data['lang'] = $this->language->get('code');

		$logo = (string)$this->config->get('config_logo');

		if ($logo && is_file(DIR_IMAGE . $logo)) {
			$data['logo'] = rtrim($data['catalog'], '/') . '/image/' . str_replace(' ', '%20', $logo);
		} elseif (is_file(DIR_CATALOG . 'view/image/craftboat/logo.svg')) {
			$data['logo'] = rtrim($data['catalog'], '/') . '/catalog/view/image/craftboat/logo.svg';
		} else {
			$data['logo'] = '';
		}

		$this->load->model('sale/order');
		$this->load->model('catalog/product');
		$this->load->model('tool/upload');

		$data['orders'] = [];

		$orders = [];

		if (isset($this->request->post['selected'])) {
			$orders = (array)$this->request->post['selected'];
		}

		if (isset($this->request->get['order_id'])) {
			$orders[] = (int)$this->request->get['order_id'];
		}

		foreach ($orders as $order_id) {
			$order_id = (int)$order_id;
			$order_info = $this->model_sale_order->getOrder($order_id);

			if (!$order_info) {
				continue;
			}

			$has_shipping = !empty($order_info['shipping_method']) || !empty($order_info['shipping_firstname']) || !empty($order_info['shipping_address_1']);

			if (!$has_shipping) {
				continue;
			}

			$prefix = !empty($order_info['shipping_firstname']) || !empty($order_info['shipping_address_1']) ? 'shipping' : 'payment';

			$ship_name_parts = array_filter([
				trim((string)($order_info[$prefix . '_company'] ?? '')),
				trim($order_info[$prefix . '_firstname'] . ' ' . $order_info[$prefix . '_lastname'])
			]);

			$ship_lines = array_filter([
				$order_info[$prefix . '_address_1'] ?? '',
				$order_info[$prefix . '_address_2'] ?? '',
				trim(($order_info[$prefix . '_city'] ?? '') . (!empty($order_info[$prefix . '_zone']) ? ', ' . $order_info[$prefix . '_zone'] : '') . (!empty($order_info[$prefix . '_postcode']) ? ' ' . $order_info[$prefix . '_postcode'] : '')),
				$order_info[$prefix . '_country'] ?? ''
			]);

			$first_order = false;

			try {
				$count = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . (int)$order_info['customer_id'] . "' AND `order_status_id` > '0' AND `order_id` <= '" . $order_id . "'")->row;
				$first_order = ((int)($count['total'] ?? 0) <= 1);
			} catch (\Throwable $e) {
			}

			$expected_ship = '';

			if (!empty($order_info['expected_ship_date']) && $order_info['expected_ship_date'] !== '0000-00-00') {
				$expected_ship = date('M j, Y', strtotime($order_info['expected_ship_date']));
			} elseif (!empty($order_info['shipped_date']) && $order_info['shipped_date'] !== '0000-00-00') {
				$expected_ship = date('M j, Y', strtotime($order_info['shipped_date']));
			}

			$product_data = [];
			$products = $this->model_sale_order->getProducts($order_id);

			foreach ($products as $product) {
				$option_data = [];
				$options = $this->model_sale_order->getOptions($order_id, $product['order_product_id']);

				foreach ($options as $option) {
					if ($option['type'] != 'file') {
						$value = $option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);
						$value = $upload_info ? $upload_info['name'] : '';
					}

					$option_data[] = ['name' => $option['name'], 'value' => $value];
				}

				$product_info = $this->model_catalog_product->getProduct((int)$product['product_id']);
				$sku = trim((string)($product_info['sku'] ?? ''));

				if ($sku === '') {
					$sku = (string)$product['model'];
				}

				$wsp = (float)$product['price'];
				$srp = $product_info ? (float)$product_info['price'] : $wsp;

				if ($srp <= $wsp) {
					$srp = $wsp * 2.5;
				}

				$product_data[] = [
					'sku'      => $sku,
					'name'     => (string)$product['name'],
					'option'   => $option_data,
					'quantity' => (int)$product['quantity'],
					'wsp'      => $this->currency->format($wsp, $order_info['currency_code'], $order_info['currency_value']),
					'srp'      => $this->currency->format($srp, $order_info['currency_code'], $order_info['currency_value']),
					'subtotal' => $this->currency->format((float)$product['total'], $order_info['currency_code'], $order_info['currency_value'])
				];
			}

			$data['orders'][] = [
				'order_id'         => $order_id,
				'order_code'       => '#' . $order_id,
				'date_added'       => date('M j, Y', strtotime($order_info['date_added'])),
				'ship_date'        => $expected_ship,
				'store_name'       => $order_info['store_name'] ?: (string)$this->config->get('config_name'),
				'store_url'        => rtrim((string)($order_info['store_url'] ?: (defined('HTTP_CATALOG') ? HTTP_CATALOG : '')), '/'),
				'first_order'      => $first_order,
				'ship_to_names'    => $ship_name_parts,
				'ship_to_lines'    => $ship_lines,
				'telephone'        => (string)$order_info['telephone'],
				'product'          => $product_data,
				'page'             => '1/1'
			];
		}

		$this->response->setOutput($this->load->view('sale/order_shipping', $data));
	}

	/**
	 * History
	 *
	 * @return void
	 */
	public function history(): void {
		$this->load->language('sale/order');

		$this->response->setOutput($this->getHistory());
	}

	/**
	 * Get History
	 *
	 * @return string
	 */
	public function getHistory(): string {
		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'sale/order.history') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		// Histories
		$data['histories'] = [];

		$this->load->model('sale/order');

		$results = $this->model_sale_order->getHistories($order_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$data['histories'][] = [
				'comment'    => nl2br($result['comment']),
				'notify'     => $result['notify'] ? $this->language->get('text_yes') : $this->language->get('text_no'),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			] + $result;
		}

		// Total Histories
		$history_total = $this->model_sale_order->getTotalHistories($order_id);

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $history_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('sale/order.history', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($history_total - $limit)) ? $history_total : ((($page - 1) * $limit) + $limit), $history_total, ceil($history_total / $limit));

		return $this->load->view('sale/order_history', $data);
	}

	/**
	 * Create Invoice No
	 *
	 * @return void
	 */
	public function createInvoiceNo(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Order
		$this->load->model('sale/order');

		$order_info = $this->model_sale_order->getOrder($order_id);

		if ($order_info) {
			if ($order_info['invoice_no']) {
				$json['error'] = $this->language->get('error_invoice_no');
			}
		} else {
			$json['error'] = $this->language->get('error_order');
		}

		if (!$json) {
			$json['success'] = $this->language->get('text_success');

			// Order
			$this->load->model('sale/order');

			$json['invoice_no'] = $this->model_sale_order->createInvoiceNo($order_id);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Add Reward
	 *
	 * @return void
	 */
	public function addReward(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Order
		$this->load->model('sale/order');

		$order_info = $this->model_sale_order->getOrder($order_id);

		if ($order_info) {
			if (!$order_info['customer_id']) {
				$json['error'] = $this->language->get('error_reward_guest');
			}
		} else {
			$json['error'] = $this->language->get('error_order');
		}

		// Customer
		$this->load->model('customer/customer');

		// Total Rewards
		$reward_total = $this->model_customer_customer->getTotalRewardsByOrderId($order_id);

		if ($reward_total) {
			$json['error'] = $this->language->get('error_reward_add');
		}

		if (!$json) {
			$this->model_customer_customer->addReward($order_info['customer_id'], $this->language->get('text_order_id') . ' #' . $order_id, $order_info['reward'], $order_id);

			$json['success'] = $this->language->get('text_reward_add');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Remove Reward
	 *
	 * @return void
	 */
	public function removeReward(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Order
		$this->load->model('sale/order');

		$order_info = $this->model_sale_order->getOrder($order_id);

		if (!$order_info) {
			$json['error'] = $this->language->get('error_order');
		}

		if (!$json) {
			// Customer
			$this->load->model('customer/customer');

			$this->model_customer_customer->deleteRewardsByOrderId($order_id);

			$json['success'] = $this->language->get('text_reward_remove');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Add Commission
	 *
	 * @return void
	 */
	public function addCommission(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Order
		$this->load->model('sale/order');

		$order_info = $this->model_sale_order->getOrder($order_id);

		if ($order_info) {
			// Customer
			$this->load->model('customer/customer');

			$customer_info = $this->model_customer_customer->getCustomer($order_info['affiliate_id']);

			if (!$customer_info) {
				$json['error'] = $this->language->get('error_affiliate');
			}

			// Total Transactions
			$affiliate_total = $this->model_customer_customer->getTotalTransactionsByOrderId($order_id);

			if ($affiliate_total) {
				$json['error'] = $this->language->get('error_commission_add');
			}
		} else {
			$json['error'] = $this->language->get('error_order');
		}

		if (!$json) {
			$this->model_customer_customer->addTransaction($order_info['affiliate_id'], $this->language->get('text_order_id') . ' #' . $order_id, $order_info['commission'], $order_id);

			$json['success'] = $this->language->get('text_commission_add');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Remove Commission
	 *
	 * @return void
	 */
	public function removeCommission(): void {
		$this->load->language('sale/order');

		$json = [];

		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Order
		$this->load->model('sale/order');

		$order_info = $this->model_sale_order->getOrder($order_id);

		if (!$order_info) {
			$json['error'] = $this->language->get('error_order');
		}

		if (!$json) {
			// Customer
			$this->load->model('customer/customer');

			$this->model_customer_customer->deleteTransactionsByOrderId($order_id);

			$json['success'] = $this->language->get('text_commission_remove');
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
		$this->load->language('sale/order');

		$json = [];

		// Order
		if (isset($this->request->get['order_id'])) {
			$order_id = (int)$this->request->get['order_id'];
		} else {
			$order_id = 0;
		}

		$this->load->model('sale/order');

		$order_info = $this->model_sale_order->getOrder($order_id);

		if (!$order_info) {
			$json['error'] = $this->language->get('error_order');
		}

		if (!$json) {
			$json = $order_info;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Aggregate products from selected orders for pick list
	 *
	 * @return array{store:string,order_codes:array<int,string>,products:array<int,array<string,mixed>>}
	 */
	private function getPickListData(): array {
		$this->load->model('sale/order');
		$this->load->model('catalog/product');

		$selected = $this->request->post['selected'] ?? $this->request->get['selected'] ?? [];

		if (!is_array($selected)) {
			$selected = $selected !== '' && $selected !== null ? [$selected] : [];
		}

		$order_codes = [];
		$lines = [];

		foreach ($selected as $order_id) {
			$order_id = (int)$order_id;
			$order_info = $this->model_sale_order->getOrder($order_id);

			if (!$order_info) {
				continue;
			}

			$order_codes[] = '#' . $order_id;
			$products = $this->model_sale_order->getProducts($order_id);

			foreach ($products as $product) {
				$sku = trim((string)$product['model']);

				if (!$sku && !empty($product['product_id'])) {
					$info = $this->model_catalog_product->getProduct((int)$product['product_id']);
					$sku = trim((string)($info['sku'] ?? $info['model'] ?? ''));
				}

				if ($sku === '') {
					$sku = 'SKU-' . (int)$product['product_id'];
				}

				$key = strtoupper($sku) . '|' . strtoupper(trim((string)$product['name']));

				if (!isset($lines[$key])) {
					$lines[$key] = [
						'sku'      => $sku,
						'name'     => (string)$product['name'],
						'quantity' => 0
					];
				}

				$lines[$key]['quantity'] += (int)$product['quantity'];
			}
		}

		uasort($lines, static function (array $a, array $b): int {
			return strcasecmp($a['sku'], $b['sku']);
		});

		return [
			'store'       => (string)$this->config->get('config_name'),
			'order_codes' => $order_codes,
			'products'    => array_values($lines)
		];
	}

	/**
	 * Printable pick list for selected orders
	 */
	public function pickList(): void {
		$this->load->language('sale/order');

		$pick = $this->getPickListData();

		$data['title'] = $this->language->get('text_print_pick_list');
		$data['base'] = HTTP_SERVER;
		$data['store'] = $pick['store'];
		$data['order_codes'] = implode(', ', $pick['order_codes']);
		$data['products'] = $pick['products'];
		$data['text_for'] = $this->language->get('text_pick_list_for');
		$data['text_orders'] = $this->language->get('text_pick_list_orders');
		$data['column_sku'] = $this->language->get('column_sku');
		$data['column_item'] = $this->language->get('column_item');
		$data['column_qty'] = $this->language->get('column_qty');
		$data['text_no_results'] = $this->language->get('text_no_results');

		$this->response->setOutput($this->load->view('sale/order_picklist', $data));
	}

	/**
	 * CSV pick list for selected orders
	 */
	public function pickListCsv(): void {
		$this->load->language('sale/order');

		$pick = $this->getPickListData();

		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename="pick-list-' . date('Y-m-d') . '.csv"');

		$out = fopen('php://output', 'w');

		if ($out === false) {
			return;
		}

		fputcsv($out, ['For', $pick['store']]);
		fputcsv($out, ['Order #s', implode(', ', $pick['order_codes'])]);
		fputcsv($out, []);
		fputcsv($out, ['SKU', 'Item', 'Qty.']);

		foreach ($pick['products'] as $row) {
			fputcsv($out, [$row['sku'], $row['name'], $row['quantity']]);
		}

		fclose($out);
		exit;
	}

	/**
	 * Set expected ship date for selected orders
	 */
	public function shipDate(): void {
		$this->load->language('sale/order');

		$json = [];

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$selected = $this->request->post['selected'] ?? [];

		if (!is_array($selected)) {
			$selected = $selected !== '' && $selected !== null ? [$selected] : [];
		}

		$ship_date = trim((string)($this->request->post['ship_date'] ?? ''));

		// Accept YYYY-MM-DD or DD-MM-YYYY from browser locales
		if (preg_match('/^(\d{2})-(\d{2})-(\d{4})$/', $ship_date, $m)) {
			$ship_date = $m[3] . '-' . $m[2] . '-' . $m[1];
		}

		if (!$json && !$selected) {
			$json['error'] = 'Select at least one order.';
		}

		if (!$json && ($ship_date === '' || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $ship_date))) {
			$json['error'] = 'Enter a valid expected ship date.';
		}

		if (!$json) {
			try {
				$updated = 0;

				foreach ($selected as $order_id) {
					$query = $this->db->query("SELECT `expected_ship_date` FROM `" . DB_PREFIX . "order` WHERE `order_id` = '" . (int)$order_id . "'");
					$existing = $query->row['expected_ship_date'] ?? '';

					if ($existing && $existing !== '0000-00-00') {
						continue;
					}

					$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `expected_ship_date` = '" . $this->db->escape($ship_date) . "', `date_modified` = NOW() WHERE `order_id` = '" . (int)$order_id . "' AND (`expected_ship_date` IS NULL OR `expected_ship_date` = '0000-00-00')");
					$updated++;
				}

				if (!$updated) {
					$json['error'] = 'Ship date is already set for the selected order(s).';
				} else {
					$json['success'] = 'Expected ship date set for ' . $updated . ' order(s).';
				}
			} catch (\Throwable $e) {
				$json['error'] = 'Could not update ship date. Please refresh and try again.';
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Mark selected orders as shipped today
	 */
	public function shipOrders(): void {
		$this->load->language('sale/order');

		$json = [];

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$selected = $this->request->post['selected'] ?? [];

		if (!is_array($selected)) {
			$selected = $selected !== '' && $selected !== null ? [$selected] : [];
		}

		$shipped_date = trim((string)($this->request->post['shipped_date'] ?? date('Y-m-d')));

		if (preg_match('/^(\d{2})-(\d{2})-(\d{4})$/', $shipped_date, $m)) {
			$shipped_date = $m[3] . '-' . $m[2] . '-' . $m[1];
		}

		if (!$json && !$selected) {
			$json['error'] = 'Select at least one order.';
		}

		if (!$json && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $shipped_date)) {
			$json['error'] = 'Enter a valid shipped date.';
		}

		if (!$json) {
			$complete = array_map('intval', (array)$this->config->get('config_complete_status'));
			$status_id = $complete ? $complete[0] : (int)$this->config->get('config_order_status_id');

			foreach ($selected as $order_id) {
				$order_id = (int)$order_id;

				$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `shipped_date` = '" . $this->db->escape($shipped_date) . "', `order_status_id` = '" . (int)$status_id . "', `date_modified` = NOW() WHERE `order_id` = '" . $order_id . "'");
				$this->db->query("INSERT INTO `" . DB_PREFIX . "order_history` SET `order_id` = '" . $order_id . "', `order_status_id` = '" . (int)$status_id . "', `notify` = '0', `comment` = '" . $this->db->escape('Marked shipped on ' . $shipped_date) . "', `date_added` = NOW()");
			}

			$json['success'] = 'Marked ' . count($selected) . ' order(s) as shipped.';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Faire-style New invoice / create order page
	 */
	public function create(): void {
		$this->document->setTitle('New invoice');

		$token = 'user_token=' . $this->session->data['user_token'];

		$data['heading_title'] = 'New invoice';
		$data['back'] = $this->url->link('sale/order', $token);
		$data['save'] = $this->url->link('sale/order.createSave', $token);
		$data['customer_autocomplete'] = $this->url->link('customer/customer.autocomplete', $token);
		$data['product_autocomplete'] = $this->url->link('sale/order.createProduct', $token);
		$data['user_token'] = $this->session->data['user_token'];
		$data['currency_code'] = (string)$this->config->get('config_currency');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/invoice', $data));
	}

	/**
	 * Product autocomplete for New invoice
	 */
	public function createProduct(): void {
		$json = [];
		$filter = trim((string)($this->request->get['filter_name'] ?? ''));

		if ($filter !== '') {
			$this->load->model('catalog/product');
			$this->load->model('tool/image');

			$results = $this->model_catalog_product->getProducts([
				'filter_name' => $filter,
				'start'       => 0,
				'limit'       => 12
			]);

			if (!$results) {
				$results = $this->model_catalog_product->getProducts([
					'filter_model' => $filter,
					'start'        => 0,
					'limit'        => 12
				]);
			}

			foreach ($results as $result) {
				$image = (!empty($result['image']) && is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8')))
					? $this->model_tool_image->resize($result['image'], 56, 56)
					: $this->model_tool_image->resize('no_image.png', 56, 56);

				$json[] = [
					'product_id'  => (int)$result['product_id'],
					'name'        => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'model'       => (string)$result['model'],
					'sku'         => (string)($result['sku'] ?? $result['model']),
					'quantity'    => (int)$result['quantity'],
					'status'      => ((int)$result['status'] ? 'Published' : 'Draft'),
					'price'       => (float)$result['price'],
					'price_text'  => $this->currency->format($result['price'], $this->config->get('config_currency')),
					'image'       => $image
				];
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Save New invoice as an order
	 */
	public function createSave(): void {
		$json = [];

		if (!$this->user->hasPermission('modify', 'sale/order')) {
			$json['error'] = 'You do not have permission to create orders.';
		}

		$customer_id = (int)($this->request->post['customer_id'] ?? 0);
		$products = json_decode(html_entity_decode((string)($this->request->post['products'] ?? '[]'), ENT_QUOTES, 'UTF-8'), true);
		$note = trim((string)($this->request->post['note'] ?? ''));
		$ship_mode = (string)($this->request->post['ship_mode'] ?? 'now');
		$ship_date = trim((string)($this->request->post['ship_date'] ?? ''));
		$send_email = !empty($this->request->post['send_email']);

		if (!$json && !$customer_id) {
			$json['error'] = 'Select a customer to continue.';
		}

		if (!$json && (!is_array($products) || !$products)) {
			$json['error'] = 'Add at least one item to the invoice.';
		}

		if (!$json) {
			$this->load->model('customer/customer');
			$customer = $this->model_customer_customer->getCustomer($customer_id);

			if (!$customer) {
				$json['error'] = 'Customer not found.';
			}
		}

		if (!$json) {
			$addresses = $this->model_customer_customer->getAddresses($customer_id);
			$address = $addresses[0] ?? [];

			$lines = [];
			$subtotal = 0.0;

			$this->load->model('catalog/product');

			foreach ($products as $row) {
				$product_id = (int)($row['product_id'] ?? 0);
				$qty = max(1, (int)($row['quantity'] ?? 1));
				$info = $product_id ? $this->model_catalog_product->getProduct($product_id) : [];

				if ($product_id && !$info) {
					continue;
				}

				$name = $info ? $info['name'] : trim((string)($row['name'] ?? 'Custom item'));
				$model = $info ? $info['model'] : trim((string)($row['model'] ?? 'CUSTOM'));
				$price = isset($row['price']) ? (float)$row['price'] : (float)($info['price'] ?? 0);
				$total = $price * $qty;
				$subtotal += $total;

				$lines[] = [
					'product_id' => $product_id,
					'name'       => $name,
					'model'      => $model,
					'quantity'   => $qty,
					'price'      => $price,
					'total'      => $total,
					'tax'        => 0,
					'reward'     => 0
				];
			}

			if (!$lines) {
				$json['error'] = 'Add at least one valid product.';
			} else {
				$comment = $note;

				if ($ship_mode === 'future' && $ship_date !== '') {
					$comment = trim($comment . "\nShip date: " . $ship_date);
				} elseif ($ship_mode === 'now') {
					$comment = trim($comment . "\nShip now");
				}

				$payment_method = json_encode(['name' => 'Invoice', 'code' => 'invoice']);
				$shipping_method = json_encode(['name' => 'Wholesale shipping', 'code' => 'wholesale.shipping', 'cost' => 0, 'tax_class_id' => 0]);

				$processing = array_map('intval', (array)$this->config->get('config_processing_status'));
				$order_status_id = $processing ? $processing[0] : 1;

				$this->db->query("INSERT INTO `" . DB_PREFIX . "order` SET
					`subscription_id` = '0',
					`invoice_prefix` = '" . $this->db->escape((string)$this->config->get('config_invoice_prefix')) . "',
					`store_id` = '0',
					`store_name` = '" . $this->db->escape((string)$this->config->get('config_name')) . "',
					`store_url` = '" . $this->db->escape(defined('HTTP_CATALOG') ? HTTP_CATALOG : '') . "',
					`customer_id` = '" . (int)$customer_id . "',
					`customer_group_id` = '" . (int)$customer['customer_group_id'] . "',
					`firstname` = '" . $this->db->escape($customer['firstname']) . "',
					`lastname` = '" . $this->db->escape($customer['lastname']) . "',
					`email` = '" . $this->db->escape($customer['email']) . "',
					`telephone` = '" . $this->db->escape($customer['telephone']) . "',
					`custom_field` = '" . $this->db->escape(json_encode([])) . "',
					`payment_address_id` = '" . (int)($address['address_id'] ?? 0) . "',
					`payment_firstname` = '" . $this->db->escape($address['firstname'] ?? $customer['firstname']) . "',
					`payment_lastname` = '" . $this->db->escape($address['lastname'] ?? $customer['lastname']) . "',
					`payment_company` = '" . $this->db->escape($address['company'] ?? '') . "',
					`payment_address_1` = '" . $this->db->escape($address['address_1'] ?? '') . "',
					`payment_address_2` = '" . $this->db->escape($address['address_2'] ?? '') . "',
					`payment_city` = '" . $this->db->escape($address['city'] ?? '') . "',
					`payment_postcode` = '" . $this->db->escape($address['postcode'] ?? '') . "',
					`payment_country` = '" . $this->db->escape($address['country'] ?? '') . "',
					`payment_country_id` = '" . (int)($address['country_id'] ?? 0) . "',
					`payment_zone` = '" . $this->db->escape($address['zone'] ?? '') . "',
					`payment_zone_id` = '" . (int)($address['zone_id'] ?? 0) . "',
					`payment_address_format` = '',
					`payment_custom_field` = '" . $this->db->escape(json_encode([])) . "',
					`payment_method` = '" . $this->db->escape($payment_method) . "',
					`shipping_address_id` = '" . (int)($address['address_id'] ?? 0) . "',
					`shipping_firstname` = '" . $this->db->escape($address['firstname'] ?? $customer['firstname']) . "',
					`shipping_lastname` = '" . $this->db->escape($address['lastname'] ?? $customer['lastname']) . "',
					`shipping_company` = '" . $this->db->escape($address['company'] ?? '') . "',
					`shipping_address_1` = '" . $this->db->escape($address['address_1'] ?? '') . "',
					`shipping_address_2` = '" . $this->db->escape($address['address_2'] ?? '') . "',
					`shipping_city` = '" . $this->db->escape($address['city'] ?? '') . "',
					`shipping_postcode` = '" . $this->db->escape($address['postcode'] ?? '') . "',
					`shipping_country` = '" . $this->db->escape($address['country'] ?? '') . "',
					`shipping_country_id` = '" . (int)($address['country_id'] ?? 0) . "',
					`shipping_zone` = '" . $this->db->escape($address['zone'] ?? '') . "',
					`shipping_zone_id` = '" . (int)($address['zone_id'] ?? 0) . "',
					`shipping_address_format` = '',
					`shipping_custom_field` = '" . $this->db->escape(json_encode([])) . "',
					`shipping_method` = '" . $this->db->escape($shipping_method) . "',
					`comment` = '" . $this->db->escape($comment) . "',
					`total` = '" . (float)$subtotal . "',
					`order_status_id` = '" . (int)$order_status_id . "',
					`affiliate_id` = '0',
					`commission` = '0',
					`marketing_id` = '0',
					`tracking` = '',
					`language_id` = '" . (int)$this->config->get('config_language_id') . "',
					`language_code` = '" . $this->db->escape((string)$this->config->get('config_language')) . "',
					`currency_id` = '" . (int)$this->currency->getId($this->config->get('config_currency')) . "',
					`currency_code` = '" . $this->db->escape((string)$this->config->get('config_currency')) . "',
					`currency_value` = '" . (float)$this->currency->getValue($this->config->get('config_currency')) . "',
					`ip` = '" . $this->db->escape($this->request->server['REMOTE_ADDR'] ?? '') . "',
					`forwarded_ip` = '',
					`user_agent` = '',
					`accept_language` = '',
					`date_added` = NOW(),
					`date_modified` = NOW()");

				$order_id = (int)$this->db->getLastId();

				foreach ($lines as $line) {
					$this->db->query("INSERT INTO `" . DB_PREFIX . "order_product` SET
						`order_id` = '" . (int)$order_id . "',
						`product_id` = '" . (int)$line['product_id'] . "',
						`master_id` = '0',
						`name` = '" . $this->db->escape($line['name']) . "',
						`model` = '" . $this->db->escape($line['model']) . "',
						`quantity` = '" . (int)$line['quantity'] . "',
						`price` = '" . (float)$line['price'] . "',
						`total` = '" . (float)$line['total'] . "',
						`tax` = '0',
						`reward` = '0'");
				}

				$this->db->query("INSERT INTO `" . DB_PREFIX . "order_total` SET `order_id` = '" . (int)$order_id . "', `extension` = 'opencart', `code` = 'sub_total', `title` = 'Sub-Total', `value` = '" . (float)$subtotal . "', `sort_order` = '1'");
				$this->db->query("INSERT INTO `" . DB_PREFIX . "order_total` SET `order_id` = '" . (int)$order_id . "', `extension` = 'opencart', `code` = 'total', `title` = 'Total', `value` = '" . (float)$subtotal . "', `sort_order` = '9'");

				$this->db->query("INSERT INTO `" . DB_PREFIX . "order_history` SET `order_id` = '" . (int)$order_id . "', `order_status_id` = '" . (int)$order_status_id . "', `notify` = '" . ($send_email ? 1 : 0) . "', `comment` = '" . $this->db->escape($send_email ? 'Invoice emailed to customer.' : 'Invoice created from admin.') . "', `date_added` = NOW()");

				$json['success'] = true;
				$json['order_id'] = $order_id;
				$json['redirect'] = $this->url->link('sale/order.info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * @return array<int, int>
	 */
	private function getCanceledStatusIds(): array {
		$ids = [];

		try {
			$query = $this->db->query("SELECT `order_status_id`, `name` FROM `" . DB_PREFIX . "order_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

			foreach ($query->rows as $row) {
				$name = strtolower((string)$row['name']);

				if (str_contains($name, 'cancel') || str_contains($name, 'void') || str_contains($name, 'denied') || str_contains($name, 'refund')) {
					$ids[] = (int)$row['order_status_id'];
				}
			}
		} catch (\Throwable $e) {
		}

		return $ids;
	}
}

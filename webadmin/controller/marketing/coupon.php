<?php
namespace Opencart\Admin\Controller\Marketing;
/**
 * Class Coupon
 *
 * @package Opencart\Admin\Controller\Marketing
 */
class Coupon extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('marketing/coupon');

		$this->document->setTitle($this->language->get('heading_title'));

		$url = $this->getUrl();

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketing/coupon', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['add'] = $this->url->link('marketing/coupon.form', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('marketing/coupon.delete', 'user_token=' . $this->session->data['user_token']);
		$data['store'] = HTTP_CATALOG;

		$filter_tab = $this->request->get['filter_tab'] ?? 'all';
		$filter_search = $this->request->get['filter_search'] ?? '';
		$sort = $this->request->get['sort'] ?? 'date_start';
		$order = $this->request->get['order'] ?? 'DESC';

		$data['filter_tab'] = $filter_tab;
		$data['filter_search'] = $filter_search;
		$data['sort'] = $sort;
		$data['order'] = $order;

		$this->load->model('marketing/coupon');

		$data['counts'] = [
			'all'       => $this->model_marketing_coupon->getTotalCoupons(),
			'active'    => $this->model_marketing_coupon->getTotalCoupons(['filter_tab' => 'active']),
			'scheduled' => $this->model_marketing_coupon->getTotalCoupons(['filter_tab' => 'scheduled']),
			'completed' => $this->model_marketing_coupon->getTotalCoupons(['filter_tab' => 'completed'])
		];

		$base = 'user_token=' . $this->session->data['user_token'];
		$search_q = $filter_search !== '' ? '&filter_search=' . urlencode($filter_search) : '';
		$sort_q = '&sort=' . urlencode($sort) . '&order=' . urlencode($order);

		$data['tabs'] = [
			['key' => 'all', 'label' => sprintf($this->language->get('text_tab_all'), $data['counts']['all']), 'href' => $this->url->link('marketing/coupon', $base . $search_q . $sort_q), 'active' => $filter_tab === 'all'],
			['key' => 'active', 'label' => sprintf($this->language->get('text_tab_active'), $data['counts']['active']), 'href' => $this->url->link('marketing/coupon', $base . '&filter_tab=active' . $search_q . $sort_q), 'active' => $filter_tab === 'active'],
			['key' => 'scheduled', 'label' => sprintf($this->language->get('text_tab_scheduled'), $data['counts']['scheduled']), 'href' => $this->url->link('marketing/coupon', $base . '&filter_tab=scheduled' . $search_q . $sort_q), 'active' => $filter_tab === 'scheduled'],
			['key' => 'completed', 'label' => sprintf($this->language->get('text_tab_completed'), $data['counts']['completed']), 'href' => $this->url->link('marketing/coupon', $base . '&filter_tab=completed' . $search_q . $sort_q), 'active' => $filter_tab === 'completed']
		];

		$date_end = date('Y-m-d');
		$date_start = date('Y-m-d', strtotime('-12 months'));
		$overview = $this->model_marketing_coupon->getOverview($date_start, $date_end);

		$data['overview'] = [
			'period_label'   => $this->language->get('text_past_12_months'),
			'date_range'     => date('M j, Y', strtotime($date_start)) . ' – ' . date('M j, Y', strtotime($date_end)),
			'promo_sales'    => $this->currency->format($overview['promo_sales'], $this->config->get('config_currency')),
			'promo_share'    => sprintf($this->language->get('text_promo_share'), $overview['sales_share']),
			'promo_orders'   => number_format($overview['promo_orders']),
			'new_customers'  => sprintf($this->language->get('text_new_customers'), number_format($overview['new_customers'])),
			'avg_order'      => $this->currency->format($overview['avg_order'], $this->config->get('config_currency')),
			'product_visits' => number_format($overview['product_visits']),
			'updated'        => sprintf($this->language->get('text_last_updated'), date('M j, g:i A'))
		];

		$data['sort_label'] = $this->language->get('text_sort_start');
		$data['list'] = $this->getList();
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/coupon', $data));
	}

	/**
	 * Build shared query string for list filters.
	 *
	 * @return string
	 */
	private function getUrl(): string {
		$url = '';

		if (isset($this->request->get['filter_tab'])) {
			$url .= '&filter_tab=' . urlencode((string)$this->request->get['filter_tab']);
		}

		if (isset($this->request->get['filter_search'])) {
			$url .= '&filter_search=' . urlencode((string)$this->request->get['filter_search']);
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

		return $url;
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('marketing/coupon');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		$sort = (string)($this->request->get['sort'] ?? 'date_start');
		$order = (string)($this->request->get['order'] ?? 'DESC');
		$page = max(1, (int)($this->request->get['page'] ?? 1));
		$filter_tab = (string)($this->request->get['filter_tab'] ?? 'all');
		$filter_search = (string)($this->request->get['filter_search'] ?? '');

		$url = $this->getUrl();

		$data['action'] = $this->url->link('marketing/coupon.list', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('marketing/coupon.delete', 'user_token=' . $this->session->data['user_token']);

		$data['coupons'] = [];

		$filter_data = [
			'filter_tab'    => $filter_tab,
			'filter_search' => $filter_search,
			'sort'          => $sort,
			'order'         => $order,
			'start'         => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit'         => $this->config->get('config_pagination_admin')
		];

		$this->load->model('marketing/coupon');

		$results = $this->model_marketing_coupon->getCoupons($filter_data);

		foreach ($results as $result) {
			$lifecycle = $this->model_marketing_coupon->getLifecycleStatus($result);

			if ((int)$result['product_total'] > 0) {
				$type_label = $this->language->get('text_type_product');
			} elseif ((int)$result['category_total'] > 0) {
				$type_label = $this->language->get('text_type_collection');
			} else {
				$type_label = $this->language->get('text_type_shopwide');
			}

			$start_ts = strtotime($result['date_start']);
			$end_ts = strtotime($result['date_end']);
			$dates = '';

			if ($start_ts && $end_ts) {
				if (date('Y', $start_ts) === date('Y', $end_ts)) {
					$dates = date('M j', $start_ts) . ' – ' . date('M j, Y', $end_ts);
				} else {
					$dates = date('M j, Y', $start_ts) . ' – ' . date('M j, Y', $end_ts);
				}
			}

			$status_map = [
				'active'    => $this->language->get('text_status_active'),
				'scheduled' => $this->language->get('text_status_scheduled'),
				'completed' => $this->language->get('text_status_completed')
			];

			$data['coupons'][] = [
				'coupon_id'   => $result['coupon_id'],
				'name'        => $result['name'],
				'code'        => $result['code'],
				'dates'       => $dates,
				'type_label'  => $type_label,
				'sales'       => $this->currency->format((float)$result['sales_total'], $this->config->get('config_currency')),
				'orders'      => number_format((int)$result['order_total']),
				'lifecycle'   => $lifecycle,
				'status_label'=> $status_map[$lifecycle] ?? $lifecycle,
				'edit'        => $this->url->link('marketing/coupon.form', 'user_token=' . $this->session->data['user_token'] . '&coupon_id=' . $result['coupon_id'] . $url)
			];
		}

		$coupon_total = $this->model_marketing_coupon->getTotalCoupons([
			'filter_tab'    => $filter_tab,
			'filter_search' => $filter_search
		]);

		$page_url = $url;

		if (!str_contains($page_url, 'sort=')) {
			$page_url .= '&sort=' . urlencode($sort);
		}

		if (!str_contains($page_url, 'order=')) {
			$page_url .= '&order=' . urlencode($order);
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $coupon_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('marketing/coupon.list', 'user_token=' . $this->session->data['user_token'] . $page_url . '&page={page}')
		]);

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['user_token'] = $this->session->data['user_token'];

		return $this->load->view('marketing/coupon_list', $data);
	}

	/**
	 * Form
	 *
	 * @return void
	 */
	public function form(): void {
		$this->load->language('marketing/coupon');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['text_form'] = !isset($this->request->get['coupon_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$url = '';

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketing/coupon', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['save'] = $this->url->link('marketing/coupon.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('marketing/coupon', 'user_token=' . $this->session->data['user_token'] . $url);

		if (isset($this->request->get['coupon_id'])) {
			$this->load->model('marketing/coupon');

			$coupon_info = $this->model_marketing_coupon->getCoupon($this->request->get['coupon_id']);
		}

		if (!empty($coupon_info)) {
			$data['coupon_id'] = $coupon_info['coupon_id'];
		} else {
			$data['coupon_id'] = 0;
		}

		if (!empty($coupon_info)) {
			$data['name'] = $coupon_info['name'];
		} else {
			$data['name'] = '';
		}

		if (!empty($coupon_info)) {
			$data['code'] = $coupon_info['code'];
		} else {
			$data['code'] = '';
		}

		if (!empty($coupon_info)) {
			$data['type'] = $coupon_info['type'];
		} else {
			$data['type'] = '';
		}

		if (!empty($coupon_info)) {
			$data['discount'] = $coupon_info['discount'];
		} else {
			$data['discount'] = '';
		}

		if (!empty($coupon_info)) {
			$data['logged'] = $coupon_info['logged'];
		} else {
			$data['logged'] = '';
		}

		if (!empty($coupon_info)) {
			$data['shipping'] = $coupon_info['shipping'];
		} else {
			$data['shipping'] = '';
		}

		if (!empty($coupon_info)) {
			$data['total'] = $coupon_info['total'];
		} else {
			$data['total'] = '';
		}

		// Product
		if (!empty($coupon_info)) {
			$products = $this->model_marketing_coupon->getProducts($coupon_info['coupon_id']);
		} else {
			$products = [];
		}

		$this->load->model('catalog/product');

		$data['coupon_products'] = [];

		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['coupon_products'][] = [
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				];
			}
		}

		// Category
		if (!empty($coupon_info)) {
			$categories = $this->model_marketing_coupon->getCategories($coupon_info['coupon_id']);
		} else {
			$categories = [];
		}

		$this->load->model('catalog/category');

		$data['coupon_categories'] = [];

		foreach ($categories as $category_id) {
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
				$data['coupon_categories'][] = [
					'category_id' => $category_info['category_id'],
					'name'        => ($category_info['path'] ? $category_info['path'] . ' &gt; ' : '') . $category_info['name']
				];
			}
		}

		if (!empty($coupon_info)) {
			$data['date_start'] = ($coupon_info['date_start'] != '0000-00-00' ? $coupon_info['date_start'] : '');
		} else {
			$data['date_start'] = date('Y-m-d', time());
		}

		if (!empty($coupon_info)) {
			$data['date_end'] = ($coupon_info['date_end'] != '0000-00-00' ? $coupon_info['date_end'] : '');
		} else {
			$data['date_end'] = date('Y-m-d', strtotime('+1 month'));
		}

		if (!empty($coupon_info)) {
			$data['uses_total'] = $coupon_info['uses_total'];
		} else {
			$data['uses_total'] = 1;
		}

		if (!empty($coupon_info)) {
			$data['uses_customer'] = $coupon_info['uses_customer'];
		} else {
			$data['uses_customer'] = 1;
		}

		if (!empty($coupon_info)) {
			$data['status'] = $coupon_info['status'];
		} else {
			$data['status'] = true;
		}

		$this->load->model('marketing/coupon');

		$lifecycle = !empty($coupon_info) ? $this->model_marketing_coupon->getLifecycleStatus($coupon_info) : 'scheduled';
		$status_map = [
			'active'    => $this->language->get('text_status_active'),
			'scheduled' => $this->language->get('text_status_scheduled'),
			'completed' => $this->language->get('text_status_completed')
		];

		$data['lifecycle'] = $lifecycle;
		$data['status_label'] = $status_map[$lifecycle] ?? $lifecycle;
		$data['page_title'] = $data['name'] !== '' ? $data['name'] : $this->language->get('text_add');
		$data['updated_label'] = '';

		if (!empty($coupon_info['date_added'])) {
			$data['updated_label'] = sprintf($this->language->get('text_last_updated_detail'), date('F j, Y', strtotime($coupon_info['date_added'])) . ' at ' . date('g:i A', strtotime($coupon_info['date_added'])));
		}

		$stats = !empty($coupon_info) ? $this->model_marketing_coupon->getPromotionStats((int)$coupon_info['coupon_id']) : [
			'sales' => 0, 'orders' => 0, 'avg_order' => 0, 'avg_discount' => 0, 'units' => 0, 'product_visits' => 0
		];

		$data['summary'] = [
			'sales'          => $this->currency->format($stats['sales'], $this->config->get('config_currency')),
			'orders'         => number_format($stats['orders']),
			'avg_order'      => $this->currency->format($stats['avg_order'], $this->config->get('config_currency')),
			'avg_discount'   => $this->currency->format($stats['avg_discount'], $this->config->get('config_currency')),
			'units'          => number_format($stats['units']),
			'product_visits' => number_format($stats['product_visits'])
		];

		$data['promo_orders'] = [];

		if (!empty($coupon_info)) {
			$this->load->model('tool/image');

			foreach ($this->model_marketing_coupon->getPromotionOrders((int)$coupon_info['coupon_id'], 0, 25) as $order) {
				$thumbs = [];
				$extra = 0;

				foreach ($order['products'] as $index => $product) {
					if ($index < 3) {
						$image = !empty($product['image']) && is_file(DIR_IMAGE . html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'))
							? $this->model_tool_image->resize(html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'), 48, 48)
							: $this->model_tool_image->resize('no_image.png', 48, 48);

						$thumbs[] = [
							'thumb' => $image,
							'name'  => $product['name']
						];
					} else {
						$extra++;
					}
				}

				$data['promo_orders'][] = [
					'order_id'   => $order['order_id'],
					'order_code' => '#' . $order['order_id'],
					'view'       => $this->url->link('sale/order.info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order['order_id']),
					'customer'   => $order['customer'],
					'customer_href' => $order['customer_id'] ? $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $order['customer_id']) : '',
					'thumbs'     => $thumbs,
					'extra'      => $extra,
					'placed'     => date('F j, Y', strtotime($order['date_added'])),
					'discount'   => $this->currency->format($order['amount'], $this->config->get('config_currency')),
					'subtotal'   => $this->currency->format($order['subtotal'], $this->config->get('config_currency'))
				];
			}
		}

		$data['end'] = $this->url->link('marketing/coupon.end', 'user_token=' . $this->session->data['user_token']);
		$data['can_end'] = !empty($coupon_info) && $lifecycle === 'active';
		$data['is_new'] = empty($coupon_info);
		$data['history'] = $this->getHistory();
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/coupon_form', $data));
	}

	/**
	 * End an active promotion.
	 *
	 * @return void
	 */
	public function end(): void {
		$this->load->language('marketing/coupon');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/coupon')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$coupon_id = (int)($this->request->post['coupon_id'] ?? 0);

		if (!$json && !$coupon_id) {
			$json['error'] = $this->language->get('error_coupon');
		}

		if (!$json) {
			$this->load->model('marketing/coupon');
			$this->model_marketing_coupon->endPromotion($coupon_id);
			$json['success'] = $this->language->get('text_ended');
			$json['redirect'] = $this->url->link('marketing/coupon.form', 'user_token=' . $this->session->data['user_token'] . '&coupon_id=' . $coupon_id, true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Save
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('marketing/coupon');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/coupon')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		$required = [
			'coupon_id'     => 0,
			'name'          => '',
			'code'          => '',
			'discount'      => 0.0,
			'type'          => '',
			'total'         => 0.0,
			'logged'        => 0,
			'shipping'      => 0,
			'date_start'    => '',
			'date_end'      => '',
			'uses_total'    => 0,
			'uses_customer' => 0,
			'status'        => 0
		];

		$post_info = $this->request->post + $required;

		if (!oc_validate_length($post_info['name'], 3, 128)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!oc_validate_length($post_info['code'], 3, 20)) {
			$json['error']['code'] = $this->language->get('error_code');
		}

		$this->load->model('marketing/coupon');

		$coupon_info = $this->model_marketing_coupon->getCouponByCode($post_info['code']);

		if ($coupon_info && (!$post_info['coupon_id'] || ($coupon_info['coupon_id'] != (int)$post_info['coupon_id']))) {
			$json['error']['code'] = $this->language->get('error_exists');
		}

		if (!$json) {
			if (!$post_info['coupon_id']) {
				$json['coupon_id'] = $this->model_marketing_coupon->addCoupon($post_info);
			} else {
				$this->model_marketing_coupon->editCoupon($post_info['coupon_id'], $post_info);
			}

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
		$this->load->language('marketing/coupon');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'marketing/coupon')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('marketing/coupon');

			foreach ($selected as $coupon_id) {
				$this->model_marketing_coupon->deleteCoupon($coupon_id);
			}

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
		$this->load->language('marketing/coupon');

		$this->response->setOutput($this->getHistory());
	}

	/**
	 * Get History
	 *
	 * @return string
	 */
	public function getHistory(): string {
		if (isset($this->request->get['coupon_id'])) {
			$coupon_id = (int)$this->request->get['coupon_id'];
		} else {
			$coupon_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'marketing/coupon.history') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		$this->load->model('marketing/coupon');

		$data['histories'] = [];

		$results = $this->model_marketing_coupon->getHistories($coupon_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$data['histories'][] = [
				'order_id'   => $result['order_id'],
				'customer'   => $result['customer'],
				'amount'     => $result['amount'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			];
		}

		$history_total = $this->model_marketing_coupon->getTotalHistories($coupon_id);

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $history_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('marketing/coupon.history', 'user_token=' . $this->session->data['user_token'] . '&coupon_id=' . $coupon_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($history_total - $limit)) ? $history_total : ((($page - 1) * $limit) + $limit), $history_total, ceil($history_total / $limit));

		return $this->load->view('marketing/coupon_history', $data);
	}
}

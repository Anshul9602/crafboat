<?php
namespace Opencart\Admin\Controller\Marketing;
/**
 * Class Marketing
 *
 * @package Opencart\Admin\Controller\Marketing
 */
class Marketing extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('marketing/marketing');
		$this->load->model('marketing/automation');

		$this->document->setTitle($this->language->get('heading_title'));

		$filter_category = (string)($this->request->get['filter_category'] ?? 'all');

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'])
		];

		$overview = $this->model_marketing_automation->getOverview();
		$active = $overview['active'];
		$total = max(1, $overview['total']);
		$progress = (int)round(($active / $total) * 100);

		$data['setup'] = [
			'active'       => $active,
			'total'        => $overview['total'],
			'progress'     => $progress,
			'label'        => sprintf($this->language->get('text_setup_count'), $active, $overview['total']),
			'nearly_done'  => $active >= ($overview['total'] - 3),
			'complete'     => $active >= $overview['total'],
			'continue'     => $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . '&filter_category=all#automations')
		];

		$data['summary'] = [
			'active'     => number_format($overview['active']),
			'delivered'  => number_format($overview['delivered']),
			'click_rate' => number_format($overview['click_rate'], 1) . '%',
			'revenue'    => $this->currency->format($overview['revenue'], $this->config->get('config_currency'))
		];

		$counts = [
			'all'     => $this->model_marketing_automation->getTotalAutomations(),
			'convert' => $this->model_marketing_automation->getTotalAutomations(['filter_category' => 'convert']),
			'reorder' => $this->model_marketing_automation->getTotalAutomations(['filter_category' => 'reorder']),
			'loyalty' => $this->model_marketing_automation->getTotalAutomations(['filter_category' => 'loyalty'])
		];

		$base = 'user_token=' . $this->session->data['user_token'];

		$data['tabs'] = [
			['key' => 'all', 'label' => sprintf($this->language->get('text_tab_all'), $counts['all']), 'href' => $this->url->link('marketing/marketing', $base), 'active' => $filter_category === 'all'],
			['key' => 'convert', 'label' => sprintf($this->language->get('text_tab_convert'), $counts['convert']), 'href' => $this->url->link('marketing/marketing', $base . '&filter_category=convert'), 'active' => $filter_category === 'convert'],
			['key' => 'reorder', 'label' => sprintf($this->language->get('text_tab_reorder'), $counts['reorder']), 'href' => $this->url->link('marketing/marketing', $base . '&filter_category=reorder'), 'active' => $filter_category === 'reorder'],
			['key' => 'loyalty', 'label' => sprintf($this->language->get('text_tab_loyalty'), $counts['loyalty']), 'href' => $this->url->link('marketing/marketing', $base . '&filter_category=loyalty'), 'active' => $filter_category === 'loyalty']
		];

		$data['filter_category'] = $filter_category;
		$data['list'] = $this->getList();
		$data['toggle'] = $this->url->link('marketing/marketing.toggle', 'user_token=' . $this->session->data['user_token']);
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/marketing', $data));
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('marketing/marketing');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Toggle automation on/off
	 *
	 * @return void
	 */
	public function toggle(): void {
		$this->load->language('marketing/marketing');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/marketing')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$automation_id = (int)($this->request->post['automation_id'] ?? 0);
		$status = !empty($this->request->post['status']);

		if (!$json && !$automation_id) {
			$json['error'] = $this->language->get('error_automation');
		}

		if (!$json) {
			$this->load->model('marketing/automation');
			$this->model_marketing_automation->setStatus($automation_id, $status);
			$json['success'] = $this->language->get('text_success');
			$json['status'] = $status ? 1 : 0;
			$json['status_label'] = $status ? $this->language->get('text_status_active') : $this->language->get('text_status_off');
			$json['lifecycle'] = $status ? 'active' : 'off';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		$this->load->language('marketing/marketing');
		$this->load->model('marketing/automation');

		$filter_category = (string)($this->request->get['filter_category'] ?? 'all');

		$data['automations'] = [];

		$results = $this->model_marketing_automation->getAutomations([
			'filter_category' => $filter_category
		]);

		foreach ($results as $result) {
			$delivered = (int)$result['delivered'];
			$opens = (int)$result['opens'];
			$clicks = (int)$result['clicks'];
			$active = !empty($result['status']);

			$data['automations'][] = [
				'automation_id' => $result['automation_id'],
				'name'          => $result['name'],
				'description'   => $result['description'],
				'status'        => $active ? 1 : 0,
				'lifecycle'     => $active ? 'active' : 'off',
				'status_label'  => $active ? $this->language->get('text_status_active') : $this->language->get('text_status_off'),
				'delivered'     => number_format($delivered),
				'open_rate'     => $delivered > 0 ? number_format(($opens / $delivered) * 100, 0) . '%' : '0%',
				'click_rate'    => $delivered > 0 ? number_format(($clicks / $delivered) * 100, 2) . '%' : '0.00%'
			];
		}

		$data['user_token'] = $this->session->data['user_token'];

		return $this->load->view('marketing/marketing_list', $data);
	}

	/**
	 * Form
	 *
	 * @return void
	 */
	public function form(): void {
		$this->load->language('marketing/marketing');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['text_form'] = !isset($this->request->get['marketing_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
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
			'href' => $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['save'] = $this->url->link('marketing/marketing.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('marketing/marketing', 'user_token=' . $this->session->data['user_token'] . $url);

		if (isset($this->request->get['marketing_id'])) {
			$this->load->model('marketing/marketing');

			$marketing_info = $this->model_marketing_marketing->getMarketing($this->request->get['marketing_id']);
		}

		if (!empty($marketing_info)) {
			$data['marketing_id'] = $marketing_info['marketing_id'];
		} else {
			$data['marketing_id'] = 0;
		}

		$data['store'] = HTTP_CATALOG;

		if (!empty($marketing_info)) {
			$data['name'] = $marketing_info['name'];
		} else {
			$data['name'] = '';
		}

		if (!empty($marketing_info)) {
			$data['description'] = $marketing_info['description'];
		} else {
			$data['description'] = '';
		}

		if (!empty($marketing_info)) {
			$data['code'] = $marketing_info['code'];
		} else {
			$data['code'] = uniqid();
		}

		$data['report'] = $this->getReport();

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/marketing_form', $data));
	}

	/**
	 * Save
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('marketing/marketing');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/marketing')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		$required = [
			'marketing_id' => 0,
			'name'         => '',
			'description'  => '',
			'code'         => ''
		];

		$post_info = $this->request->post + $required;

		if (!oc_validate_length($post_info['name'], 1, 32)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$post_info['code']) {
			$json['error']['code'] = $this->language->get('error_code');
		}

		$this->load->model('marketing/marketing');

		$marketing_info = $this->model_marketing_marketing->getMarketingByCode($post_info['code']);

		if ($marketing_info && (!$post_info['marketing_id'] || ($post_info['marketing_id'] != $marketing_info['marketing_id']))) {
			$json['error']['code'] = $this->language->get('error_exists');
		}

		if (!$json) {
			if (!$post_info['marketing_id']) {
				$json['marketing_id'] = $this->model_marketing_marketing->addMarketing($post_info);
			} else {
				$this->model_marketing_marketing->editMarketing($post_info['marketing_id'], $post_info);
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
		$this->load->language('marketing/marketing');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'marketing/marketing')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('marketing/marketing');

			foreach ($selected as $marketing_id) {
				$this->model_marketing_marketing->deleteMarketing($marketing_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Report
	 *
	 * @return void
	 */
	public function report(): void {
		$this->load->language('marketing/marketing');

		$this->response->setOutput($this->getReport());
	}

	/**
	 * Get Report
	 *
	 * @return string
	 */
	public function getReport(): string {
		if (isset($this->request->get['marketing_id'])) {
			$marketing_id = (int)$this->request->get['marketing_id'];
		} else {
			$marketing_id = 0;
		}

		if (isset($this->request->get['page']) && $this->request->get['route'] == 'marketing/marketing.report') {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 10;

		$data['reports'] = [];

		// Marketing
		$this->load->model('marketing/marketing');

		// Customer
		$this->load->model('customer/customer');

		// Store
		$this->load->model('setting/store');

		$results = $this->model_marketing_marketing->getReports($marketing_id, ($page - 1) * $limit, $limit);

		foreach ($results as $result) {
			$store_info = $this->model_setting_store->getStore($result['store_id']);

			if ($store_info) {
				$store = $store_info['name'];
			} elseif (!$result['store_id']) {
				$store = $this->config->get('config_name');
			} else {
				$store = '';
			}

			$data['reports'][] = [
				'ip'         => $result['ip'],
				'account'    => $this->model_customer_customer->getTotalCustomersByIp($result['ip']),
				'store'      => $store,
				'country'    => $result['country'],
				'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
				'filter_ip'  => $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'] . '&filter_ip=' . $result['ip'])
			];
		}

		$report_total = $this->model_marketing_marketing->getTotalReports($marketing_id);

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $report_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('marketing/marketing.report', 'user_token=' . $this->session->data['user_token'] . '&marketing_id=' . $marketing_id . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($report_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($report_total - $limit)) ? $report_total : ((($page - 1) * $limit) + $limit), $report_total, ceil($report_total / $limit));

		return $this->load->view('marketing/marketing_report', $data);
	}

	/**
	 * Autocomplete
	 *
	 * @return void
	 */
	public function autocomplete(): void {
		$json = [];

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_code'])) {
			$filter_code = $this->request->get['filter_code'];
		} else {
			$filter_code = '';
		}

		// Marketing
		$filter_data = [
			'filter_name' => $filter_name,
			'filter_code' => $filter_code,
			'start'       => 0,
			'limit'       => $this->config->get('config_autocomplete_limit')
		];

		$this->load->model('marketing/marketing');

		$results = $this->model_marketing_marketing->getMarketings($filter_data);

		foreach ($results as $result) {
			$json[] = [
				'marketing_id' => $result['marketing_id'],
				'name'         => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
				'code'         => $result['code']
			];
		}

		$sort_order = [];

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

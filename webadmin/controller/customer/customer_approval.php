<?php
namespace Opencart\Admin\Controller\Customer;
/**
 * Class Customer Approval
 *
 * @package Opencart\Admin\Controller\Customer
 */
class CustomerApproval extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('customer/customer_approval');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('customer/customer_approval', 'user_token=' . $this->session->data['user_token'])
		];

		$data['approve'] = $this->url->link('customer/customer_approval.approve', 'user_token=' . $this->session->data['user_token'], true);
		$data['deny'] = $this->url->link('customer/customer_approval.deny', 'user_token=' . $this->session->data['user_token'], true);

		// Customer Group
		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$trade_id = $this->customerGroupId('Trade');
		$wholesale_id = $this->customerGroupId('Wholesale');
		$token = $this->session->data['user_token'];
		$data['trade_approval'] = $this->url->link('customer/customer_approval', 'user_token=' . $token . '&filter_customer_group_id=' . $trade_id);
		$data['wholesale_approval'] = $this->url->link('customer/customer_approval', 'user_token=' . $token . '&filter_customer_group_id=' . $wholesale_id);

		$data['list'] = $this->getList();
		$data['tab'] = ((int)($this->request->get['filter_customer_group_id'] ?? 0) === $wholesale_id) ? 'wholesale' : 'trade';

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/customer_approval', $data));
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('customer/customer_approval');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		if (!isset($this->request->get['filter_customer_group_id']) || $this->request->get['filter_customer_group_id'] === '') {
			$trade_id = $this->customerGroupId('Trade');

			if ($trade_id) {
				$this->request->get['filter_customer_group_id'] = $trade_id;
			}
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
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

		if (isset($this->request->get['filter_type'])) {
			$filter_type = $this->request->get['filter_type'];
		} else {
			$filter_type = '';
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

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_type'])) {
			$url .= '&filter_type=' . $this->request->get['filter_type'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['action'] = $this->url->link('customer/customer_approval.list', 'user_token=' . $this->session->data['user_token'] . $url, true);

		// Customer Approval
		$data['customer_approvals'] = [];

		$filter_data = [
			'filter_customer'          => $filter_customer,
			'filter_email'             => $filter_email,
			'filter_customer_group_id' => $filter_customer_group_id,
			'filter_type'              => $filter_type,
			'filter_date_from'         => $filter_date_from,
			'filter_date_to'           => $filter_date_to,
			'start'                    => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit'                    => $this->config->get('config_pagination_admin')
		];

		$this->load->model('customer/customer_approval');

		$results = $this->model_customer_customer_approval->getCustomerApprovals($filter_data);

		foreach ($results as $result) {
			$data['customer_approvals'][] = [
				'type'       => $this->language->get('text_' . $result['type']),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'approve'    => $this->url->link('customer/customer_approval.approve', 'user_token=' . $this->session->data['user_token'] . '&customer_approval_id=' . $result['customer_approval_id'], true),
				'deny'       => $this->url->link('customer/customer_approval.deny', 'user_token=' . $this->session->data['user_token'] . '&customer_approval_id=' . $result['customer_approval_id'], true),
				'view'       => $this->url->link('customer/customer_approval.view', 'user_token=' . $this->session->data['user_token'] . '&customer_approval_id=' . $result['customer_approval_id'], true),
				'edit'       => $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $result['customer_id'], true)
			] + $result;
		}

		$url = '';

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_type'])) {
			$url .= '&filter_type=' . $this->request->get['filter_type'];
		}

		if (isset($this->request->get['filter_date_from'])) {
			$url .= '&filter_date_from=' . $this->request->get['filter_date_from'];
		}

		if (isset($this->request->get['filter_date_to'])) {
			$url .= '&filter_date_to=' . $this->request->get['filter_date_to'];
		}

		$customer_approval_total = $this->model_customer_customer_approval->getTotalCustomerApprovals($filter_data);

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $customer_approval_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('customer/customer_approval.list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($customer_approval_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($customer_approval_total - $this->config->get('config_pagination_admin'))) ? $customer_approval_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $customer_approval_total, ceil($customer_approval_total / $this->config->get('config_pagination_admin')));

		return $this->load->view('customer/customer_approval_list', $data);
	}

	/**
	 * Approve
	 *
	 * @return void
	 */
	public function approve(): void {
		$this->load->language('customer/customer_approval');

		$json = [];

		if (!$this->user->hasPermission('modify', 'customer/customer_approval')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('customer/customer_approval');

			$approvals = [];

			if (isset($this->request->post['selected'])) {
				$approvals = (array)$this->request->post['selected'];
			}

			if (isset($this->request->get['customer_approval_id'])) {
				$approvals[] = (int)$this->request->get['customer_approval_id'];
			}

			foreach ($approvals as $customer_approval_id) {
				$customer_approval_info = $this->model_customer_customer_approval->getCustomerApproval($customer_approval_id);

				if ($customer_approval_info) {
					if ($customer_approval_info['type'] == 'customer') {
						$this->model_customer_customer_approval->approveCustomer($customer_approval_info['customer_id']);
					}

					if ($customer_approval_info['type'] == 'affiliate') {
						$this->model_customer_customer_approval->approveAffiliate($customer_approval_info['customer_id']);
					}
				}
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Deny
	 *
	 * @return void
	 */
	public function deny(): void {
		$this->load->language('customer/customer_approval');

		$json = [];

		if (!$this->user->hasPermission('modify', 'customer/customer_approval')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('customer/customer_approval');

			$denials = [];

			if (isset($this->request->post['selected'])) {
				$denials = (array)$this->request->post['selected'];
			}

			if (isset($this->request->get['customer_approval_id'])) {
				$denials[] = (int)$this->request->get['customer_approval_id'];
			}

			foreach ($denials as $customer_approval_id) {
				$customer_approval_info = $this->model_customer_customer_approval->getCustomerApproval($customer_approval_id);

				if ($customer_approval_info) {
					if ($customer_approval_info['type'] == 'customer') {
						$this->model_customer_customer_approval->denyCustomer($customer_approval_info['customer_id']);
					}

					if ($customer_approval_info['type'] == 'affiliate') {
						$this->model_customer_customer_approval->denyAffiliate($customer_approval_info['customer_id']);
					}
				}
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * View
	 *
	 * @return void
	 */
	public function view(): void {
		$this->load->language('customer/customer_approval');

		$customer_approval_id = (int)($this->request->get['customer_approval_id'] ?? 0);

		$this->load->model('customer/customer_approval');
		$this->load->model('customer/customer');
		$this->load->model('customer/trade');
		$this->load->model('tool/upload');

		$approval = $this->model_customer_customer_approval->getCustomerApproval($customer_approval_id);
		$customer = $approval ? $this->model_customer_customer->getCustomer((int)$approval['customer_id']) : [];

		if (!$approval || !$customer) {
			$this->response->redirect($this->url->link('customer/customer_approval', 'user_token=' . $this->session->data['user_token'], true));

			return;
		}

		$this->document->setTitle($customer['firstname'] . ' ' . $customer['lastname']);

		$group_id = (int)$customer['customer_group_id'];
		$data['breadcrumbs'] = [
			[
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
			],
			[
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('customer/customer_approval', 'user_token=' . $this->session->data['user_token'] . '&filter_customer_group_id=' . $group_id)
			],
			[
				'text' => $customer['firstname'] . ' ' . $customer['lastname'],
				'href' => $this->url->link('customer/customer_approval.view', 'user_token=' . $this->session->data['user_token'] . '&customer_approval_id=' . $customer_approval_id)
			]
		];

		$data['back'] = $this->url->link('customer/customer_approval', 'user_token=' . $this->session->data['user_token'] . '&filter_customer_group_id=' . $group_id);
		$data['approve'] = $this->url->link('customer/customer_approval.approve', 'user_token=' . $this->session->data['user_token'] . '&customer_approval_id=' . $customer_approval_id, true);
		$data['deny'] = $this->url->link('customer/customer_approval.deny', 'user_token=' . $this->session->data['user_token'] . '&customer_approval_id=' . $customer_approval_id, true);
		$data['customer'] = $customer['firstname'] . ' ' . $customer['lastname'];
		$data['email'] = $customer['email'];
		$data['telephone'] = $customer['telephone'];

		$trade = $this->model_customer_trade->getProfile((int)$customer['customer_id']);
		$fields = [
			'company' => 'Company / business name',
			'contact' => 'Contact person',
			'gstin' => 'GSTIN / Tax ID',
			'pan' => 'PAN / business registration no.',
			'business_type' => 'Business type',
			'monthly_purchase' => 'Expected monthly purchase',
			'stores' => 'Number of stores',
			'website' => 'Website',
			'billing_address' => 'Billing address',
			'billing_city' => 'Billing city',
			'billing_postcode' => 'Billing PIN',
			'billing_country' => 'Billing country',
			'billing_zone' => 'Billing state',
			'shipping_address' => 'Shipping address',
			'shipping_city' => 'Shipping city',
			'shipping_postcode' => 'Shipping PIN',
			'shipping_country' => 'Shipping country',
			'shipping_zone' => 'Shipping state',
			'reference' => 'Reference / existing supplier'
		];

		$data['fields'] = [];

		foreach ($fields as $key => $label) {
			$data['fields'][] = [
				'label' => $label,
				'value' => trim((string)($trade[$key] ?? ''))
			];
		}

		$data['documents'] = [];

		foreach (['trade_license' => 'Trade license / GST certificate', 'pan_document' => 'PAN / business document', 'cheque' => 'Cancelled cheque'] as $key => $label) {
			$code = (string)($trade[$key] ?? '');
			$upload = $code !== '' ? $this->model_tool_upload->getUploadByCode($code) : [];
			$extension = strtolower(pathinfo((string)($upload['name'] ?? ''), PATHINFO_EXTENSION));

			$data['documents'][] = [
				'label' => $label,
				'name'  => (string)($upload['name'] ?? ''),
				'image' => $upload && in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'], true) ? $this->url->link('customer/customer_approval.file', 'user_token=' . $this->session->data['user_token'] . '&code=' . $code) : '',
				'href'  => $upload ? $this->url->link('tool/upload.download', 'user_token=' . $this->session->data['user_token'] . '&code=' . $code) : ''
			];
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/customer_approval_info', $data));
	}

	/**
	 * File
	 *
	 * @return void
	 */
	public function file(): void {
		if (!$this->user->isLogged() || !$this->user->hasPermission('access', 'customer/customer_approval')) {
			return;
		}

		$this->load->model('tool/upload');

		$upload = $this->model_tool_upload->getUploadByCode((string)($this->request->get['code'] ?? ''));
		$extension = strtolower(pathinfo((string)($upload['name'] ?? ''), PATHINFO_EXTENSION));
		$types = ['jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif', 'webp' => 'image/webp'];
		$file = DIR_UPLOAD . basename((string)($upload['filename'] ?? ''));

		if (!$upload || !isset($types[$extension]) || !is_file($file)) {
			return;
		}

		$this->response->addHeader('Content-Type: ' . $types[$extension]);
		$this->response->setOutput((string)file_get_contents($file));
	}

	/**
	 * @return int
	 */
	private function customerGroupId(string $name): int {
		$query = $this->db->query("SELECT `customer_group_id` FROM `" . DB_PREFIX . "customer_group_description` WHERE `name` = '" . $this->db->escape($name) . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");

		return (int)($query->row['customer_group_id'] ?? 0);
	}
}

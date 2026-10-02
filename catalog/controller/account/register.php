<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * Class Register
 *
 * @package Opencart\Catalog\Controller\Account
 */
class Register extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'], true));
		}

		$this->load->language('account/register');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_register'),
			'href' => $this->url->link('account/register', 'language=' . $this->config->get('config_language'))
		];

		$data['text_account_already'] = sprintf($this->language->get('text_account_already'), $this->url->link('account/register', 'language=' . $this->config->get('config_language') . '&account=login'));

		$data['error_upload_size'] = sprintf($this->language->get('error_upload_size'), $this->config->get('config_file_max_size'));

		$data['config_file_max_size'] = ((int)$this->config->get('config_file_max_size') * 1024 * 1024);
		$data['config_telephone_display'] = $this->config->get('config_telephone_display');
		$data['config_telephone_required'] = $this->config->get('config_telephone_required');

		// Create form token
		$this->session->data['register_token'] = oc_token(26);

		$data['register'] = $this->url->link('account/register.register', 'language=' . $this->config->get('config_language') . '&register_token=' . $this->session->data['register_token']);

		$this->session->data['upload_token'] = oc_token(32);

		$data['upload'] = $this->url->link('tool/upload', 'language=' . $this->config->get('config_language') . '&upload_token=' . $this->session->data['upload_token']);

		// Customer Groups
		$data['customer_groups'] = [];

		if (is_array($this->config->get('config_customer_group_display'))) {
			$this->load->model('account/customer_group');

			$customer_groups = $this->model_account_customer_group->getCustomerGroups();

			foreach ($customer_groups as $customer_group) {
				if (in_array($customer_group['customer_group_id'], (array)$this->config->get('config_customer_group_display'))) {
					$data['customer_groups'][] = $customer_group;
				}
			}
		}

		$account = (string)($this->request->get['account'] ?? 'trade');

		if (!in_array($account, ['trade', 'wholesale', 'login'], true)) {
			$account = 'trade';
		}

		$language = (string)$this->config->get('config_language');
		$trade_id = $this->customerGroupId('Trade');
		$wholesale_id = $this->customerGroupId('Wholesale');

		$data['account'] = $account;
		$data['photo'] = 'image/catalog/craftboat/trays.png';
		$data['trade'] = $this->url->link('account/register', 'language=' . $language . '&account=trade');
		$data['wholesale'] = $this->url->link('account/register', 'language=' . $language . '&account=wholesale');
		$data['signin'] = $this->url->link('account/register', 'language=' . $language . '&account=login');
		$this->session->data['login_token'] = oc_token(26);
		$data['login'] = $this->url->link('account/login.login', 'language=' . $language . '&login_token=' . $this->session->data['login_token']);
		$data['forgotten'] = $this->url->link('account/forgotten', 'language=' . $language);
		$data['customer_group_id'] = ($account === 'wholesale' && $wholesale_id) ? $wholesale_id : $trade_id;
		$data['heading_title'] = $account === 'login' ? 'Sign in' : ($account === 'wholesale' ? 'Apply for a wholesale account' : 'Apply for a trade account');

		$this->document->setTitle($data['heading_title']);

		// Custom Fields
		$data['custom_fields'] = [];

		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields();

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'account') {
				$data['custom_fields'][] = $custom_field;
			}
		}

		// Captcha
		$this->load->model('setting/extension');

		$extension_info = $this->model_setting_extension->getExtensionByCode('captcha', $this->config->get('config_captcha'));

		if ($extension_info && $this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('register', (array)$this->config->get('config_captcha_page'))) {
			$data['captcha'] = $this->load->controller('extension/' . $extension_info['extension'] . '/captcha/' . $extension_info['code']);
		} else {
			$data['captcha'] = '';
		}

		// Information
		$this->load->model('catalog/information');

		$information_info = $this->model_catalog_information->getInformation((int)$this->config->get('config_account_id'));

		if ($information_info) {
			$data['text_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information.info', 'language=' . $this->config->get('config_language') . '&information_id=' . $this->config->get('config_account_id')), $information_info['title']);
		} else {
			$data['text_agree'] = '';
		}

		$data['language'] = $this->config->get('config_language');
		$data['country'] = $this->url->link('localisation/country', 'language=' . $data['language']);

		$this->load->model('localisation/country');

		$data['countries'] = $this->model_localisation_country->getCountries();
		$data['business_types'] = ['Retailer', 'Wholesaler', 'Distributor', 'Reseller', 'Other'];

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/register', $data));
	}

	/**
	 * Register
	 *
	 * @return void
	 */
	public function register(): void {
		$this->load->language('account/register');

		$json = [];

		$required = [
			'customer_group_id' => 0,
			'firstname'         => '',
			'lastname'          => '',
			'email'             => '',
			'telephone'         => '',
			'custom_field'      => [],
			'password'          => '',
			'agree'             => 0
		];

		$post_info = $this->request->post + $required;
		$contact = trim((string)($post_info['contact'] ?? ''));
		$contact_parts = preg_split('/\s+/', $contact, 2) ?: [];
		$post_info['firstname'] = oc_substr($contact_parts[0] ?? '', 0, 32);
		$post_info['lastname'] = oc_substr(($contact_parts[1] ?? '') !== '' ? $contact_parts[1] : ($contact_parts[0] ?? ''), 0, 32);

		if (!isset($this->request->get['register_token']) || !isset($this->session->data['register_token']) || ($this->session->data['register_token'] != $this->request->get['register_token'])) {
			$json['redirect'] = $this->url->link('account/register', 'language=' . $this->config->get('config_language'), true);
		}

		// Captcha first to prevent probing for registered emails
		$this->load->model('setting/extension');

		$extension_info = $this->model_setting_extension->getExtensionByCode('captcha', $this->config->get('config_captcha'));

		if ($extension_info && $this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('register', (array)$this->config->get('config_captcha_page'))) {
			$captcha = $this->load->controller('extension/' . $extension_info['extension'] . '/captcha/' . $extension_info['code'] . '.validate');

			if ($captcha) {
				$json['error']['captcha'] = $captcha;
			}
		}

		if (!$json) {
			// Customer Group
			if ($post_info['customer_group_id']) {
				$customer_group_id = (int)$post_info['customer_group_id'];
			} else {
				$customer_group_id = (int)$this->config->get('config_customer_group_id');
			}

			$this->load->model('account/customer_group');

			$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);

			if (!$customer_group_info || !in_array($customer_group_id, (array)$this->config->get('config_customer_group_display'))) {
				$json['error']['warning'] = $this->language->get('error_customer_group');
			}

			if (!isset($this->request->post['contact'])) {
				if (!oc_validate_length($post_info['firstname'], 1, 32)) {
					$json['error']['firstname'] = $this->language->get('error_firstname');
				}

				if (!oc_validate_length($post_info['lastname'], 1, 32)) {
					$json['error']['lastname'] = $this->language->get('error_lastname');
				}
			}

			if (!oc_validate_email($post_info['email'])) {
				$json['error']['email'] = $this->language->get('error_email');
			}

			// Total Customers
			$this->load->model('account/customer');

			if ($this->model_account_customer->getTotalCustomersByEmail($post_info['email'])) {
				$json['error']['warning'] = $this->language->get('error_exists');
			}

			if (!$this->validPhone((string)$post_info['telephone'])) {
				$json['error']['telephone'] = 'Enter a 10-digit mobile number.';
			}

			if (!preg_match('/^[\p{L}0-9][\p{L}0-9\s.&\'-]{1,254}$/u', trim((string)($post_info['company'] ?? '')))) {
				$json['error']['company'] = 'Enter the company name using letters or numbers.';
			}

			if (!preg_match('/^[\p{L}][\p{L}\s.\'-]{1,127}$/u', $contact)) {
				$json['error']['contact'] = 'Enter the contact person’s name.';
			}

			$business_types = ['Retailer', 'Wholesaler', 'Distributor', 'Reseller', 'Other'];

			if (!in_array((string)($post_info['business_type'] ?? ''), $business_types, true)) {
				$json['error']['business_type'] = 'Select a business type.';
			}

			if (!preg_match('/[\p{L}]/u', trim((string)($post_info['billing_address'] ?? ''))) || !oc_validate_length(trim((string)$post_info['billing_address']), 5, 255)) {
				$json['error']['billing_address'] = 'Enter a billing address.';
			}

			if (!preg_match('/^[\p{L}][\p{L}\s.\'-]{1,63}$/u', trim((string)($post_info['billing_city'] ?? '')))) {
				$json['error']['billing_city'] = 'Enter a city name.';
			}

			if (!$this->validPin((string)($post_info['billing_postcode'] ?? ''))) {
				$json['error']['billing_postcode'] = 'Enter a 6-digit PIN.';
			}

			if (!$this->validGstin((string)($post_info['gstin'] ?? ''))) {
				$json['error']['gstin'] = 'Enter a valid GSTIN, for example 22AAAAA0000A1Z5.';
			}

			if (!$this->validPan((string)($post_info['pan'] ?? ''))) {
				$json['error']['pan'] = 'Enter a valid PAN, for example ABCDE1234F.';
			}

			if (!$this->validAmount((string)($post_info['monthly_purchase'] ?? ''))) {
				$json['error']['monthly_purchase'] = 'Expected monthly purchase must be a number.';
			}

			if (!preg_match('/^[1-9][0-9]{0,4}$/', trim((string)($post_info['stores'] ?? '')))) {
				$json['error']['stores'] = 'Number of stores must be a whole number.';
			}

			$website = trim((string)($post_info['website'] ?? ''));

			if ($website !== '' && !$this->validWebsite($website)) {
				$json['error']['website'] = 'Enter a valid website, or leave it blank.';
			}

			$this->load->model('localisation/country');
			$this->load->model('localisation/zone');

			$billing_country = $this->model_localisation_country->getCountry((int)($post_info['billing_country_id'] ?? 0));
			$billing_zone = $this->model_localisation_zone->getZone((int)($post_info['billing_zone_id'] ?? 0));

			if (!$billing_country) {
				$json['error']['billing_country'] = 'Select a country.';
			}

			if (!$billing_zone || (int)$billing_zone['country_id'] !== (int)($billing_country['country_id'] ?? 0)) {
				$json['error']['billing_zone'] = 'Select a state.';
			}

			$shipping_same = !empty($post_info['shipping_same']);

			if (!$shipping_same) {
				if (!preg_match('/[\p{L}]/u', trim((string)($post_info['shipping_address'] ?? ''))) || !oc_validate_length(trim((string)($post_info['shipping_address'] ?? '')), 5, 255)) {
					$json['error']['shipping_address'] = 'Enter a shipping address.';
				}

				if (!preg_match('/^[\p{L}][\p{L}\s.\'-]{1,63}$/u', trim((string)($post_info['shipping_city'] ?? '')))) {
					$json['error']['shipping_city'] = 'Enter a shipping city name.';
				}

				if (!$this->validPin((string)($post_info['shipping_postcode'] ?? ''))) {
					$json['error']['shipping_postcode'] = 'Enter a 6-digit shipping PIN.';
				}

				$shipping_country = $this->model_localisation_country->getCountry((int)($post_info['shipping_country_id'] ?? 0));
				$shipping_zone = $this->model_localisation_zone->getZone((int)($post_info['shipping_zone_id'] ?? 0));

				if (!$shipping_country) {
					$json['error']['shipping_country'] = 'Select a shipping country.';
				}

				if (!$shipping_zone || (int)$shipping_zone['country_id'] !== (int)($shipping_country['country_id'] ?? 0)) {
					$json['error']['shipping_zone'] = 'Select a shipping state.';
				}
			}

			$this->load->model('tool/upload');

			foreach (['trade_license' => 'Trade license / GST certificate', 'pan_document' => 'PAN / business document'] as $field => $label) {
				$upload_error = $this->documentError((string)($post_info[$field] ?? ''), true);

				if ($upload_error) {
					$json['error'][$field] = $label . ' ' . $upload_error;
				}
			}

			if (!empty($post_info['cheque'])) {
				$upload_error = $this->documentError((string)$post_info['cheque'], false);

				if ($upload_error) {
					$json['error']['cheque'] = 'Cancelled cheque ' . $upload_error;
				}
			}

			// Custom fields validation
			$this->load->model('account/custom_field');

			$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

			foreach ($custom_fields as $custom_field) {
				if ($custom_field['location'] == 'account') {
					if ($custom_field['required'] && empty($post_info['custom_field'][$custom_field['custom_field_id']])) {
						$json['error']['custom_field_' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
					} elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !oc_validate_regex($post_info['custom_field'][$custom_field['custom_field_id']], $custom_field['validation'])) {
						$json['error']['custom_field_' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_regex'), $custom_field['name']);
					}
				}
			}

			$password = html_entity_decode($post_info['password'], ENT_QUOTES, 'UTF-8');

			if (!oc_validate_length($password, (int)$this->config->get('config_password_length'), 40)) {
				$json['error']['password'] = sprintf($this->language->get('error_password_length'), (int)$this->config->get('config_password_length'));
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

			// Agree to terms
			$this->load->model('catalog/information');

			$information_info = $this->model_catalog_information->getInformation((int)$this->config->get('config_account_id'));

			if ($information_info && !$post_info['agree']) {
				$json['error']['warning'] = sprintf($this->language->get('error_agree'), $information_info['title']);
			}
		}

		if (!$json) {
			$customer_id = $this->model_account_customer->addCustomer($post_info);

			$shipping_same = !empty($post_info['shipping_same']);
			$billing_country = $this->model_localisation_country->getCountry((int)$post_info['billing_country_id']);
			$billing_zone = $this->model_localisation_zone->getZone((int)$post_info['billing_zone_id']);
			$shipping_country = $shipping_same ? $billing_country : $this->model_localisation_country->getCountry((int)($post_info['shipping_country_id'] ?? 0));
			$shipping_zone = $shipping_same ? $billing_zone : $this->model_localisation_zone->getZone((int)($post_info['shipping_zone_id'] ?? 0));

			$this->load->model('account/trade');

			$this->model_account_trade->addProfile($customer_id, [
				'company'           => trim((string)$post_info['company']),
				'contact'           => trim((string)$post_info['contact']),
				'gstin'             => trim((string)$post_info['gstin']),
				'pan'               => trim((string)$post_info['pan']),
				'business_type'     => (string)$post_info['business_type'],
				'monthly_purchase'  => trim((string)$post_info['monthly_purchase']),
				'stores'            => trim((string)$post_info['stores']),
				'website'           => trim((string)($post_info['website'] ?? '')),
				'billing_address'   => trim((string)$post_info['billing_address']),
				'billing_city'      => trim((string)$post_info['billing_city']),
				'billing_postcode'  => trim((string)$post_info['billing_postcode']),
				'billing_country'   => (string)($billing_country['name'] ?? ''),
				'billing_zone'      => (string)($billing_zone['name'] ?? ''),
				'shipping_same'     => $shipping_same ? 1 : 0,
				'shipping_address'  => $shipping_same ? trim((string)$post_info['billing_address']) : trim((string)($post_info['shipping_address'] ?? '')),
				'shipping_city'     => $shipping_same ? trim((string)$post_info['billing_city']) : trim((string)($post_info['shipping_city'] ?? '')),
				'shipping_postcode' => $shipping_same ? trim((string)$post_info['billing_postcode']) : trim((string)($post_info['shipping_postcode'] ?? '')),
				'shipping_country'  => (string)($shipping_country['name'] ?? ''),
				'shipping_zone'     => (string)($shipping_zone['name'] ?? ''),
				'trade_license'     => (string)$post_info['trade_license'],
				'pan_document'      => (string)$post_info['pan_document'],
				'cheque'            => (string)($post_info['cheque'] ?? ''),
				'reference'         => trim((string)($post_info['reference'] ?? ''))
			]);

			// Login if requires approval
			if (!$customer_group_info['approval']) {
				$this->customer->login($post_info['email'], html_entity_decode($post_info['password'], ENT_QUOTES, 'UTF-8'));

				// Add customer details into session
				$this->session->data['customer'] = [
					'customer_id'       => $customer_id,
					'customer_group_id' => $customer_group_id,
					'firstname'         => $post_info['firstname'],
					'lastname'          => $post_info['lastname'],
					'email'             => $post_info['email'],
					'telephone'         => $post_info['telephone'],
					'custom_field'      => $post_info['custom_field']
				];

				// Log the IP info
				$this->model_account_customer->addLogin($this->customer->getId(), oc_get_ip());

				// Create customer token
				$this->session->data['customer_token'] = oc_token(26);
			}

			// Remove form token
			unset($this->session->data['register_token']);

			// Clear any previous login attempts for unregistered accounts.
			$this->model_account_customer->deleteLoginAttempts($post_info['email']);

			// Clear old session data
			unset($this->session->data['order_id']);
			unset($this->session->data['guest']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);

			$json['redirect'] = $this->url->link('account/success', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function validPhone(string $value): bool {
		$digits = preg_replace('/\D+/', '', $value) ?? '';

		if (str_starts_with($digits, '91') && strlen($digits) === 12) {
			$digits = substr($digits, 2);
		}

		return (bool)preg_match('/^[6-9][0-9]{9}$/', $digits);
	}

	private function validPin(string $value): bool {
		return (bool)preg_match('/^[1-9][0-9]{5}$/', trim($value));
	}

	private function validGstin(string $value): bool {
		$gstin = strtoupper(preg_replace('/\s+/', '', $value) ?? '');

		return (bool)preg_match('/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z][1-9A-Z]Z[0-9A-Z]$/', $gstin);
	}

	private function validPan(string $value): bool {
		$pan = strtoupper(preg_replace('/\s+/', '', $value) ?? '');

		return (bool)preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]$/', $pan);
	}

	private function validAmount(string $value): bool {
		$amount = preg_replace('/[,\s₹$]/u', '', trim($value)) ?? '';

		return (bool)preg_match('/^\d+(\.\d{1,2})?$/', $amount) && (float)$amount > 0;
	}

	private function validWebsite(string $value): bool {
		$website = preg_match('#^https?://#i', $value) ? $value : 'https://' . $value;

		return (bool)filter_var($website, FILTER_VALIDATE_URL) && (bool)preg_match('#\.[a-z]{2,}#i', $value);
	}

	private function documentError(string $code, bool $required): string {
		if ($code === '') {
			return $required ? 'is required. Upload a JPG, PNG, WEBP or PDF.' : '';
		}

		$upload = $this->model_tool_upload->getUploadByCode($code);
		$extension = strtolower(pathinfo((string)($upload['name'] ?? ''), PATHINFO_EXTENSION));

		if (!$upload || !in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif', 'pdf'], true)) {
			return 'must be a JPG, PNG, WEBP or PDF.';
		}

		return '';
	}

	/**
	 * @return int
	 */
	private function customerGroupId(string $name): int {
		$query = $this->db->query("SELECT `customer_group_id` FROM `" . DB_PREFIX . "customer_group_description` WHERE `name` = '" . $this->db->escape($name) . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");

		return (int)($query->row['customer_group_id'] ?? 0);
	}
}

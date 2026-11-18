<?php
namespace Opencart\Catalog\Controller\Account;

/**
 * Complete trade / wholesale account details after email lead signup.
 */
class Complete extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		$language = (string)$this->config->get('config_language');

		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/complete', 'language=' . $language, true);
			$this->response->redirect($this->url->link('account/login', 'language=' . $language, true));

			return;
		}

		$this->load->model('account/trade');

		if (!$this->model_account_trade->requiresCompletion()) {
			$this->response->redirect($this->url->link('common/home', 'language=' . $language . '&customer_token=' . ($this->session->data['customer_token'] ?? ''), true));

			return;
		}

		$this->document->setTitle('Complete your wholesale account');

		$this->session->data['complete_token'] = oc_token(26);
		$this->session->data['upload_token'] = oc_token(32);

		$profile = $this->model_account_trade->getProfile((int)$this->customer->getId());

		$data['heading_title'] = 'Complete your wholesale account';
		$data['intro'] = 'Add your trade details to unlock wholesale pricing and the full catalog.';
		$data['save'] = $this->url->link('account/complete.save', 'language=' . $language . '&complete_token=' . $this->session->data['complete_token'] . '&customer_token=' . ($this->session->data['customer_token'] ?? ''));
		$data['upload'] = $this->url->link('tool/upload', 'language=' . $language . '&upload_token=' . $this->session->data['upload_token']);
		$data['error_upload_size'] = sprintf('File size must be under %smb', $this->config->get('config_file_max_size'));
		$data['config_file_max_size'] = ((int)$this->config->get('config_file_max_size') * 1024 * 1024);
		$data['language'] = $language;
		$data['country'] = $this->url->link('localisation/country', 'language=' . $language);
		$data['email'] = $this->customer->getEmail();
		$data['telephone'] = $this->customer->getTelephone();
		$data['company'] = (string)($profile['company'] ?? '');
		$data['contact'] = (string)($profile['contact'] ?? trim($this->customer->getFirstName() . ' ' . $this->customer->getLastName()));
		$data['gstin'] = (string)($profile['gstin'] ?? '');
		$data['pan'] = (string)($profile['pan'] ?? '');
		$data['business_type'] = (string)($profile['business_type'] ?? '');
		$data['monthly_purchase'] = (string)($profile['monthly_purchase'] ?? '');
		$data['stores'] = (string)($profile['stores'] ?? '');
		$data['website'] = (string)($profile['website'] ?? '');
		$data['billing_address'] = (string)($profile['billing_address'] ?? '');
		$data['billing_city'] = (string)($profile['billing_city'] ?? '');
		$data['billing_postcode'] = (string)($profile['billing_postcode'] ?? '');
		$data['reference'] = (string)($profile['reference'] ?? '');
		$data['trade_license'] = (string)($profile['trade_license'] ?? '');
		$data['pan_document'] = (string)($profile['pan_document'] ?? '');
		$data['cheque'] = (string)($profile['cheque'] ?? '');
		$data['shipping_same'] = !isset($profile['shipping_same']) || (int)$profile['shipping_same'] === 1;
		$data['business_types'] = ['Retailer', 'Wholesaler', 'Distributor', 'Reseller', 'Other'];

		$this->load->model('localisation/country');
		$data['countries'] = $this->model_localisation_country->getCountries();

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/complete', $data));
	}

	/**
	 * @return void
	 */
	public function save(): void {
		$json = [];
		$language = (string)$this->config->get('config_language');

		if (!$this->customer->isLogged()) {
			$json['redirect'] = $this->url->link('account/login', 'language=' . $language, true);
		}

		if (!$json && (!isset($this->request->get['complete_token']) || !isset($this->session->data['complete_token']) || $this->session->data['complete_token'] != $this->request->get['complete_token'])) {
			$json['redirect'] = $this->url->link('account/complete', 'language=' . $language . '&customer_token=' . ($this->session->data['customer_token'] ?? ''), true);
		}

		$this->load->model('account/trade');

		if (!$json && !$this->model_account_trade->requiresCompletion()) {
			$json['redirect'] = $this->url->link('common/home', 'language=' . $language . '&customer_token=' . ($this->session->data['customer_token'] ?? ''), true);
		}

		$post_info = $this->request->post + [
			'company'          => '',
			'contact'          => '',
			'telephone'        => '',
			'business_type'    => '',
			'billing_address'  => '',
			'billing_city'     => '',
			'billing_postcode' => '',
			'billing_country_id' => 0,
			'billing_zone_id'  => 0,
			'shipping_same'    => 0,
			'shipping_address' => '',
			'shipping_city'    => '',
			'shipping_postcode'=> '',
			'shipping_country_id' => 0,
			'shipping_zone_id' => 0,
			'gstin'            => '',
			'pan'              => '',
			'monthly_purchase' => '',
			'stores'           => '',
			'website'          => '',
			'reference'        => '',
			'trade_license'    => '',
			'pan_document'     => '',
			'cheque'           => ''
		];

		if (!$json) {
			$contact = trim((string)$post_info['contact']);

			if (!preg_match('/^[\p{L}0-9][\p{L}0-9\s.&\'-]{1,254}$/u', trim((string)$post_info['company']))) {
				$json['error']['company'] = 'Enter the company name using letters or numbers.';
			}

			if (!preg_match('/^[\p{L}][\p{L}\s.\'-]{1,127}$/u', $contact)) {
				$json['error']['contact'] = 'Enter the contact person’s name.';
			}

			if (!$this->validPhone((string)$post_info['telephone'])) {
				$json['error']['telephone'] = 'Enter a 10-digit mobile number.';
			}

			$business_types = ['Retailer', 'Wholesaler', 'Distributor', 'Reseller', 'Other'];

			if (!in_array((string)$post_info['business_type'], $business_types, true)) {
				$json['error']['business_type'] = 'Select a business type.';
			}

			if (!preg_match('/[\p{L}]/u', trim((string)$post_info['billing_address'])) || !oc_validate_length(trim((string)$post_info['billing_address']), 5, 255)) {
				$json['error']['billing_address'] = 'Enter a billing address.';
			}

			if (!preg_match('/^[\p{L}][\p{L}\s.\'-]{1,63}$/u', trim((string)$post_info['billing_city']))) {
				$json['error']['billing_city'] = 'Enter a city name.';
			}

			if (!$this->validPin((string)$post_info['billing_postcode'])) {
				$json['error']['billing_postcode'] = 'Enter a 6-digit PIN.';
			}

			if (!$this->validGstin((string)$post_info['gstin'])) {
				$json['error']['gstin'] = 'Enter a valid GSTIN, for example 22AAAAA0000A1Z5.';
			}

			if (!$this->validPan((string)$post_info['pan'])) {
				$json['error']['pan'] = 'Enter a valid PAN, for example ABCDE1234F.';
			}

			if (!$this->validAmount((string)$post_info['monthly_purchase'])) {
				$json['error']['monthly_purchase'] = 'Expected monthly purchase must be a number.';
			}

			if (!preg_match('/^[1-9][0-9]{0,4}$/', trim((string)$post_info['stores']))) {
				$json['error']['stores'] = 'Number of stores must be a whole number.';
			}

			$website = trim((string)$post_info['website']);

			if ($website !== '' && !$this->validWebsite($website)) {
				$json['error']['website'] = 'Enter a valid website, or leave it blank.';
			}

			$this->load->model('localisation/country');
			$this->load->model('localisation/zone');

			$billing_country = $this->model_localisation_country->getCountry((int)$post_info['billing_country_id']);
			$billing_zone = $this->model_localisation_zone->getZone((int)$post_info['billing_zone_id']);

			if (!$billing_country) {
				$json['error']['billing_country'] = 'Select a country.';
			}

			if (!$billing_zone || (int)$billing_zone['country_id'] !== (int)($billing_country['country_id'] ?? 0)) {
				$json['error']['billing_zone'] = 'Select a state.';
			}

			$shipping_same = !empty($post_info['shipping_same']);

			if (!$shipping_same) {
				if (!preg_match('/[\p{L}]/u', trim((string)$post_info['shipping_address'])) || !oc_validate_length(trim((string)$post_info['shipping_address']), 5, 255)) {
					$json['error']['shipping_address'] = 'Enter a shipping address.';
				}

				if (!preg_match('/^[\p{L}][\p{L}\s.\'-]{1,63}$/u', trim((string)$post_info['shipping_city']))) {
					$json['error']['shipping_city'] = 'Enter a shipping city name.';
				}

				if (!$this->validPin((string)$post_info['shipping_postcode'])) {
					$json['error']['shipping_postcode'] = 'Enter a 6-digit shipping PIN.';
				}

				$shipping_country = $this->model_localisation_country->getCountry((int)$post_info['shipping_country_id']);
				$shipping_zone = $this->model_localisation_zone->getZone((int)$post_info['shipping_zone_id']);

				if (!$shipping_country) {
					$json['error']['shipping_country'] = 'Select a shipping country.';
				}

				if (!$shipping_zone || (int)$shipping_zone['country_id'] !== (int)($shipping_country['country_id'] ?? 0)) {
					$json['error']['shipping_zone'] = 'Select a shipping state.';
				}
			}

			$this->load->model('tool/upload');

			foreach (['trade_license' => 'Trade license / GST certificate', 'pan_document' => 'PAN / business document'] as $field => $label) {
				$upload_error = $this->documentError((string)$post_info[$field], true);

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
		}

		if (!$json) {
			$contact = trim((string)$post_info['contact']);
			$contact_parts = preg_split('/\s+/', $contact, 2) ?: [];
			$firstname = oc_substr($contact_parts[0] ?? '', 0, 32);
			$lastname = oc_substr(($contact_parts[1] ?? '') !== '' ? $contact_parts[1] : ($contact_parts[0] ?? ''), 0, 32);

			$this->load->model('account/customer');
			$this->model_account_customer->editCustomer((int)$this->customer->getId(), [
				'firstname'    => $firstname,
				'lastname'     => $lastname,
				'email'        => $this->customer->getEmail(),
				'telephone'    => trim((string)$post_info['telephone']),
				'custom_field' => []
			]);

			$shipping_same = !empty($post_info['shipping_same']);
			$billing_country = $this->model_localisation_country->getCountry((int)$post_info['billing_country_id']);
			$billing_zone = $this->model_localisation_zone->getZone((int)$post_info['billing_zone_id']);
			$shipping_country = $shipping_same ? $billing_country : $this->model_localisation_country->getCountry((int)$post_info['shipping_country_id']);
			$shipping_zone = $shipping_same ? $billing_zone : $this->model_localisation_zone->getZone((int)$post_info['shipping_zone_id']);

			$this->model_account_trade->addProfile((int)$this->customer->getId(), [
				'company'           => trim((string)$post_info['company']),
				'contact'           => $contact,
				'gstin'             => trim((string)$post_info['gstin']),
				'pan'               => trim((string)$post_info['pan']),
				'business_type'     => (string)$post_info['business_type'],
				'monthly_purchase'  => trim((string)$post_info['monthly_purchase']),
				'stores'            => trim((string)$post_info['stores']),
				'website'           => trim((string)$post_info['website']),
				'billing_address'   => trim((string)$post_info['billing_address']),
				'billing_city'      => trim((string)$post_info['billing_city']),
				'billing_postcode'  => trim((string)$post_info['billing_postcode']),
				'billing_country'   => (string)($billing_country['name'] ?? ''),
				'billing_zone'      => (string)($billing_zone['name'] ?? ''),
				'shipping_same'     => $shipping_same ? 1 : 0,
				'shipping_address'  => $shipping_same ? trim((string)$post_info['billing_address']) : trim((string)$post_info['shipping_address']),
				'shipping_city'     => $shipping_same ? trim((string)$post_info['billing_city']) : trim((string)$post_info['shipping_city']),
				'shipping_postcode' => $shipping_same ? trim((string)$post_info['billing_postcode']) : trim((string)$post_info['shipping_postcode']),
				'shipping_country'  => (string)($shipping_country['name'] ?? ''),
				'shipping_zone'     => (string)($shipping_zone['name'] ?? ''),
				'trade_license'     => (string)$post_info['trade_license'],
				'pan_document'      => (string)$post_info['pan_document'],
				'cheque'            => (string)($post_info['cheque'] ?? ''),
				'reference'         => trim((string)$post_info['reference']),
				'profile_complete'  => 1
			]);

			unset($this->session->data['complete_token']);
			$this->session->data['landing_passed'] = 1;

			$json['redirect'] = $this->url->link('common/home', 'language=' . $language . '&customer_token=' . ($this->session->data['customer_token'] ?? ''), true);
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
}

<?php
namespace Opencart\Admin\Controller\Marketing;
/**
 * Class Contact — Faire-style Campaigns
 *
 * @package Opencart\Admin\Controller\Marketing
 */
class Contact extends \Opencart\System\Engine\Controller {
	/**
	 * Campaigns list
	 */
	public function index(): void {
		$this->load->language('marketing/contact');
		$this->load->model('marketing/campaign');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];

		$tab = $this->request->get['tab'] ?? 'all';
		$allowed = ['all', 'draft', 'scheduled', 'complete', 'template'];

		if (!in_array($tab, $allowed, true)) {
			$tab = 'all';
		}

		$filter_status = $tab === 'all' ? '' : $tab;

		$data['tab'] = $tab;
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_intro'] = $this->language->get('text_intro');
		$data['text_create'] = $this->language->get('text_create');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['text_na'] = $this->language->get('text_na');

		$data['create'] = $this->url->link('marketing/contact.form', $token);
		$data['filter_all'] = $this->url->link('marketing/contact', $token . '&tab=all');
		$data['filter_draft'] = $this->url->link('marketing/contact', $token . '&tab=draft');
		$data['filter_scheduled'] = $this->url->link('marketing/contact', $token . '&tab=scheduled');
		$data['filter_completed'] = $this->url->link('marketing/contact', $token . '&tab=complete');
		$data['filter_templates'] = $this->url->link('marketing/contact', $token . '&tab=template');

		$data['counts'] = [
			'all'       => $this->model_marketing_campaign->getTotalCampaigns(),
			'draft'     => $this->model_marketing_campaign->getTotalCampaigns(['filter_status' => 'draft']),
			'scheduled' => $this->model_marketing_campaign->getTotalCampaigns(['filter_status' => 'scheduled']),
			'complete'  => $this->model_marketing_campaign->getTotalCampaigns(['filter_status' => 'complete']),
			'template'  => $this->model_marketing_campaign->getTotalCampaigns(['filter_status' => 'template'])
		];

		$results = $this->model_marketing_campaign->getCampaigns([
			'filter_status' => $filter_status,
			'start'         => 0,
			'limit'         => 100
		]);

		$data['campaigns'] = [];

		foreach ($results as $result) {
			$open_rate = ($result['delivered'] > 0) ? round(($result['opens'] / $result['delivered']) * 100, 2) : null;
			$click_rate = ($result['delivered'] > 0) ? round(($result['clicks'] / $result['delivered']) * 100, 2) : null;

			$status = $result['status'];
			$status_label = $this->language->get('text_status_' . ($status === 'complete' ? 'complete' : $status));

			if ($status === 'complete' && $result['date_sent']) {
				$meta = sprintf($this->language->get('text_sent_on'), date('M j, Y, g:i A', strtotime($result['date_sent'])));
			} else {
				$meta = sprintf($this->language->get('text_updated_on'), date('M j, Y, g:i A', strtotime($result['date_modified'])));
			}

			$data['campaigns'][] = [
				'campaign_id'    => $result['campaign_id'],
				'name'           => $result['name'] ?: $result['subject'],
				'recipients'     => $result['recipients'],
				'meta'           => $meta,
				'status'         => $status,
				'status_label'   => $status_label,
				'delivered'      => $result['status'] === 'complete' ? ((int)$result['delivered'] . ' / ' . (int)$result['total']) : $this->language->get('text_na'),
				'open_rate'      => $open_rate !== null ? rtrim(rtrim(number_format($open_rate, 2), '0'), '.') . '%' : $this->language->get('text_na'),
				'click_rate'     => $click_rate !== null ? rtrim(rtrim(number_format($click_rate, 2), '0'), '.') . '%' : $this->language->get('text_na'),
				'orders_opens'   => $result['status'] === 'complete' ? (int)$result['orders_opens'] : $this->language->get('text_na'),
				'orders_clicks'  => $result['status'] === 'complete' ? (int)$result['orders_clicks'] : $this->language->get('text_na'),
				'volume_opens'   => $result['status'] === 'complete' ? $this->currency->format($result['volume_opens'], $this->config->get('config_currency')) : $this->language->get('text_na'),
				'volume_clicks'  => $result['status'] === 'complete' ? $this->currency->format($result['volume_clicks'], $this->config->get('config_currency')) : $this->language->get('text_na'),
				'href'           => $this->url->link('marketing/contact.form', $token . '&campaign_id=' . (int)$result['campaign_id'])
			];
		}

		$data['column_campaign'] = $this->language->get('column_campaign');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_delivered'] = $this->language->get('column_delivered');
		$data['column_open_rate'] = $this->language->get('column_open_rate');
		$data['column_click_rate'] = $this->language->get('column_click_rate');
		$data['column_orders_opens'] = $this->language->get('column_orders_opens');
		$data['column_orders_clicks'] = $this->language->get('column_orders_clicks');
		$data['column_volume_opens'] = $this->language->get('column_volume_opens');
		$data['column_volume_clicks'] = $this->language->get('column_volume_clicks');
		$data['text_tab_all'] = $this->language->get('text_tab_all');
		$data['text_tab_draft'] = $this->language->get('text_tab_draft');
		$data['text_tab_scheduled'] = $this->language->get('text_tab_scheduled');
		$data['text_tab_completed'] = $this->language->get('text_tab_completed');
		$data['text_tab_templates'] = $this->language->get('text_tab_templates');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/campaign_list', $data));
	}

	/**
	 * Create / edit campaign form
	 */
	public function form(): void {
		$this->load->language('marketing/contact');
		$this->load->model('marketing/campaign');

		$token = 'user_token=' . $this->session->data['user_token'];
		$campaign_id = (int)($this->request->get['campaign_id'] ?? 0);
		$store_name = (string)$this->config->get('config_name');
		$catalog = defined('HTTP_CATALOG') ? HTTP_CATALOG : '/';

		$this->load->model('tool/image');
		$store_logo_path = html_entity_decode((string)$this->config->get('config_logo'), ENT_QUOTES, 'UTF-8');
		$store_logo_url = ($store_logo_path && is_file(DIR_IMAGE . $store_logo_path)) ? $this->model_tool_image->resize($store_logo_path, 240, 80) : '';

		if (!$campaign_id) {
			$next = $this->model_marketing_campaign->getTotalCampaigns() + 1;
			$campaign_id = $this->model_marketing_campaign->addCampaign([
				'name'       => 'Untitled campaign ' . $next,
				'subject'    => '',
				'message'    => $this->model_marketing_campaign->defaultMessage($store_name, $catalog, $store_logo_url),
				'template'   => 'announcement',
				'status'     => 'draft',
				'recipients' => $this->language->get('text_newsletter'),
				'to'         => 'newsletter'
			]);

			$this->response->redirect($this->url->link('marketing/contact.form', $token . '&campaign_id=' . $campaign_id));
			return;
		}

		$campaign_info = $this->model_marketing_campaign->getCampaign($campaign_id);

		if (!$campaign_info) {
			$this->response->redirect($this->url->link('marketing/contact', $token));
			return;
		}

		$this->document->setTitle($campaign_info['name'] ?: $this->language->get('heading_form'));

		$data['back'] = $this->url->link('marketing/contact', $token);
		$data['campaign_id'] = $campaign_id;
		$data['name'] = $campaign_info['name'];
		$data['subject'] = $campaign_info['subject'];
		$data['preview_text'] = $campaign_info['preview_text'] ?? '';
		$data['template'] = $campaign_info['template'] ?? 'announcement';
		$data['message'] = $campaign_info['message'] ?: $this->model_marketing_campaign->defaultMessage($store_name, $catalog, $store_logo_url);
		$data['to'] = $campaign_info['to'] ?: 'newsletter';
		$data['customer_group_id'] = (int)$campaign_info['customer_group_id'];
		$data['store_id'] = (int)$campaign_info['store_id'];
		$data['status'] = $campaign_info['status'];
		$data['status_label'] = $this->language->get('text_status_' . ($campaign_info['status'] === 'complete' ? 'complete' : $campaign_info['status']));
		$data['created_meta'] = sprintf($this->language->get('text_created_on'), date('F j, Y \a\t g:i A T', strtotime($campaign_info['date_added'])));
		$data['store_name'] = $store_name;
		$data['catalog'] = $catalog;
		$data['image_base'] = $catalog . 'image/';
		$data['store_logo'] = $store_logo_url;
		$data['store_logo_path'] = $store_logo_path;

		$this->load->model('customer/customer_group');
		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$data['segments'] = [
			['value' => 'newsletter', 'label' => $this->language->get('text_newsletter')],
			['value' => 'customer_all', 'label' => $this->language->get('text_customer_all')],
			['value' => 'customer_group', 'label' => $this->language->get('text_customer_group')],
			['value' => 'customer', 'label' => $this->language->get('text_customer')],
			['value' => 'affiliate_all', 'label' => $this->language->get('text_affiliate_all')],
			['value' => 'product', 'label' => $this->language->get('text_product')]
		];

		$data['templates'] = [
			['id' => 'invitation', 'label' => 'Invitation', 'icon' => 'fa-envelope-open-text'],
			['id' => 'announcement', 'label' => 'Big announcement', 'icon' => 'fa-bullhorn'],
			['id' => 'collection', 'label' => 'Collection spotlight', 'icon' => 'fa-layer-group'],
			['id' => 'product', 'label' => 'Product spotlight', 'icon' => 'fa-box'],
			['id' => 'cart', 'label' => 'Items in cart', 'icon' => 'fa-cart-shopping'],
			['id' => 'promo', 'label' => 'Share promotion', 'icon' => 'fa-tags'],
			['id' => 'plain', 'label' => 'Simple plain text', 'icon' => 'fa-align-left']
		];

		$data['blocks'] = [
			['id' => 'header', 'label' => 'Header', 'icon' => 'fa-heading'],
			['id' => 'text', 'label' => 'Text', 'icon' => 'fa-font'],
			['id' => 'image', 'label' => 'Image', 'icon' => 'fa-image'],
			['id' => 'product', 'label' => 'Product', 'icon' => 'fa-bag-shopping'],
			['id' => 'collection', 'label' => 'Collection', 'icon' => 'fa-layer-group'],
			['id' => 'button', 'label' => 'Button', 'icon' => 'fa-square'],
			['id' => 'banner', 'label' => 'Banner', 'icon' => 'fa-panorama'],
			['id' => 'benefits', 'label' => 'Benefits', 'icon' => 'fa-gift'],
			['id' => 'logo', 'label' => 'Logo', 'icon' => 'fa-certificate'],
			['id' => 'promo', 'label' => 'Promo', 'icon' => 'fa-percent'],
			['id' => 'divider', 'label' => 'Divider', 'icon' => 'fa-minus'],
			['id' => 'spacing', 'label' => 'Spacing', 'icon' => 'fa-arrows-up-down']
		];

		$data['collections'] = [];
		try {
			$this->load->model('catalog/collection');
			foreach ($this->model_catalog_collection->getCollections('published') as $collection) {
				$image = '';
				if (!empty($collection['image']) && is_file(DIR_IMAGE . html_entity_decode($collection['image'], ENT_QUOTES, 'UTF-8'))) {
					$image = $this->model_tool_image->resize($collection['image'], 160, 160);
				}
				$code = (string)($collection['code'] ?? '');
				$data['collections'][] = [
					'collection_id' => (int)$collection['collection_id'],
					'name'          => $collection['name'],
					'image'         => $image,
					'href'          => $catalog . 'index.php?route=product/collection&collection=' . rawurlencode($code)
				];
			}
		} catch (\Throwable $e) {
		}

		$data['coupons'] = [];
		try {
			$this->load->model('marketing/coupon');
			foreach ($this->model_marketing_coupon->getCoupons(['sort' => 'name', 'order' => 'ASC', 'start' => 0, 'limit' => 50]) as $coupon) {
				if (!(int)$coupon['status']) {
					continue;
				}
				$data['coupons'][] = [
					'coupon_id' => (int)$coupon['coupon_id'],
					'name'      => $coupon['name'],
					'code'      => $coupon['code'],
					'discount'  => $coupon['discount']
				];
			}
		} catch (\Throwable $e) {
		}

		$data['user_token'] = $this->session->data['user_token'];
		$data['block_lookup'] = $this->url->link('marketing/contact.blockLookup', $token, true);
		$data['collections_json'] = json_encode($data['collections'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
		$data['coupons_json'] = json_encode($data['coupons'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/campaign_form', $data));
	}

	/**
	 * Lookup products for content blocks
	 */
	public function blockLookup(): void {
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$json = [];
		$catalog = defined('HTTP_CATALOG') ? HTTP_CATALOG : '/';
		$filter = trim((string)($this->request->get['filter_name'] ?? ''));
		$product_id = (int)($this->request->get['product_id'] ?? 0);

		if ($product_id) {
			$product = $this->model_catalog_product->getProduct($product_id);
			if ($product) {
				$json = $this->formatBlockProduct($product, $catalog);
			}
		} else {
			$results = $this->model_catalog_product->getProducts([
				'filter_name' => $filter,
				'start'       => 0,
				'limit'       => 12
			]);

			foreach ($results as $result) {
				$json[] = $this->formatBlockProduct($result, $catalog);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function formatBlockProduct(array $product, string $catalog): array {
		$image = '';
		if (!empty($product['image']) && is_file(DIR_IMAGE . html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'))) {
			$image = $this->model_tool_image->resize($product['image'], 200, 200);
		} else {
			$image = $this->model_tool_image->resize('no_image.png', 200, 200);
		}

		return [
			'product_id' => (int)$product['product_id'],
			'name'       => html_entity_decode($product['name'], ENT_QUOTES, 'UTF-8'),
			'model'      => $product['model'] ?? '',
			'price'      => $this->currency->format((float)$product['price'], $this->config->get('config_currency')),
			'image'      => $image,
			'href'       => $catalog . 'index.php?route=product/product&product_id=' . (int)$product['product_id']
		];
	}

	/**
	 * Save draft / schedule / template
	 */
	public function saveDraft(): void {
		$this->load->language('marketing/contact');
		$this->load->model('marketing/campaign');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/contact')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		$post = $this->request->post + [
			'campaign_id'       => 0,
			'name'              => '',
			'subject'           => '',
			'preview_text'      => '',
			'template'          => 'announcement',
			'message'           => '',
			'to'                => 'newsletter',
			'customer_group_id' => 0,
			'store_id'          => 0,
			'status'            => 'draft'
		];

		$status = in_array($post['status'], ['draft', 'scheduled', 'template'], true) ? $post['status'] : 'draft';

		if (!$json) {
			$payload = [
				'name'              => $post['name'] ?: ('Untitled campaign ' . ((int)$post['campaign_id'] ?: 'new')),
				'subject'           => $post['subject'],
				'preview_text'      => $post['preview_text'],
				'template'          => $post['template'],
				'message'           => $post['message'],
				'to'                => $post['to'],
				'customer_group_id' => (int)$post['customer_group_id'],
				'store_id'          => (int)$post['store_id'],
				'status'            => $status,
				'recipients'        => $this->recipientLabel((string)$post['to'], (int)$post['customer_group_id'])
			];

			$campaign_id = (int)$post['campaign_id'];

			if ($campaign_id) {
				$this->model_marketing_campaign->editCampaign($campaign_id, $payload);
			} else {
				$campaign_id = $this->model_marketing_campaign->addCampaign($payload);
			}

			$messages = [
				'draft'     => $this->language->get('text_draft_saved'),
				'scheduled' => $this->language->get('text_scheduled'),
				'template'  => $this->language->get('text_template_saved')
			];

			$json['success'] = $messages[$status] ?? $this->language->get('text_draft_saved');
			$json['campaign_id'] = $campaign_id;
			$json['name'] = $payload['name'];
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Duplicate campaign
	 */
	public function duplicate(): void {
		$this->load->language('marketing/contact');
		$this->load->model('marketing/campaign');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/contact')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$campaign_id = (int)($this->request->get['campaign_id'] ?? $this->request->post['campaign_id'] ?? 0);
		$info = $campaign_id ? $this->model_marketing_campaign->getCampaign($campaign_id) : [];

		if (!$json && !$info) {
			$json['error'] = $this->language->get('error_campaign');
		}

		if (!$json) {
			$new_id = $this->model_marketing_campaign->addCampaign([
				'name'              => $info['name'] . ' (copy)',
				'subject'           => $info['subject'],
				'preview_text'      => $info['preview_text'] ?? '',
				'template'          => $info['template'] ?? 'announcement',
				'message'           => $info['message'],
				'to'                => $info['to'],
				'customer_group_id' => $info['customer_group_id'],
				'store_id'          => $info['store_id'],
				'status'            => 'draft',
				'recipients'        => $info['recipients']
			]);

			$json['success'] = $this->language->get('text_duplicated');
			$json['redirect'] = $this->url->link('marketing/contact.form', 'user_token=' . $this->session->data['user_token'] . '&campaign_id=' . $new_id, true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Delete campaign
	 */
	public function deleteCampaign(): void {
		$this->load->language('marketing/contact');
		$this->load->model('marketing/campaign');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/contact')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$campaign_id = (int)($this->request->get['campaign_id'] ?? $this->request->post['campaign_id'] ?? 0);

		if (!$json && $campaign_id) {
			$this->model_marketing_campaign->deleteCampaign($campaign_id);
			$json['success'] = $this->language->get('text_deleted');
			$json['redirect'] = $this->url->link('marketing/contact', 'user_token=' . $this->session->data['user_token'], true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Send
	 *
	 * @throws \Exception
	 */
	public function send(): void {
		$this->load->language('marketing/contact');
		$this->load->model('marketing/campaign');

		$json = [];

		if (!$this->user->hasPermission('modify', 'marketing/contact')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		$required = [
			'campaign_id'       => 0,
			'name'              => '',
			'to'                => '',
			'subject'           => '',
			'preview_text'      => '',
			'template'          => 'announcement',
			'message'           => '',
			'store_id'          => 0,
			'customer'          => [],
			'customer_group_id' => 0,
			'affiliate'         => []
		];

		$post_info = $this->request->post + $required;

		if (!$post_info['subject']) {
			$json['error']['subject'] = $this->language->get('error_subject');
		}

		if (!$post_info['message']) {
			$json['error']['message'] = $this->language->get('error_message');
		}

		if (!$json) {
			$this->load->model('setting/store');
			$this->load->model('setting/setting');
			$this->load->model('customer/customer');
			$this->load->model('marketing/affiliate');
			$this->load->model('sale/order');

			$store_info = $this->model_setting_store->getStore($post_info['store_id']);
			$store_name = $store_info ? $store_info['name'] : $this->config->get('config_name');

			$setting = $this->model_setting_setting->getSetting('config', $post_info['store_id']);
			$store_email = $setting['config_email'] ?? $this->config->get('config_email');

			$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
			$limit = 10;
			$email_total = 0;
			$emails = [];

			switch ($post_info['to']) {
				case 'newsletter':
					$customer_data = [
						'filter_newsletter' => 1,
						'start'             => ($page - 1) * $limit,
						'limit'             => $limit
					];
					$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
					foreach ($this->model_customer_customer->getCustomers($customer_data) as $result) {
						$emails[] = $result['email'];
					}
					break;
				case 'customer_all':
					$customer_data = [
						'start' => ($page - 1) * $limit,
						'limit' => $limit
					];
					$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
					foreach ($this->model_customer_customer->getCustomers($customer_data) as $result) {
						$emails[] = $result['email'];
					}
					break;
				case 'customer_group':
					$customer_data = [
						'filter_customer_group_id' => $post_info['customer_group_id'],
						'start'                    => ($page - 1) * $limit,
						'limit'                    => $limit
					];
					$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
					foreach ($this->model_customer_customer->getCustomers($customer_data) as $result) {
						$emails[$result['customer_id']] = $result['email'];
					}
					break;
				case 'customer':
					if (!empty($post_info['customer'])) {
						$email_total = count($post_info['customer']);
						$customers = array_slice($post_info['customer'], ($page - 1) * $limit, $limit);
						foreach ($customers as $customer_id) {
							$customer_info = $this->model_customer_customer->getCustomer($customer_id);
							if ($customer_info) {
								$emails[] = $customer_info['email'];
							}
						}
					}
					break;
				case 'affiliate_all':
					$affiliate_data = [
						'start' => ($page - 1) * $limit,
						'limit' => $limit
					];
					$email_total = $this->model_marketing_affiliate->getTotalAffiliates($affiliate_data);
					foreach ($this->model_marketing_affiliate->getAffiliates($affiliate_data) as $result) {
						$emails[] = $result['email'];
					}
					break;
				case 'affiliate':
					if (!empty($post_info['affiliate'])) {
						$affiliates = array_slice($post_info['affiliate'], ($page - 1) * $limit, $limit);
						foreach ($affiliates as $affiliate_id) {
							$affiliate_info = $this->model_marketing_affiliate->getAffiliate($affiliate_id);
							if ($affiliate_info) {
								$emails[] = $affiliate_info['email'];
							}
						}
						$email_total = count($post_info['affiliate']);
					}
					break;
				case 'product':
					if (isset($post_info['product'])) {
						$email_total = $this->model_sale_order->getTotalEmailsByProductsOrdered($post_info['product']);
						foreach ($this->model_sale_order->getEmailsByProductsOrdered($post_info['product'], ($page - 1) * $limit, $limit) as $result) {
							$emails[] = $result['email'];
						}
					}
					break;
			}

			if ($emails) {
				$start = ($page - 1) * $limit;
				$end = $start > ($email_total - $limit) ? $email_total : ($start + $limit);

				// Persist / update campaign on first page
				if ($page === 1) {
					$payload = [
						'name'              => $post_info['name'] ?: $post_info['subject'],
						'subject'           => $post_info['subject'],
						'preview_text'      => $post_info['preview_text'],
						'template'          => $post_info['template'],
						'message'           => $post_info['message'],
						'to'                => $post_info['to'],
						'customer_group_id' => (int)$post_info['customer_group_id'],
						'store_id'          => (int)$post_info['store_id'],
						'status'            => 'complete',
						'recipients'        => $this->recipientLabel((string)$post_info['to'], (int)$post_info['customer_group_id']),
						'delivered'         => 0,
						'total'             => (int)$email_total,
						'date_sent'         => date('Y-m-d H:i:s')
					];

					$campaign_id = (int)$post_info['campaign_id'];

					if ($campaign_id) {
						$this->model_marketing_campaign->editCampaign($campaign_id, $payload);
					} else {
						$campaign_id = $this->model_marketing_campaign->addCampaign($payload);
					}

					$this->session->data['campaign_send_id'] = $campaign_id;
				}

				$campaign_id = (int)($this->session->data['campaign_send_id'] ?? $post_info['campaign_id']);

				if ($end < $email_total) {
					$json['text'] = sprintf($this->language->get('text_sent'), $start ?: 1, $end, $email_total);
					$json['next'] = $this->url->link('marketing/contact.send', 'user_token=' . $this->session->data['user_token'] . '&page=' . ($page + 1), true);
				} else {
					$json['success'] = $this->language->get('text_success');
					$json['next'] = '';
					$json['redirect'] = $this->url->link('marketing/contact', 'user_token=' . $this->session->data['user_token'], true);
					unset($this->session->data['campaign_send_id']);
				}

				$message  = '<html dir="ltr" lang="' . $this->language->get('code') . '">' . "\n";
				$message .= '  <head>' . "\n";
				$message .= '    <title>' . $post_info['subject'] . '</title>' . "\n";
				$message .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
				$message .= '  </head>' . "\n";
				$message .= '  <body>' . html_entity_decode($post_info['message'], ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
				$message .= '</html>' . "\n";

				$sent_count = 0;

				if ($this->config->get('config_mail_engine')) {
					$mail_option = [
						'parameter'     => $this->config->get('config_mail_parameter'),
						'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
						'smtp_username' => $this->config->get('config_mail_smtp_username'),
						'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
						'smtp_port'     => $this->config->get('config_mail_smtp_port'),
						'smtp_timeout'  => $this->config->get('config_mail_smtp_timeout')
					];

					$mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'), $mail_option);

					foreach ($emails as $email) {
						if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$mail->setTo(trim($email));
							$mail->setFrom($store_email);
							$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
							$mail->setSubject(html_entity_decode($post_info['subject'], ENT_QUOTES, 'UTF-8'));
							$mail->setHtml($message);
							$mail->send();
							$sent_count++;
						}
					}
				}

				if ($campaign_id && $sent_count) {
					$current = $this->model_marketing_campaign->getCampaign($campaign_id);
					$delivered = (int)($current['delivered'] ?? 0) + $sent_count;
					$this->model_marketing_campaign->editCampaign($campaign_id, [
						'delivered' => $delivered,
						'total'     => (int)$email_total,
						'status'    => 'complete'
					]);
				}
			} else {
				$json['error']['warning'] = $this->language->get('error_email');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function recipientLabel(string $to, int $customer_group_id = 0): string {
		$map = [
			'newsletter'     => 'text_newsletter',
			'customer_all'   => 'text_customer_all',
			'customer_group' => 'text_customer_group',
			'customer'       => 'text_customer',
			'affiliate_all'  => 'text_affiliate_all',
			'affiliate'      => 'text_affiliate',
			'product'        => 'text_product'
		];

		$label = $this->language->get($map[$to] ?? 'text_newsletter');

		if ($to === 'customer_group' && $customer_group_id) {
			$this->load->model('customer/customer_group');
			$group = $this->model_customer_customer_group->getCustomerGroup($customer_group_id);
			if ($group) {
				$label = $group['name'];
			}
		}

		return $label;
	}
}

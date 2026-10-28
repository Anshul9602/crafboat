<?php
namespace Opencart\Admin\Controller\Marketing;
/**
 * Faire-style Marketing hub
 */
class Hub extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('marketing/hub');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];

		$data['breadcrumbs'] = [
			['text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', $token)],
			['text' => $this->language->get('heading_title'), 'href' => $this->url->link('marketing/hub', $token)]
		];

		$coupon_total = 0;
		$lead_total = 0;

		try {
			$coupon_total = (int)$this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "coupon` WHERE `status` = '1'")->row['total'];
		} catch (\Throwable $e) {
		}

		try {
			$lead_total = (int)$this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer` `c` WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "order` `o` WHERE `o`.`customer_id` = `c`.`customer_id` AND `o`.`order_status_id` > '0')")->row['total'];
		} catch (\Throwable $e) {
		}

		$data['tips'] = [
			[
				'title' => $this->language->get('tip_campaign_title'),
				'text'  => $this->language->get('tip_campaign_text'),
				'link'  => $this->language->get('tip_campaign_link'),
				'href'  => $this->url->link('marketing/contact', $token)
			],
			[
				'title' => $this->language->get('tip_promo_title'),
				'text'  => sprintf($this->language->get('tip_promo_text'), $coupon_total),
				'link'  => $this->language->get('tip_promo_link'),
				'href'  => $this->url->link('marketing/coupon', $token)
			],
			[
				'title' => $this->language->get('tip_leads_title'),
				'text'  => sprintf($this->language->get('tip_leads_text'), $lead_total),
				'link'  => $this->language->get('tip_leads_link'),
				'href'  => $this->url->link('customer/customer', $token . '&tab=potential')
			]
		];

		$catalog = defined('HTTP_CATALOG') ? HTTP_CATALOG : '/';

		$data['tools'] = [
			[
				'icon'  => 'fa-envelope',
				'title' => $this->language->get('tool_campaigns'),
				'text'  => $this->language->get('tool_campaigns_text'),
				'href'  => $this->url->link('marketing/contact', $token)
			],
			[
				'icon'  => 'fa-rotate',
				'title' => $this->language->get('tool_automations'),
				'text'  => $this->language->get('tool_automations_text'),
				'href'  => $this->url->link('marketing/marketing', $token)
			],
			[
				'icon'  => 'fa-tags',
				'title' => $this->language->get('tool_promotions'),
				'text'  => $this->language->get('tool_promotions_text'),
				'href'  => $this->url->link('marketing/coupon', $token)
			],
			[
				'icon'  => 'fa-bullhorn',
				'title' => $this->language->get('tool_listings'),
				'text'  => $this->language->get('tool_listings_text'),
				'href'  => $this->url->link('catalog/product', $token)
			],
			[
				'icon'  => 'fa-handshake',
				'title' => $this->language->get('tool_affiliate'),
				'text'  => $this->language->get('tool_affiliate_text'),
				'href'  => $this->url->link('marketing/affiliate', $token)
			],
			[
				'icon'  => 'fa-calendar',
				'title' => $this->language->get('tool_events'),
				'text'  => $this->language->get('tool_events_text'),
				'href'  => $this->url->link('cms/article', $token)
			],
			[
				'icon'  => 'fa-globe',
				'title' => $this->language->get('tool_website'),
				'text'  => $this->language->get('tool_website_text'),
				'href'  => $catalog,
				'target'=> '_blank'
			],
			[
				'icon'  => 'fa-file-lines',
				'title' => $this->language->get('tool_flyers'),
				'text'  => $this->language->get('tool_flyers_text'),
				'href'  => $this->url->link('design/banner', $token)
			],
			[
				'icon'  => 'fa-images',
				'title' => $this->language->get('tool_images'),
				'text'  => $this->language->get('tool_images_text'),
				'href'  => $this->url->link('common/filemanager', $token)
			]
		];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketing/hub', $data));
	}
}

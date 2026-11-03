<?php
namespace Opencart\Catalog\Controller\Checkout;
/**
 * Class Success
 *
 * @package Opencart\Catalog\Controller\Checkout
 */
class Success extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('checkout/success');

		$order_id = (int)($this->session->data['order_id'] ?? 0);

		if ($order_id) {
			$this->cart->clear();

			unset($this->session->data['order_id']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['comment']);
			unset($this->session->data['agree']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$lang = 'language=' . $this->config->get('config_language');

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', $lang)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart', $lang)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', $lang)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success', $lang)
		];

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_eyebrow'] = $this->language->get('text_eyebrow');
		$data['text_lead'] = $this->language->get('text_lead');
		$data['text_order_label'] = $this->language->get('text_order_label');
		$data['text_step_email_title'] = $this->language->get('text_step_email_title');
		$data['text_step_email'] = $this->language->get('text_step_email');
		$data['text_step_review_title'] = $this->language->get('text_step_review_title');
		$data['text_step_review'] = $this->language->get('text_step_review');
		$data['text_step_help_title'] = $this->language->get('text_step_help_title');
		$data['text_step_help'] = $this->language->get('text_step_help');
		$data['button_continue'] = $this->language->get('button_continue');
		$data['button_order'] = $this->language->get('button_order');
		$data['button_contact'] = $this->language->get('button_contact');

		$data['order_id'] = $order_id ?: '';
		$data['continue'] = $this->url->link('common/home', $lang);
		$data['contact'] = $this->url->link('information/contact', $lang);
		$data['order'] = '';

		if ($this->customer->isLogged() && !empty($this->session->data['customer_token'])) {
			$token = $lang . '&customer_token=' . $this->session->data['customer_token'];
			$data['order'] = $this->url->link('account/order', $token);

			if ($order_id) {
				$data['order'] = $this->url->link('account/order.info', $token . '&order_id=' . $order_id);
			}
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/success', $data));
	}
}

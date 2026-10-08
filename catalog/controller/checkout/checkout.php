<?php
namespace Opencart\Catalog\Controller\Checkout;
/**
 * Class Checkout
 *
 * @package Opencart\Catalog\Controller\Checkout
 */
class Checkout extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'), true);
			$this->session->data['error'] = 'Please sign in with an approved Trade or Wholesale account to checkout.';
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));

			return;
		}

		$group = $this->db->query("SELECT `name` FROM `" . DB_PREFIX . "customer_group_description` WHERE `customer_group_id` = '" . (int)$this->customer->getGroupId() . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");
		$role = oc_strtolower((string)($group->row['name'] ?? ''));

		if (!in_array($role, ['trade', 'wholesale'], true)) {
			$this->session->data['error'] = 'Checkout is available to approved Trade and Wholesale accounts only.';
			$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true));

			return;
		}

		$this->cart->applyMinimum();

		// Validate cart to see if it has products and has stock.
		if (!$this->cart->hasProducts() || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout')) || !$this->cart->hasMinimum()) {
			$messages = [];

			if (!$this->cart->hasProducts()) {
				$messages[] = 'Your cart is empty.';
			}

			foreach ($this->cart->getProducts() as $product) {
				if (!$product['stock_status'] && !$this->config->get('config_stock_checkout')) {
					$messages[] = $product['name'] . ' is not available in that quantity.';
				}

				if (!$product['minimum_status']) {
					$messages[] = $product['name'] . ' must be ordered in a case pack of ' . (int)$product['minimum'] . '.';
				}
			}

			if ($messages) {
				$this->session->data['error'] = implode(' ', $messages);
			}

			$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true));

			return;
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'))
		];

		if (!$this->customer->isLogged()) {
			$data['register'] = $this->load->controller('checkout/register');
		} else {
			$data['register'] = '';
		}

		if ($this->customer->isLogged() && $this->config->get('config_checkout_payment_address')) {
			$data['payment_address'] = $this->load->controller('checkout/payment_address');
		} else {
			$data['payment_address'] = '';
		}

		if ($this->customer->isLogged() && $this->cart->hasShipping()) {
			$data['shipping_address'] = $this->load->controller('checkout/shipping_address');
		} else {
			$data['shipping_address'] = '';
		}

		if ($this->cart->hasShipping()) {
			$data['shipping_method'] = $this->load->controller('checkout/shipping_method');
		} else {
			$data['shipping_method'] = '';
		}

		$data['payment_method'] = $this->load->controller('checkout/payment_method');
		$data['confirm'] = $this->load->controller('checkout/confirm');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}
}

<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * Class Wish List
 *
 * @package Opencart\Catalog\Controller\Account
 */
class WishList extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('account/wishlist');

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''))
		];

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['list'] = $this->getList();

		$data['customer_token'] = $this->session->data['customer_token'];

		$data['continue'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));

		$data['language'] = $this->config->get('config_language');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/wishlist', $data));
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('account/wishlist');

		if (!$this->load->controller('account/login.validate')) {
			$token = isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : '';

			$this->session->data['redirect'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . $token);
		}

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	protected function getList(): string {
		$data['cart'] = $this->url->link('common/cart.info', 'language=' . $this->config->get('config_language'));
		$data['cart_add'] = $this->url->link('checkout/cart.add', 'language=' . $this->config->get('config_language'));

		$data['products'] = [];

		// Wishlist
		$this->load->model('account/wishlist');

		// Product
		$this->load->model('catalog/product');

		// Stock Status
		$this->load->model('localisation/stock_status');

		$results = $this->model_account_wishlist->getWishlist($this->customer->getId());

		foreach ($results as $result) {
			$product_info = $this->model_catalog_product->getProduct((int)$result['product_id']);

			if ($product_info) {
				if ($product_info['image'] && is_file(DIR_IMAGE . html_entity_decode($product_info['image'], ENT_QUOTES, 'UTF-8'))) {
					$image = 'image/' . $product_info['image'];
				} else {
					$image = '';
				}

				$tags = array_map('trim', explode(',', (string)($product_info['tag'] ?? '')));
				$made = in_array('made', $tags, true);

				if ($product_info['quantity'] <= 0) {
					$stock_status_id = $product_info['stock_status_id'];
				} elseif (!$this->config->get('config_stock_display')) {
					$stock_status_id = (int)$this->config->get('stock_status_id');
				} else {
					$stock_status_id = 0;
				}

				$stock_status_info = $this->model_localisation_stock_status->getStockStatus($stock_status_id);

				if ($stock_status_info) {
					$stock = $stock_status_info['name'];
				} else {
					$stock = $product_info['quantity'];
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$product_info['special']) {
					$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				$data['products'][] = [
					'thumb'      => $image,
					'stock'      => $stock,
					'price'      => $price,
					'special'    => $special,
					'minimum'    => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
					'href'       => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_info['product_id']),
					'remove'     => $this->url->link('account/wishlist.remove', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_info['product_id'] . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : '')),
					'category'   => $product_info['meta_keyword'] ?? '',
					'collection' => $product_info['location'] ?? '',
					'badge'      => in_array('new', $tags, true) ? 'new' : (in_array('bestseller', $tags, true) ? 'bestseller' : 'ready'),
					'ship'       => $made ? 'Made to order · Ships in 10–12 days' : 'Ready to ship · Dispatches in 3–5 days',
					'wait'       => $made
				] + $product_info;
			} else {
				$this->model_account_wishlist->deleteWishlists($this->customer->getId(), $result['product_id']);
			}
		}

		return $this->load->view('account/wishlist_list', $data);
	}

	/**
	 * Add
	 *
	 * @return void
	 */
	public function add(): void {
		$this->load->language('account/wishlist');

		$json = [];

		if (isset($this->request->post['product_id'])) {
			$product_id = (int)$this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		// Product
		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if (!$product_info) {
			$json['error'] = $this->language->get('error_product');
		}

		if (!$json) {
			if (!isset($this->session->data['wishlist'])) {
				$this->session->data['wishlist'] = [];
			}

			$this->session->data['wishlist'][] = $product_id;

			$this->session->data['wishlist'] = array_unique($this->session->data['wishlist']);

			$json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_id), $product_info['name'], $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : '')));

			if ($this->customer->isLogged()) {
				$this->load->model('account/wishlist');

				$this->model_account_wishlist->addWishlist($this->customer->getId(), $product_id);

				$json['count'] = $this->model_account_wishlist->getTotalWishlist($this->customer->getId());
			} else {
				$json['count'] = count($this->session->data['wishlist']);
			}

			$json['total'] = sprintf($this->language->get('text_wishlist'), $json['count']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Remove
	 *
	 * @return void
	 */
	public function remove(): void {
		$this->load->language('account/wishlist');

		$json = [];

		if (isset($this->request->post['product_id'])) {
			$product_id = (int)$this->request->post['product_id'];
		} elseif (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->session->data['wishlist']) && is_array($this->session->data['wishlist'])) {
			$this->session->data['wishlist'] = array_values(array_filter($this->session->data['wishlist'], function ($id) use ($product_id) {
				return (int)$id !== $product_id;
			}));
		}

		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$this->model_account_wishlist->deleteWishlists($this->customer->getId(), $product_id);

			$json['count'] = $this->model_account_wishlist->getTotalWishlist($this->customer->getId());
		} else {
			$json['count'] = isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0;
		}

		$json['success'] = $this->language->get('text_remove');
		$json['total'] = sprintf($this->language->get('text_wishlist'), $json['count']);

		if (isset($this->session->data['customer_token'])) {
			$json['customer_token'] = $this->session->data['customer_token'];
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

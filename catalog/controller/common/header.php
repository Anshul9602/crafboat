<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Header
 *
 * Can be called from $this->load->controller('common/header');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Header extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		// Analytics
		$data['analytics'] = [];

		if (!$this->config->get('config_cookie_id') || (isset($this->request->cookie['policy']) && $this->request->cookie['policy'])) {
			// Extension
			$this->load->model('setting/extension');

			$analytics = $this->model_setting_extension->getExtensionsByType('analytics');

			foreach ($analytics as $analytic) {
				if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
					$data['analytics'][] = $this->load->controller('extension/' . $analytic['extension'] . '/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
				}
			}
		}

		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['title'] = $this->document->getTitle();
		$data['base'] = $this->config->get('config_url');
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();

		// Hard coding css, so they can be replaced via the event's system.
		$data['bootstrap'] = 'catalog/view/stylesheet/bootstrap.css';
		$data['icons'] = 'catalog/view/stylesheet/fonts/fontawesome/css/all.min.css';
		$data['stylesheet'] = 'catalog/view/stylesheet/stylesheet.css';
		$data['theme'] = 'catalog/view/stylesheet/craftboat.css?v=form28';
		$route = (string)($this->request->get['route'] ?? '');
		$data['account_page'] = str_starts_with($route, 'account/');
		$data['topbar_note'] = in_array(($this->request->get['route'] ?? ''), ['product/collection', 'product/category', 'product/product'], true) ? 'Ships from Jaipur, India  |   Opening order $500' : '';
		$data['collections'] = $this->url->link('product/collection', 'language=' . $this->config->get('config_language') . '&collection=saffron');

		// Hard coding scripts, so they can be replaced via the event's system.
		$data['jquery'] = 'catalog/view/javascript/jquery/jquery-3.7.1.min.js';

		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');

		$data['name'] = $this->config->get('config_name');

		// Fav icon
		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$data['icon'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_icon');
		} else {
			$data['icon'] = '';
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist($this->customer->getId()));
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['home'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));
		$data['register'] = $this->url->link('account/register', 'language=' . $this->config->get('config_language') . '&account=trade');
		$data['wishlist'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['logged'] = $this->customer->isLogged();

		if (!$this->customer->isLogged()) {
			$data['register'] = $this->url->link('account/register', 'language=' . $this->config->get('config_language') . '&account=trade');
			$data['login'] = $this->url->link('account/login', 'language=' . $this->config->get('config_language'));
		} else {
			$data['account'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['order'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['transaction'] = $this->url->link('account/transaction', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['download'] = $this->url->link('account/download', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['logout'] = $this->url->link('account/logout', 'language=' . $this->config->get('config_language'));
		}

		$data['shopping_cart'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'));
		$data['cart_drawer'] = $this->url->link('checkout/cart.drawer', 'language=' . $this->config->get('config_language'));
		$data['checkout'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));
		$data['contact'] = $this->url->link('information/contact', 'language=' . $this->config->get('config_language'));
		$data['telephone'] = $this->config->get('config_telephone');
		$data['about'] = $this->url->link('information/about', 'language=' . $this->config->get('config_language'));
		$data['special'] = $this->url->link('product/special', 'language=' . $this->config->get('config_language'));
		$data['newsletter'] = $this->url->link('account/newsletter', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));

		$this->load->model('catalog/category');

		$data['categories'] = [];
		$data['nav_categories'] = [];
		$nav_names = ['Cakes', 'Tins', 'Bomboloni'];

		foreach ($this->model_catalog_category->getCategories(0) as $category) {
			$item = [
				'name' => $category['name'],
				'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id'])
			];

			$data['categories'][] = $item;

			if (in_array($category['name'], $nav_names, true)) {
				$data['nav_categories'][] = $item;
			}
		}

		$data['shop_all'] = $data['categories'][0]['href'] ?? $data['special'];
		$lang = 'language=' . $this->config->get('config_language');
		$category_url = fn(int $id): string => $this->url->link('product/category', $lang . '&path=' . ($id === 100 ? '100' : '100_' . $id));
		$collection_url = fn(string $code): string => $this->url->link('product/collection', $lang . '&collection=' . $code);
		$data['nav'] = [
			'catalog'    => $category_url(100),
			'new'        => $category_url(108),
			'favourites' => $category_url(109),
			'ready'      => $category_url(110),
			'holiday'    => $category_url(111),
			'saffron'    => $collection_url('saffron'),
			'marbled'    => $collection_url('marbled'),
			'desk'       => $category_url(101),
			'home'       => $category_url(102),
			'textiles'   => $category_url(103),
			'stationery' => $category_url(104),
			'gifting'    => $category_url(105),
			'seasonal'   => $category_url(106),
			'storage'    => $category_url(107)
		];

		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search_action'] = $this->url->link('common/search.redirect', 'language=' . $this->config->get('config_language'));
		$data['search'] = $this->request->get['search'] ?? '';
		$data['cart_count'] = $this->cart->countProducts();
		$data['saved_count'] = isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0;

		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');
			$data['saved_count'] = $this->model_account_wishlist->getTotalWishlist($this->customer->getId());
		}

		$data['search_html'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}

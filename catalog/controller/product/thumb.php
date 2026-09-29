<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Class Thumb
 *
 * Can be loaded using $this->load->controller('product/thumb', $product_data);
 *
 * @example
 *
 * $product_data = [
 *     'description' => '',
 *     'thumb'       => '',
 *     'price'       => 1.00,
 *     'special'     => 0.00,
 *     'tax'         => 0.00,
 *     'minimum'     => 1,
 *     'href'        => ''
 * ];
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Thumb extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return string
	 */
	public function index(array $data): string {
		$this->load->language('product/thumb');

		$data['logged'] = $this->customer->isLogged();
		$data['cart'] = $this->url->link('common/cart.info', 'language=' . $this->config->get('config_language'));

		$data['cart_add'] = $this->url->link('checkout/cart.add', 'language=' . $this->config->get('config_language'));
		$data['wishlist_add'] = $this->url->link('account/wishlist.add', 'language=' . $this->config->get('config_language'));
		$data['compare_add'] = $this->url->link('product/compare.add', 'language=' . $this->config->get('config_language'));

		$data['review_status'] = (int)$this->config->get('config_review_status');

		$tags = array_map('trim', explode(',', (string)($data['tag'] ?? '')));
		$made = in_array('made', $tags, true);
		$data['badge'] = in_array('new', $tags, true) ? 'new' : (in_array('bestseller', $tags, true) ? 'bestseller' : 'ready');
		$data['collection'] = $data['location'] ?? '';
		$data['category_name'] = $data['meta_keyword'] ?? '';
		$data['sku'] = $data['model'] ?? '';
		$data['ship_wait'] = $made;
		$data['ship'] = $made ? 'Made to order · Ships in 10–12 days' : 'Ready to ship · Dispatches in 3–5 days';

		return $this->load->view('product/thumb', $data);
	}
}

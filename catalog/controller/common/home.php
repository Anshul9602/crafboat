<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Home
 *
 * Can be called from $this->load->controller('common/home');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Home extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$description = $this->config->get('config_description');
		$language_id = $this->config->get('config_language_id');

		if (isset($description[$language_id])) {
			$this->document->setTitle($description[$language_id]['meta_title']);
			$this->document->setDescription($description[$language_id]['meta_description']);
			$this->document->setKeywords($description[$language_id]['meta_keyword']);
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$language = $this->config->get('config_language');
		$collection_url = fn(string $code): string => $this->url->link('product/collection', 'language=' . $language . '&collection=' . $code);
		$data['shop'] = $this->url->link('product/category', 'language=' . $language . '&path=100');
		$data['arrivals'] = $this->url->link('product/category', 'language=' . $language . '&path=100_108');
		$data['bestsellers_link'] = $this->url->link('product/category', 'language=' . $language . '&path=100_109');
		$data['ready_link'] = $collection_url('holiday-collection-ready-to-ship');
		$data['holiday'] = $collection_url('holiday-collection-ready-to-ship');
		$data['paper'] = $collection_url('stationery-paper-goods-moss-green-story');
		$data['dept_home'] = $collection_url('picture-frames');
		$data['dept_storage'] = $collection_url('desk-organization-moss-green-story');
		$data['dept_stationery'] = $collection_url('stationery-paper-goods-moss-green-story');
		$data['dept_lighting'] = $collection_url('lampshades-lighting-moss-green-story');
		$data['dept_pouches'] = $collection_url('travel-essentials-moss-green-story');
		$data['dept_gifting'] = $collection_url('jewellery-pouch-a-small-object-with-a-lot-of-charm');
		$this->load->model('design/banner');
		$data['banners'] = $this->model_design_banner->getPageBanners('Homepage');

		$data['categories'] = $this->homeCategories();
		$data['home_collections'] = $this->homeCollections();
		$data['bestsellers'] = $this->homeCards('featured', 8);
		$data['ready'] = $this->homeCards('readyline', 4);
		$data['logged'] = $this->customer->isLogged();
		$data['login'] = $this->url->link('account/login', 'language=' . $language);
		$data['account'] = $this->url->link('account/account', 'language=' . $language . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}

	/**
	 * @return array<int, array<string, string>>
	 */
	private function homeCategories(): array {
		$query = $this->db->query("SELECT `c`.`category_id`, `c`.`image`, `cd`.`name` FROM `" . DB_PREFIX . "category` `c` LEFT JOIN `" . DB_PREFIX . "category_description` `cd` ON (`c`.`category_id` = `cd`.`category_id`) WHERE `c`.`parent_id` = '100' AND `c`.`status` = '1' AND `cd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `c`.`category_id` NOT IN (107, 108, 109, 110, 111) ORDER BY `c`.`sort_order` ASC");

		$categories = [];

		foreach ($query->rows as $row) {
			$collection_codes = [
				'Paper & Desk' => 'stationery-paper-goods-moss-green-story',
				'Home'         => 'picture-frames',
				'Textiles'     => 'home-decor-textiles-moss-green-story',
				'Stationery'   => 'stationery-paper-goods-moss-green-story',
				'Gifting'      => 'jewellery-pouch-a-small-object-with-a-lot-of-charm',
				'Holiday'      => 'holiday-collection-ready-to-ship'
			];
			$code = $collection_codes[$row['name']] ?? '';
			$categories[] = [
				'name'  => $row['name'],
				'image' => 'image/' . $row['image'],
				'href'  => $code
					? $this->url->link('product/collection', 'language=' . $this->config->get('config_language') . '&collection=' . $code)
					: $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $row['category_id'])
			];
		}

		return $categories;
	}

	/**
	 * @return array<int, array<string, string>>
	 */
	private function homeCollections(): array {
		$this->load->model('catalog/collection');
		$photos = [];
		$photo_query = $this->db->query("SELECT `p`.`location`, `p`.`image` FROM `" . DB_PREFIX . "product` `p` INNER JOIN (SELECT `location`, MIN(`product_id`) AS `product_id` FROM `" . DB_PREFIX . "product` WHERE `status` = '1' AND `image` <> '' GROUP BY `location`) `first` ON `first`.`product_id` = `p`.`product_id`");

		foreach ($photo_query->rows as $photo) {
			$photos[$photo['location']] = $photo['image'];
		}

		$collections = [];
		$index = 1;

		foreach ($this->model_catalog_collection->getCollections() as $row) {
			$image = $row['image'] ?: ($photos[$row['name']] ?? '');
			$collections[] = [
				'name'  => $row['name'],
				'num'   => str_pad((string)$index, 2, '0', STR_PAD_LEFT),
				'image' => $image ? 'image/' . $image : '',
				'href'  => $this->url->link('product/collection', 'language=' . $this->config->get('config_language') . '&collection=' . $row['code'])
			];
			$index++;
		}

		return $collections;
	}

	/**
	 * @return array<int, array<string, mixed>>
	 */
	private function homeCards(string $flag, int $limit): array {
		$query = $this->db->query("SELECT `p`.`product_id`, `p`.`model`, `p`.`image`, `p`.`location`, `pd`.`name`, `pd`.`tag`, `pd`.`meta_keyword` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND FIND_IN_SET('" . $this->db->escape($flag) . "', `pd`.`tag`) ORDER BY `p`.`sort_order` ASC LIMIT " . (int)$limit);

		$cards = [];

		foreach ($query->rows as $row) {
			$tags = array_map('trim', explode(',', (string)$row['tag']));
			$made = in_array('made', $tags, true);

			$cards[] = [
				'product_id' => $row['product_id'],
				'name'       => $row['name'],
				'sku'        => $row['model'],
				'category'   => $row['meta_keyword'],
				'collection' => $row['location'],
				'image'      => 'image/' . $row['image'],
				'href'       => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $row['product_id']),
				'badge'      => in_array('new', $tags, true) ? 'new' : (in_array('bestseller', $tags, true) ? 'bestseller' : 'ready'),
				'ship'       => $made ? 'Made to order · Ships in 10–12 days' : 'Ready to ship · Dispatches in 3–5 days',
				'wait'       => $made
			];
		}

		$this->load->model('catalog/product');

		return $this->model_catalog_product->withRolePrices($cards);
	}
}

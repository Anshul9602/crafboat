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
		$data['shop'] = $this->url->link('product/category', 'language=' . $language . '&path=100');
		$data['paper'] = $this->url->link('product/category', 'language=' . $language . '&path=104');
		$data['dept_home'] = $this->url->link('product/category', 'language=' . $language . '&path=102');
		$data['dept_storage'] = $this->url->link('product/category', 'language=' . $language . '&path=107');
		$data['dept_stationery'] = $this->url->link('product/category', 'language=' . $language . '&path=104');
		$this->load->model('design/banner');
		$data['banners'] = $this->model_design_banner->getPageBanners('Homepage');

		if (!$data['banners']) {
			$data['banners'] = [[
				'title' => 'Homepage',
				'link'  => '',
				'image' => 'catalog/view/image/craftboat/hero.png'
			]];
		}

		$data['categories'] = $this->homeCategories();
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
		$query = $this->db->query("SELECT `c`.`category_id`, `c`.`image`, `cd`.`name` FROM `" . DB_PREFIX . "category` `c` LEFT JOIN `" . DB_PREFIX . "category_description` `cd` ON (`c`.`category_id` = `cd`.`category_id`) WHERE `c`.`parent_id` = '100' AND `c`.`status` = '1' AND `cd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `c`.`category_id` <> '107' ORDER BY `c`.`sort_order` ASC");

		$categories = [];

		foreach ($query->rows as $row) {
			$categories[] = [
				'name'  => $row['name'],
				'image' => 'image/' . $row['image'],
				'href'  => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $row['category_id'])
			];
		}

		return $categories;
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

		return $cards;
	}
}

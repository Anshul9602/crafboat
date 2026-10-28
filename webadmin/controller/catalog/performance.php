<?php
namespace Opencart\Admin\Controller\Catalog;
/**
 * Product performance
 */
class Performance extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('catalog/performance');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];

		$data['breadcrumbs'] = [
			['text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', $token)],
			['text' => $this->language->get('heading_title'), 'href' => $this->url->link('catalog/performance', $token)]
		];

		$this->load->model('catalog/product');

		$total = $this->model_catalog_product->getTotalProducts([]);
		$in_stock = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "product` WHERE `status` = '1' AND `quantity` > 0")->row['total'];
		$low = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "product` WHERE `status` = '1' AND `quantity` > 0 AND `quantity` <= 5")->row['total'];
		$out = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "product` WHERE `status` = '1' AND `quantity` <= 0")->row['total'];
		$collections = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "collection` WHERE `status` = '1'")->row['total'];

		$data['stats'] = [
			['label' => $this->language->get('text_total'), 'value' => (int)$total],
			['label' => $this->language->get('text_in_stock'), 'value' => (int)$in_stock],
			['label' => $this->language->get('text_low'), 'value' => (int)$low],
			['label' => $this->language->get('text_out'), 'value' => (int)$out],
			['label' => $this->language->get('text_collections'), 'value' => (int)$collections]
		];

		$top = $this->db->query("SELECT `p`.`product_id`, `pd`.`name`, `p`.`model`, `p`.`quantity`, `p`.`price` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `p`.`status` = '1' ORDER BY `p`.`quantity` DESC LIMIT 12");
		$data['rows'] = [];

		foreach ($top->rows as $row) {
			$data['rows'][] = [
				'name'     => $row['name'],
				'model'    => $row['model'],
				'quantity' => $row['quantity'],
				'price'    => $this->currency->format((float)$row['price'], $this->config->get('config_currency')),
				'edit'     => $this->url->link('catalog/product.form', $token . '&product_id=' . $row['product_id'])
			];
		}

		$data['inventory'] = $this->url->link('catalog/product', $token);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/performance', $data));
	}
}

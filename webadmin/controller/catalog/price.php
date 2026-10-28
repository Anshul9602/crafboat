<?php
namespace Opencart\Admin\Controller\Catalog;
/**
 * Price verification
 */
class Price extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('catalog/price');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];
		$page = max(1, (int)($this->request->get['page'] ?? 1));
		$limit = (int)$this->config->get('config_pagination_admin');

		$data['breadcrumbs'] = [
			['text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', $token)],
			['text' => $this->language->get('heading_title'), 'href' => $this->url->link('catalog/price', $token)]
		];

		$this->load->model('catalog/product');

		$filter_data = [
			'start' => ($page - 1) * $limit,
			'limit' => $limit,
			'sort'  => 'p.price',
			'order' => 'ASC'
		];

		$product_total = $this->model_catalog_product->getTotalProducts([]);
		$products = $this->model_catalog_product->getProducts($filter_data);
		$data['rows'] = [];

		foreach ($products as $product) {
			$price = (float)$product['price'];
			$msrp = !empty($product['msrp']) ? (float)$product['msrp'] : $price * 2;
			$margin = $msrp > 0 ? round((($msrp - $price) / $msrp) * 100) : 0;

			$data['rows'][] = [
				'name'   => $product['name'],
				'model'  => $product['model'],
				'price'  => $this->currency->format($price, $this->config->get('config_currency')),
				'msrp'   => $this->currency->format($msrp, $this->config->get('config_currency')),
				'margin' => $margin . '%',
				'edit'   => $this->url->link('catalog/product.form', $token . '&product_id=' . $product['product_id'])
			];
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $product_total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('catalog/price', $token . '&page={page}')
		]);

		$data['inventory'] = $this->url->link('catalog/product', $token);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/price', $data));
	}
}

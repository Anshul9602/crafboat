<?php
namespace Opencart\Admin\Controller\Catalog;
/**
 * Bulk upload & export
 */
class Bulk extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('catalog/bulk');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];

		$data['breadcrumbs'] = [
			['text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', $token)],
			['text' => $this->language->get('heading_title'), 'href' => $this->url->link('catalog/bulk', $token)]
		];

		$data['inventory'] = $this->url->link('catalog/product', $token);
		$data['export'] = $this->url->link('catalog/bulk.export', $token);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/bulk', $data));
	}

	public function export(): void {
		if (!$this->user->hasPermission('access', 'catalog/product')) {
			$this->response->redirect($this->url->link('error/permission', 'user_token=' . $this->session->data['user_token']));

			return;
		}

		$this->load->model('catalog/product');

		$products = $this->model_catalog_product->getProducts(['start' => 0, 'limit' => 10000]);

		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=craftboat-products.csv');

		$out = fopen('php://output', 'w');
		fputcsv($out, ['product_id', 'name', 'model', 'sku', 'price', 'quantity', 'status', 'location']);

		foreach ($products as $product) {
			fputcsv($out, [
				$product['product_id'],
				$product['name'],
				$product['model'],
				$product['sku'] ?? '',
				$product['price'],
				$product['quantity'],
				$product['status'],
				$product['location'] ?? ''
			]);
		}

		fclose($out);
		exit;
	}
}

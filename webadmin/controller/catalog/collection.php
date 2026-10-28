<?php
namespace Opencart\Admin\Controller\Catalog;
/**
 * Class Collection
 */
class Collection extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('catalog/collection');

		$this->document->setTitle($this->language->get('heading_title'));

		$filter = (string)($this->request->get['filter'] ?? 'published');

		if (!in_array($filter, ['published', 'draft', 'unpublished'], true)) {
			$filter = 'published';
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/collection', 'user_token=' . $this->session->data['user_token'])
		];

		$token = 'user_token=' . $this->session->data['user_token'];
		$data['add'] = $this->url->link('catalog/collection.form', $token);
		$data['delete'] = $this->url->link('catalog/collection.delete', $token);
		$data['filter'] = $filter;
		$data['filter_published'] = $this->url->link('catalog/collection', $token . '&filter=published');
		$data['filter_draft'] = $this->url->link('catalog/collection', $token . '&filter=draft');
		$data['filter_unpublished'] = $this->url->link('catalog/collection', $token . '&filter=unpublished');

		$this->load->model('catalog/collection');
		$totals = $this->model_catalog_collection->getStatusTotals();
		$data['total_published'] = $totals['published'];
		$data['total_draft'] = $totals['draft'];
		$data['total_unpublished'] = $totals['unpublished'];
		$data['list'] = $this->getList($filter);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/collection', $data));
	}

	public function list(): void {
		$this->load->language('catalog/collection');

		$filter = (string)($this->request->get['filter'] ?? 'published');

		if (!in_array($filter, ['published', 'draft', 'unpublished'], true)) {
			$filter = 'published';
		}

		$this->response->setOutput($this->getList($filter));
	}

	public function getList(string $filter = 'published'): string {
		$this->load->model('catalog/collection');
		$this->load->model('tool/image');

		$data['action'] = $this->url->link('catalog/collection.list', 'user_token=' . $this->session->data['user_token'] . '&filter=' . $filter);
		$data['collections'] = [];
		$stats = $this->model_catalog_collection->getProductStats();

		foreach ($this->model_catalog_collection->getCollections($filter) as $result) {
			$stat = $stats[$result['name']] ?? ['total' => 0, 'image' => ''];
			$image = $result['image'] ?: $stat['image'];

			if ($image && is_file(DIR_IMAGE . html_entity_decode($image, ENT_QUOTES, 'UTF-8'))) {
				$thumb = $this->model_tool_image->resize($image, 96, 96);
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 96, 96);
			}

			$status = (int)$result['status'];
			$status_label = $status === 1 ? $this->language->get('text_published') : ($status === 2 ? $this->language->get('text_drafts') : $this->language->get('text_unpublished'));
			$status_class = $status === 1 ? 'published' : ($status === 2 ? 'draft' : 'unpublished');

			$data['collections'][] = [
				'collection_id' => $result['collection_id'],
				'name'          => $result['name'],
				'image'         => $thumb,
				'quantity'      => sprintf($this->language->get('text_products'), $stat['total']),
				'updated'       => sprintf($this->language->get('text_updated'), date('F j', strtotime($result['date_modified']))),
				'status'        => $status,
				'status_label'  => $status_label,
				'status_class'  => $status_class,
				'sort_order'    => $result['sort_order'],
				'edit'          => $this->url->link('catalog/collection.form', 'user_token=' . $this->session->data['user_token'] . '&collection_id=' . $result['collection_id'])
			];
		}

		return $this->load->view('catalog/collection_list', $data);
	}

	public function form(): void {
		$this->load->language('catalog/collection');

		$this->document->setTitle($this->language->get('heading_title'));

		$token = 'user_token=' . $this->session->data['user_token'];

		$data['breadcrumbs'] = [];
		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', $token)
		];
		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/collection', $token)
		];

		$data['save'] = $this->url->link('catalog/collection.save', $token);
		$data['back'] = $this->url->link('catalog/collection', $token);
		$data['delete'] = $this->url->link('catalog/collection.delete', $token);
		$data['assign'] = $this->url->link('catalog/collection.assignProduct', $token, true);
		$data['remove_product'] = $this->url->link('catalog/collection.removeProduct', $token, true);
		$data['picker'] = $this->url->link('catalog/collection.picker', $token, true);
		$data['sync_products'] = $this->url->link('catalog/collection.syncProducts', $token, true);
		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('catalog/collection');
		$this->load->model('tool/image');

		$collection_info = [];

		if (isset($this->request->get['collection_id'])) {
			$collection_info = $this->model_catalog_collection->getCollection((int)$this->request->get['collection_id']);
		}

		$data['collection_id'] = (int)($collection_info['collection_id'] ?? 0);
		$data['name'] = $collection_info['name'] ?? '';
		$data['code'] = $collection_info['code'] ?? '';
		$data['summary'] = $collection_info['summary'] ?? '';
		$data['blurb'] = $collection_info['blurb'] ?? '';
		$data['image'] = $collection_info['image'] ?? '';
		$data['video'] = $collection_info['video'] ?? '';
		$data['sort_order'] = $collection_info['sort_order'] ?? 0;
		$data['status'] = $collection_info['status'] ?? 1;
		$data['menu'] = isset($collection_info['menu']) ? (int)$collection_info['menu'] : 1;
		$data['text_form'] = $data['collection_id'] ? $this->language->get('text_edit') : $this->language->get('text_add');
		$data['page_title'] = $data['name'] !== '' ? $data['name'] : ($data['collection_id'] ? $this->language->get('text_edit') : $this->language->get('text_add'));

		$placeholder = $this->model_tool_image->resize('no_image.png', 200, 200);
		$data['placeholder'] = $placeholder;

		if ($data['image'] && is_file(DIR_IMAGE . html_entity_decode($data['image'], ENT_QUOTES, 'UTF-8'))) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 200, 200);
		} else {
			$data['thumb'] = $placeholder;
		}

		$data['preview'] = '';
		if ($data['code'] !== '') {
			$data['preview'] = HTTP_CATALOG . 'index.php?route=product/collection&collection=' . urlencode($data['code']);
		}

		$data['products'] = [];
		if ($data['name'] !== '') {
			foreach ($this->model_catalog_collection->getProducts($data['name'], 0, 200) as $product) {
				$image = $product['image'];
				if ($image && is_file(DIR_IMAGE . html_entity_decode($image, ENT_QUOTES, 'UTF-8'))) {
					$thumb = $this->model_tool_image->resize($image, 80, 80);
				} else {
					$thumb = $this->model_tool_image->resize('no_image.png', 80, 80);
				}

				$qty = (int)$product['quantity'];
				$data['products'][] = [
					'product_id'   => $product['product_id'],
					'name'         => $product['name'],
					'model'        => $product['model'],
					'image'        => $thumb,
					'price'        => $this->currency->format((float)$product['price'], $this->config->get('config_currency')),
					'availability' => $qty > 0 ? sprintf($this->language->get('text_in_stock'), $qty) : $this->language->get('text_out_stock'),
					'status_label' => (int)$product['status'] ? $this->language->get('text_active') : $this->language->get('text_inactive'),
					'edit'         => $this->url->link('catalog/product.form', $token . '&product_id=' . $product['product_id'])
				];
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/collection_form', $data));
	}

	public function save(): void {
		$this->load->language('catalog/collection');

		$json = [];

		if (!$this->user->hasPermission('modify', 'catalog/collection')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		$post_info = $this->request->post + [
			'collection_id' => 0,
			'name'          => '',
			'code'          => '',
			'summary'       => '',
			'blurb'         => '',
			'image'         => '',
			'video'         => '',
			'sort_order'    => 0,
			'status'        => 1,
			'menu'          => 1
		];

		if (!oc_validate_length($post_info['name'], 1, 255)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		$this->load->model('catalog/collection');

		$code = trim((string)$post_info['code']);
		if ($code === '') {
			$code = $this->model_catalog_collection->makeCode((string)$post_info['name']);
		} else {
			$code = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $code) ?? '');
			$code = trim($code, '-');
		}
		$post_info['code'] = $code;

		if ($this->model_catalog_collection->codeExists($code, (int)$post_info['collection_id'])) {
			$json['error']['code'] = $this->language->get('error_code');
		}

		$post_info['menu'] = !empty($post_info['menu']) ? 1 : 0;

		if (!$json) {
			if (!(int)$post_info['collection_id']) {
				$collection_id = $this->model_catalog_collection->addCollection($post_info);
			} else {
				$collection_id = (int)$post_info['collection_id'];
				$this->model_catalog_collection->editCollection($collection_id, $post_info);
			}

			$json['collection_id'] = $collection_id;
			$json['success'] = $this->language->get('text_success');

			if (empty($this->request->post['stay'])) {
				$json['redirect'] = $this->url->link('catalog/collection.form', 'user_token=' . $this->session->data['user_token'] . '&collection_id=' . $collection_id, true);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function assignProduct(): void {
		$this->load->language('catalog/collection');

		$json = [];

		if (!$this->user->hasPermission('modify', 'catalog/collection')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$product_id = (int)($this->request->post['product_id'] ?? 0);
		$location = (string)($this->request->post['location'] ?? '');

		if (!$product_id || $location === '') {
			$json['error'] = $this->language->get('error_product');
		}

		if (!$json) {
			$this->load->model('catalog/collection');
			$this->model_catalog_collection->assignProduct($product_id, $location);
			$json['success'] = $this->language->get('text_product_added');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function removeProduct(): void {
		$this->load->language('catalog/collection');

		$json = [];

		if (!$this->user->hasPermission('modify', 'catalog/collection')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$product_id = (int)($this->request->post['product_id'] ?? 0);

		if (!$product_id) {
			$json['error'] = $this->language->get('error_product');
		}

		if (!$json) {
			$this->load->model('catalog/collection');
			$this->model_catalog_collection->removeProduct($product_id);
			$json['success'] = $this->language->get('text_product_removed');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function picker(): void {
		$json = [
			'products' => [],
			'total'    => 0,
			'page'     => 1,
			'pages'    => 1,
			'selected' => []
		];

		try {
			$this->load->language('catalog/collection');
			$this->load->model('catalog/collection');
			$this->load->model('tool/image');

			$location = (string)($this->request->get['location'] ?? '');
			$filter_name = (string)($this->request->get['filter_name'] ?? '');
			$page = max(1, (int)($this->request->get['page'] ?? 1));
			$limit = 50;
			$start = ($page - 1) * $limit;

			$selected = array_flip($this->model_catalog_collection->getProductIds($location));
			$result = $this->model_catalog_collection->getPickerProducts($filter_name, $start, $limit);
			$products = [];
			$placeholder = $this->model_tool_image->resize('no_image.png', 64, 64);

			foreach ($result['products'] as $product) {
				$image = (string)$product['image'];
				$thumb = $placeholder;

				if ($image && is_file(DIR_IMAGE . html_entity_decode($image, ENT_QUOTES, 'UTF-8'))) {
					try {
						$thumb = $this->model_tool_image->resize($image, 64, 64);
					} catch (\Throwable $e) {
						$thumb = $placeholder;
					}
				}

				$products[] = [
					'product_id' => (int)$product['product_id'],
					'name'       => (string)$product['name'],
					'model'      => (string)$product['model'],
					'image'      => $thumb,
					'price'      => $this->currency->format((float)$product['price'], $this->config->get('config_currency')),
					'checked'    => isset($selected[(int)$product['product_id']]),
					'in_other'   => $product['location'] !== '' && $product['location'] !== $location
				];
			}

			$json = [
				'products' => $products,
				'total'    => $result['total'],
				'page'     => $page,
				'pages'    => max(1, (int)ceil($result['total'] / $limit)),
				'selected' => array_map('intval', array_keys($selected))
			];
		} catch (\Throwable $e) {
			$json['error'] = $e->getMessage();
		}

		$this->response->addHeader('Content-Type: application/json; charset=utf-8');
		$this->response->setOutput(json_encode($json, JSON_INVALID_UTF8_SUBSTITUTE));
	}

	public function syncProducts(): void {
		$this->load->language('catalog/collection');

		$json = [];

		if (!$this->user->hasPermission('modify', 'catalog/collection')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$location = (string)($this->request->post['location'] ?? '');
		$product_ids = isset($this->request->post['product_id']) ? (array)$this->request->post['product_id'] : [];

		if ($location === '') {
			$json['error'] = $this->language->get('error_product');
		}

		if (!$json) {
			$this->load->model('catalog/collection');
			$this->model_catalog_collection->syncProducts($location, $product_ids);
			$json['success'] = $this->language->get('text_products_synced');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function delete(): void {
		$this->load->language('catalog/collection');

		$json = [];

		$selected = isset($this->request->post['selected']) ? (array)$this->request->post['selected'] : [];

		if (!$this->user->hasPermission('modify', 'catalog/collection')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('catalog/collection');

			foreach ($selected as $collection_id) {
				$this->model_catalog_collection->deleteCollection((int)$collection_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

<?php
namespace Opencart\Admin\Controller\Catalog;
/**
 * Class Collection
 */
class Collection extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('catalog/collection');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/collection', 'user_token=' . $this->session->data['user_token'])
		];

		$data['add'] = $this->url->link('catalog/collection.form', 'user_token=' . $this->session->data['user_token']);
		$data['delete'] = $this->url->link('catalog/collection.delete', 'user_token=' . $this->session->data['user_token']);
		$data['list'] = $this->getList();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/collection', $data));
	}

	public function list(): void {
		$this->load->language('catalog/collection');

		$this->response->setOutput($this->getList());
	}

	public function getList(): string {
		$this->load->model('catalog/collection');

		$data['action'] = $this->url->link('catalog/collection.list', 'user_token=' . $this->session->data['user_token']);
		$data['collections'] = [];

		foreach ($this->model_catalog_collection->getCollections() as $result) {
			$data['collections'][] = [
				'collection_id' => $result['collection_id'],
				'name'          => $result['name'],
				'sort_order'    => $result['sort_order'],
				'status'        => $result['status'],
				'edit'          => $this->url->link('catalog/collection.form', 'user_token=' . $this->session->data['user_token'] . '&collection_id=' . $result['collection_id'])
			];
		}

		return $this->load->view('catalog/collection_list', $data);
	}

	public function form(): void {
		$this->load->language('catalog/collection');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/collection', 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link('catalog/collection.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('catalog/collection', 'user_token=' . $this->session->data['user_token']);

		$collection_info = [];

		if (isset($this->request->get['collection_id'])) {
			$this->load->model('catalog/collection');

			$collection_info = $this->model_catalog_collection->getCollection((int)$this->request->get['collection_id']);
		}

		$data['collection_id'] = $collection_info['collection_id'] ?? 0;
		$data['name'] = $collection_info['name'] ?? '';
		$data['sort_order'] = $collection_info['sort_order'] ?? 0;
		$data['status'] = $collection_info['status'] ?? 1;
		$data['text_form'] = $data['collection_id'] ? $this->language->get('text_edit') : $this->language->get('text_add');

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
			'sort_order'    => 0,
			'status'        => 1
		];

		if (!oc_validate_length($post_info['name'], 1, 255)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('catalog/collection');

			if (!(int)$post_info['collection_id']) {
				$post_info['code'] = $this->model_catalog_collection->makeCode((string)$post_info['name']);
				$this->model_catalog_collection->addCollection($post_info);
			} else {
				$this->model_catalog_collection->editCollection((int)$post_info['collection_id'], $post_info);
			}

			$json['success'] = $this->language->get('text_success');
			$json['redirect'] = $this->url->link('catalog/collection', 'user_token=' . $this->session->data['user_token'], true);
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

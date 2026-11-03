<?php
namespace Opencart\Admin\Controller\Sale;

class Issue extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->document->setTitle('Issues');

		$token = 'user_token=' . $this->session->data['user_token'];

		$data['heading_title'] = 'Issues';
		$data['text_intro'] = 'Review orders that had customer service issues.';
		$data['text_empty'] = 'No reported issues yet. When retailers report problems on orders, they will show up here.';
		$data['orders_href'] = $this->url->link('sale/order', $token);
		$data['tabs'] = [
			['label' => 'Reported issues', 'active' => true],
			['label' => 'Late shipments', 'active' => false],
			['label' => 'Canceled orders', 'active' => false],
		];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/issue', $data));
	}
}

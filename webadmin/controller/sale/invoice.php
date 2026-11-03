<?php
namespace Opencart\Admin\Controller\Sale;

/**
 * Legacy alias — Create order uses sale/order.create
 */
class Invoice extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->response->redirect($this->url->link('sale/order.create', 'user_token=' . $this->session->data['user_token']));
	}
}

<?php
namespace Opencart\Catalog\Controller\Common;

/**
 * Marketing landing page (first visitor entry).
 */
class Landing extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		if ($this->customer->isLogged() || !empty($this->session->data['landing_passed'])) {
			$this->response->redirect($this->url->link('common/home', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''), true));

			return;
		}

		$language = (string)$this->config->get('config_language');

		$this->document->setTitle('Craft Boat Wholesale');
		$this->document->setDescription('Craft Boat wholesale home for approved stockists. Handmade design and manufacturing from Jaipur.');

		$data['language'] = $language;
		$data['login'] = $this->url->link('account/register', 'language=' . $language . '&account=login');
		$data['contact'] = $this->url->link('information/contact', 'language=' . $language);
		$data['about'] = $this->url->link('information/about', 'language=' . $language);
		$data['shop_all'] = $this->url->link('product/category', 'language=' . $language . '&path=100');
		$data['collection'] = $this->url->link('product/collection', 'language=' . $language);
		$data['register'] = $this->url->link('account/register', 'language=' . $language . '&account=trade');
		$data['lead'] = $this->url->link('account/register.lead', 'language=' . $language);
		$data['faire'] = 'https://www.faire.com/';
		$data['retail'] = 'https://www.seedsofanaar.com/';
		$data['asset'] = 'image/catalog/craftboat/landing/';
		$data['theme'] = 'catalog/view/stylesheet/craftboat.css?v=landingbg1';
		$data['name'] = $this->config->get('config_name');
		$data['base'] = $this->config->get('config_url');
		$data['products'] = [
			$data['asset'] . 'product-1.png',
			$data['asset'] . 'product-2.png',
			$data['asset'] . 'product-3.png',
			$data['asset'] . 'product-4.png',
			$data['asset'] . 'product-5.png',
			$data['asset'] . 'product-6.png'
		];

		$this->response->setOutput($this->load->view('common/landing', $data));
	}
}

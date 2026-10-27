<?php
namespace Opencart\Catalog\Controller\Information;
/**
 * About Craft Boat
 */
class About extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		$language = (string)$this->config->get('config_language');

		$this->document->setTitle('About Craft Boat');
		$this->document->setDescription('A Jaipur studio making long-lasting paper and textile objects by hand, one product at a time.');

		$data['shop'] = $this->url->link('product/category', 'language=' . $language . '&path=100');
		$data['register'] = $this->url->link('account/register', 'language=' . $language . '&account=trade');
		$data['contact'] = $this->url->link('information/contact', 'language=' . $language);
		$data['paper'] = $this->url->link('product/collection', 'language=' . $language . '&collection=stationery-paper-goods-moss-green-story');
		$data['collaborations'] = 'https://shopcraftboat.com/index.php?route=common/collab';
		$data['email'] = 'mailto:info@shopcraftboat.com';

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/about', $data));
	}
}

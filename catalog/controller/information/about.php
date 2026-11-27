<?php
namespace Opencart\Catalog\Controller\Information;
/**
 * About Craft Boat — former marketing landing story.
 */
class About extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		$language = (string)$this->config->get('config_language');

		$this->document->setTitle('About Us · Craft Boat');
		$this->document->setDescription('Craft Boat is a multidisciplinary design and manufacturing studio in Jaipur, making handmade paper and textile objects since 2015.');

		$data['shop'] = $this->url->link('product/category', 'language=' . $language . '&path=100');
		$data['register'] = $this->url->link('account/register', 'language=' . $language . '&account=wholesale');
		$data['contact'] = $this->url->link('information/contact', 'language=' . $language);
		$data['paper'] = $this->url->link('product/collection', 'language=' . $language . '&collection=stationery-paper-goods-moss-green-story');
		$data['collaborations'] = 'https://shopcraftboat.com/index.php?route=common/collab';
		$data['email'] = 'mailto:info@shopcraftboat.com';
		$data['retail'] = 'https://www.seedsofanaar.com/';
		$data['asset'] = 'image/catalog/craftboat/landing/';
		$data['products'] = [
			$data['asset'] . 'product-1.png',
			$data['asset'] . 'product-2.png',
			$data['asset'] . 'product-3.png',
			$data['asset'] . 'product-4.png',
			$data['asset'] . 'product-5.png',
			$data['asset'] . 'product-6.png'
		];

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/about', $data));
	}
}

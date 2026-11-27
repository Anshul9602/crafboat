<?php
namespace Opencart\Catalog\Controller\Account;

/**
 * Post-login wholesale welcome screen.
 */
class Welcome extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		$this->load->language('account/account');

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/welcome', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$language = (string)$this->config->get('config_language');
		$token = (string)($this->session->data['customer_token'] ?? '');

		$this->document->setTitle('Welcome · Craft Boat');

		$data['firstname'] = (string)$this->customer->getFirstName();
		$data['explore'] = $this->url->link('product/category', 'language=' . $language . '&path=100_109');
		$data['contact'] = $this->url->link('information/contact', 'language=' . $language);
		$data['account'] = $this->url->link('account/account', 'language=' . $language . ($token !== '' ? '&customer_token=' . $token : ''));
		$data['asset'] = 'catalog/view/image/craftboat/welcome/';
		$data['products'] = $this->bestsellerThumbs(12);
		$data['seal'] = $data['asset'] . 'seal.svg';
		$data['mark'] = $data['asset'] . 'mark.svg';

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/welcome', $data));
	}

	/**
	 * Welcome strip: bestseller products (fallback to featured, then newest).
	 *
	 * @return array<int, array<string, string>>
	 */
	private function bestsellerThumbs(int $limit): array {
		$language_id = (int)$this->config->get('config_language_id');
		$language = (string)$this->config->get('config_language');

		$rows = $this->db->query("SELECT `p`.`product_id`, `p`.`image`, `pd`.`name` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `p`.`image` <> '' AND `pd`.`language_id` = '" . $language_id . "' AND FIND_IN_SET('bestseller', IFNULL(`pd`.`tag`, '')) ORDER BY `p`.`sort_order` ASC, `p`.`product_id` DESC LIMIT " . (int)$limit)->rows;

		if (count($rows) < $limit) {
			$exclude = array_map(static fn(array $row): int => (int)$row['product_id'], $rows);
			$need = $limit - count($rows);
			$extra_sql = "SELECT `p`.`product_id`, `p`.`image`, `pd`.`name` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `p`.`image` <> '' AND `pd`.`language_id` = '" . $language_id . "' AND FIND_IN_SET('featured', IFNULL(`pd`.`tag`, ''))";

			if ($exclude) {
				$extra_sql .= " AND `p`.`product_id` NOT IN (" . implode(',', $exclude) . ")";
			}

			$extra_sql .= " ORDER BY `p`.`sort_order` ASC, `p`.`product_id` DESC LIMIT " . (int)$need;
			$rows = array_merge($rows, $this->db->query($extra_sql)->rows);
		}

		if (count($rows) < $limit) {
			$exclude = array_map(static fn(array $row): int => (int)$row['product_id'], $rows);
			$need = $limit - count($rows);
			$extra_sql = "SELECT `p`.`product_id`, `p`.`image`, `pd`.`name` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `p`.`image` <> '' AND `pd`.`language_id` = '" . $language_id . "'";

			if ($exclude) {
				$extra_sql .= " AND `p`.`product_id` NOT IN (" . implode(',', $exclude) . ")";
			}

			$extra_sql .= " ORDER BY `p`.`date_added` DESC, `p`.`product_id` DESC LIMIT " . (int)$need;
			$rows = array_merge($rows, $this->db->query($extra_sql)->rows);
		}

		$products = [];

		foreach ($rows as $row) {
			$products[] = [
				'name'  => (string)$row['name'],
				'image' => 'image/' . ltrim((string)$row['image'], '/'),
				'href'  => $this->url->link('product/product', 'language=' . $language . '&product_id=' . (int)$row['product_id'])
			];
		}

		return $products;
	}
}

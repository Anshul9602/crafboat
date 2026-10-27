<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Collection
 */
class Collection extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		$language = (string)$this->config->get('config_language');
		$this->load->model('catalog/collection');
		$rows = $this->model_catalog_collection->getCollections();
		$key = (string)($this->request->get['collection'] ?? ($rows[0]['code'] ?? ''));
		$legacy = [
			'saffron'      => 'classic-stripe',
			'marbled'      => 'ocean-collection',
			'holiday'      => 'holiday-collection-ready-to-ship',
			'holiday-2026' => 'holiday-collection-ready-to-ship'
		];

		if (isset($legacy[$key])) {
			$this->response->redirect($this->url->link('product/collection', 'language=' . $language . '&collection=' . $legacy[$key]));

			return;
		}
		$collection = $this->model_catalog_collection->getCollectionByCode($key);

		if (!$collection && $rows) {
			$collection = $rows[0];
			$key = (string)$collection['code'];
		}

		if (!$collection) {
			$this->response->redirect($this->url->link('common/home', 'language=' . $language));

			return;
		}
		$availability = (string)($this->request->get['availability'] ?? 'all');

		if (!in_array($availability, ['all', 'ready', 'made'], true)) {
			$availability = 'all';
		}

		$sort = (string)($this->request->get['sort'] ?? 'featured');

		if ($sort === 'name') {
			$sort = 'name_asc';
		}

		if (!in_array($sort, ['featured', 'name_asc', 'name_desc', 'price_asc', 'price_desc', 'newest', 'sku'], true)) {
			$sort = 'featured';
		}

		$this->document->setTitle($collection['name']);
		$this->document->setDescription($collection['summary']);

		$collection['code'] = $key;
		$collection['heading'] = $collection['name'];
		$collection['location'] = $collection['name'];
		$this->load->model('design/banner');
		$data['banners'] = $this->model_design_banner->getPageBanners($collection['name']);

		if ($data['banners']) {
			$collection['image'] = $data['banners'][0]['image'];
		}
		$data['collection'] = $collection;
		$data['collections'] = [];
		$data['availability'] = $availability;
		$data['sort'] = $sort;
		$limit = 16;
		$page = max(1, (int)($this->request->get['page'] ?? 1));
		$total = $this->productTotal($collection['location'], $availability);
		$pages = max(1, (int)ceil($total / $limit));

		if ($page > $pages) {
			$page = $pages;
		}

		$data['products'] = $this->products($collection['location'], $availability, $sort, ($page - 1) * $limit, $limit);
		$data['register'] = $this->url->link('account/register', 'language=' . $language . '&account=trade');
		$data['logged'] = $this->customer->isLogged();
		$data['login'] = $this->url->link('account/login', 'language=' . $language);
		$data['account'] = $this->url->link('account/account', 'language=' . $language . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['about'] = $this->url->link('information/about', 'language=' . $language);

		foreach ($rows as $item) {
			$data['collections'][] = [
				'name'   => $item['name'],
				'blurb'  => $item['blurb'],
				'active' => $item['code'] === $key,
				'href'   => $this->url->link('product/collection', 'language=' . $language . '&collection=' . $item['code'])
			];
		}

		$base = 'language=' . $language . '&collection=' . $key . '&sort=' . $sort;
		$data['filter_all'] = $this->url->link('product/collection', $base . '&availability=all');
		$data['filter_ready'] = $this->url->link('product/collection', $base . '&availability=ready');
		$data['filter_made'] = $this->url->link('product/collection', $base . '&availability=made');
		$data['sort_action'] = $this->url->link('product/collection', 'language=' . $language . '&collection=' . $key . '&availability=' . $availability);
		$page_query = 'language=' . $language . '&collection=' . $key . '&availability=' . $availability . '&sort=' . $sort;
		$data['pagination'] = $total > $limit ? $this->load->controller('common/pagination', [
			'total' => $total,
			'page'  => $page,
			'limit' => $limit,
			'url'   => $this->url->link('product/collection', $page_query . '&page={page}')
		]) : '';
		$data['results'] = $total
			? sprintf('Showing %d to %d of %d', (($page - 1) * $limit) + 1, min($page * $limit, $total), $total)
			: '';

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('product/collection', $data));
	}

	/**
	 * @return array<int, array<string, mixed>>
	 */
	private function products(string $location, string $availability, string $sort, int $start, int $limit): array {
		$sql = $this->productSql($location, $availability);
		$sql .= $this->orderSql($sort);
		$sql .= " LIMIT " . (int)$start . "," . (int)$limit;

		$query = $this->db->query($sql);
		$cards = [];

		foreach ($query->rows as $row) {
			$tags = array_map('trim', explode(',', (string)$row['tag']));
			$made = in_array('made', $tags, true);

			$cards[] = [
				'product_id' => $row['product_id'],
				'name'       => $row['name'],
				'sku'        => $row['model'],
				'category'   => $row['meta_keyword'],
				'collection' => $row['location'],
				'image'      => 'image/' . $row['image'],
				'href'       => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $row['product_id']),
				'badge'      => in_array('new', $tags, true) ? 'new' : (in_array('bestseller', $tags, true) ? 'bestseller' : 'ready'),
				'ship'       => $made ? 'Made to order · Ships in 10–12 days' : 'Ready to ship · Dispatches in 3–5 days',
				'wait'       => $made
			];
		}

		$this->load->model('catalog/product');

		return $this->model_catalog_product->withRolePrices($cards);
	}

	private function productTotal(string $location, string $availability): int {
		$sql = $this->productSql($location, $availability);
		$from = strpos($sql, ' FROM ');
		$query = $this->db->query("SELECT COUNT(*) AS `total`" . substr($sql, $from));

		return (int)$query->row['total'];
	}

	private function orderSql(string $sort): string {
		$orders = [
			'name_asc'   => " ORDER BY LCASE(`pd`.`name`) ASC",
			'name_desc'  => " ORDER BY LCASE(`pd`.`name`) DESC",
			'price_asc'  => " ORDER BY `p`.`price` ASC, LCASE(`pd`.`name`) ASC",
			'price_desc' => " ORDER BY `p`.`price` DESC, LCASE(`pd`.`name`) ASC",
			'newest'     => " ORDER BY `p`.`date_added` DESC, `p`.`product_id` DESC",
			'sku'        => " ORDER BY `p`.`model` ASC"
		];

		return $orders[$sort] ?? " ORDER BY `p`.`sort_order` ASC, `p`.`product_id` ASC";
	}

	private function productSql(string $location, string $availability): string {
		$sql = "SELECT `p`.`product_id`, `p`.`model`, `p`.`image`, `p`.`location`, `pd`.`name`, `pd`.`tag`, `pd`.`meta_keyword` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `p`.`location` = '" . $this->db->escape($location) . "'";

		if ($availability === 'ready') {
			$sql .= " AND FIND_IN_SET('ready', `pd`.`tag`) AND NOT FIND_IN_SET('made', `pd`.`tag`)";
		}

		if ($availability === 'made') {
			$sql .= " AND FIND_IN_SET('made', `pd`.`tag`)";
		}

		return $sql;
	}
}

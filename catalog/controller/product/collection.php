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
		$key = (string)($this->request->get['collection'] ?? 'saffron');
		$catalog = $this->catalog();

		if (!isset($catalog[$key])) {
			$key = 'saffron';
		}

		$collection = $catalog[$key];
		$availability = (string)($this->request->get['availability'] ?? 'all');

		if (!in_array($availability, ['all', 'ready', 'made'], true)) {
			$availability = 'all';
		}

		$sort = (string)($this->request->get['sort'] ?? 'featured');

		if (!in_array($sort, ['featured', 'name'], true)) {
			$sort = 'featured';
		}

		$this->document->setTitle($collection['name']);
		$this->document->setDescription($collection['summary']);

		$collection['code'] = $key;
		$this->load->model('design/banner');
		$data['banners'] = $this->model_design_banner->getPageBanners($collection['name']);

		if (!$data['banners']) {
			$data['banners'] = [[
				'title' => $collection['name'],
				'link'  => '',
				'image' => $collection['image']
			]];
		}

		$collection['image'] = $data['banners'][0]['image'];
		$data['collection'] = $collection;
		$data['collections'] = [];
		$data['availability'] = $availability;
		$data['sort'] = $sort;
		$data['products'] = $this->products($collection['location'], $availability, $sort);
		$data['register'] = $this->url->link('account/register', 'language=' . $language . '&account=trade');
		$data['logged'] = $this->customer->isLogged();
		$data['login'] = $this->url->link('account/login', 'language=' . $language);
		$data['account'] = $this->url->link('account/account', 'language=' . $language . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['about'] = $this->url->link('information/about', 'language=' . $language);

		foreach ($catalog as $code => $item) {
			$data['collections'][] = [
				'name'   => $item['name'],
				'blurb'  => $item['blurb'],
				'active' => $code === $key,
				'href'   => $this->url->link('product/collection', 'language=' . $language . '&collection=' . $code)
			];
		}

		$base = 'language=' . $language . '&collection=' . $key . '&sort=' . $sort;
		$data['filter_all'] = $this->url->link('product/collection', $base . '&availability=all');
		$data['filter_ready'] = $this->url->link('product/collection', $base . '&availability=ready');
		$data['filter_made'] = $this->url->link('product/collection', $base . '&availability=made');
		$data['sort_action'] = $this->url->link('product/collection', 'language=' . $language . '&collection=' . $key . '&availability=' . $availability);

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('product/collection', $data));
	}

	/**
	 * @return array<string, array<string, string>>
	 */
	private function catalog(): array {
		return [
			'saffron' => [
				'name'     => 'Saffron Valley',
				'location' => 'Saffron valley',
				'blurb'    => 'Florals and sun-warmed block print.',
				'summary'  => 'A sun-warmed family of garden florals, soft greens and saffron cloth—built to merchandise across paper, textile and small home objects.',
				'image'    => 'catalog/view/image/craftboat/collection-hero.png',
				'heading'  => 'The Saffron Valley assortment'
			],
			'marbled' => [
				'name'     => 'Marbled Stories',
				'location' => 'Marbled Stories',
				'blurb'    => 'One-of-one colour pulled by hand.',
				'summary'  => 'Hand-marbled colour, pulled sheet by sheet and finished into boxes, trays and desk objects for a collected shelf.',
				'image'    => 'catalog/view/image/craftboat/collection-marbled.png',
				'heading'  => 'The Marbled Stories assortment'
			],
			'holiday' => [
				'name'     => 'Holiday 2026',
				'location' => 'Holiday 2026',
				'blurb'    => 'Keepsake gifting for the season.',
				'summary'  => 'Seasonal paper, textile and home pieces gathered for a keepsake gifting table.',
				'image'    => 'catalog/view/image/craftboat/collection-holiday.png',
				'heading'  => 'The Holiday 2026 assortment'
			]
		];
	}

	/**
	 * @return array<int, array<string, mixed>>
	 */
	private function products(string $location, string $availability, string $sort): array {
		$sql = "SELECT `p`.`product_id`, `p`.`model`, `p`.`image`, `p`.`location`, `pd`.`name`, `pd`.`tag`, `pd`.`meta_keyword` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `p`.`location` = '" . $this->db->escape($location) . "'";

		if ($availability === 'ready') {
			$sql .= " AND FIND_IN_SET('ready', `pd`.`tag`) AND NOT FIND_IN_SET('made', `pd`.`tag`)";
		}

		if ($availability === 'made') {
			$sql .= " AND FIND_IN_SET('made', `pd`.`tag`)";
		}

		$sql .= ($sort === 'name') ? " ORDER BY LCASE(`pd`.`name`) ASC" : " ORDER BY `p`.`sort_order` ASC";

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

		return $cards;
	}
}

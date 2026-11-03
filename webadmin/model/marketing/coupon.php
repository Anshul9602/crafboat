<?php
namespace Opencart\Admin\Model\Marketing;
/**
 * Class Coupon
 *
 * Can be loaded using $this->load->model('marketing/coupon');
 *
 * @package Opencart\Admin\Model\Marketing
 */
class Coupon extends \Opencart\System\Engine\Model {
	/**
	 * Add Coupon
	 *
	 * Create a new coupon record in the database.
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int
	 *
	 * @example
	 *
	 * $coupon_data = [
	 *     'name'       => 'Coupon Name',
	 *     'code'       => 'Coupon Code',
	 *     'discount'   => 0.0000,
	 *     'type'       => 'F',
	 *     'total'      => 0.0000,
	 *     'logged'     => 0,
	 *     'shipping'   => 0,
	 *     'date_start' => '2021-01-01',
	 *     'date_end'   => '2021-01-31'
	 * ];
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $coupon_id = $this->model_marketing_coupon->addCoupon($coupon_data);
	 */
	public function addCoupon(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "coupon` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "', `discount` = '" . (float)$data['discount'] . "', `type` = '" . $this->db->escape((string)$data['type']) . "', `total` = '" . (float)$data['total'] . "', `logged` = '" . (isset($data['logged']) ? (bool)$data['logged'] : 0) . "', `shipping` = '" . (isset($data['shipping']) ? (bool)$data['shipping'] : 0) . "', `date_start` = '" . $this->db->escape((string)$data['date_start']) . "', `date_end` = '" . $this->db->escape((string)$data['date_end']) . "', `uses_total` = '" . (int)$data['uses_total'] . "', `uses_customer` = '" . (int)$data['uses_customer'] . "', `status` = '" . (bool)($data['status'] ?? 0) . "', `date_added` = NOW()");

		$coupon_id = $this->db->getLastId();

		if (isset($data['coupon_product'])) {
			foreach ($data['coupon_product'] as $product_id) {
				$this->addProduct($coupon_id, $product_id);
			}
		}

		if (isset($data['coupon_category'])) {
			foreach ($data['coupon_category'] as $category_id) {
				$this->addCategory($coupon_id, $category_id);
			}
		}

		return $coupon_id;
	}

	/**
	 * Edit Coupon
	 *
	 * Edit coupon record in the database.
	 *
	 * @param int                  $coupon_id primary key of the coupon record
	 * @param array<string, mixed> $data      array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $coupon_data = [
	 *     'name'       => 'Coupon Name',
	 *     'code'       => 'Coupon Code',
	 *     'discount'   => 0.0000,
	 *     'type'       => 'F',
	 *     'total'      => 0.0000,
	 *     'logged'     => 0,
	 *     'shipping'   => 0,
	 *     'date_start' => '2021-01-01',
	 *     'date_end'   => '2021-01-31'
	 * ];
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->editCoupon($coupon_id, $coupon_data);
	 */
	public function editCoupon(int $coupon_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "coupon` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "', `discount` = '" . (float)$data['discount'] . "', `type` = '" . $this->db->escape((string)$data['type']) . "', `total` = '" . (float)$data['total'] . "', `logged` = '" . (isset($data['logged']) ? (bool)$data['logged'] : 0) . "', `shipping` = '" . (isset($data['shipping']) ? (bool)$data['shipping'] : 0) . "', `date_start` = '" . $this->db->escape((string)$data['date_start']) . "', `date_end` = '" . $this->db->escape((string)$data['date_end']) . "', `uses_total` = '" . (int)$data['uses_total'] . "', `uses_customer` = '" . (int)$data['uses_customer'] . "', `status` = '" . (bool)($data['status'] ?? 0) . "' WHERE `coupon_id` = '" . (int)$coupon_id . "'");

		$this->deleteProducts($coupon_id);

		if (isset($data['coupon_product'])) {
			foreach ($data['coupon_product'] as $product_id) {
				$this->addProduct($coupon_id, $product_id);
			}
		}

		$this->deleteCategories($coupon_id);

		if (isset($data['coupon_category'])) {
			foreach ($data['coupon_category'] as $category_id) {
				$this->addCategory($coupon_id, $category_id);
			}
		}
	}

	/**
	 * Delete Coupon
	 *
	 * Delete coupon record in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->deleteCoupon($coupon_id);
	 */
	public function deleteCoupon(int $coupon_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "coupon` WHERE `coupon_id` = '" . (int)$coupon_id . "'");

		$this->deleteProducts($coupon_id);
		$this->deleteCategories($coupon_id);
		$this->deleteHistories($coupon_id);
	}

	/**
	 * Get Coupon
	 *
	 * Get the record of the coupon record in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return array<string, mixed> coupon record that has coupon ID
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $coupon_info = $this->model_marketing_coupon->getCoupon($coupon_id);
	 */
	public function getCoupon(int $coupon_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "coupon` WHERE `coupon_id` = '" . (int)$coupon_id . "'");

		return $query->row;
	}

	/**
	 * Get Coupon By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $coupon_info = $this->model_marketing_coupon->getCouponByCode($code);
	 */
	public function getCouponByCode(string $code): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "coupon` WHERE `code` = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	/**
	 * Get Coupons
	 *
	 * Get the record of the coupon records in the database.
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> coupon records
	 *
	 * @example
	 *
	 * $filter_data = [
	 *     'sort'  => 'name',
	 *     'order' => 'DESC',
	 *     'start' => 0,
	 *     'limit' => 10
	 * ];
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $results = $this->model_marketing_coupon->getCoupons($filter_data);
	 */
	public function getCoupons(array $data = []): array {
		$sql = "SELECT `c`.`coupon_id`, `c`.`name`, `c`.`code`, `c`.`type`, `c`.`discount`, `c`.`date_start`, `c`.`date_end`, `c`.`status`,
			(SELECT COUNT(*) FROM `" . DB_PREFIX . "coupon_product` `cp` WHERE `cp`.`coupon_id` = `c`.`coupon_id`) AS `product_total`,
			(SELECT COUNT(*) FROM `" . DB_PREFIX . "coupon_category` `cc` WHERE `cc`.`coupon_id` = `c`.`coupon_id`) AS `category_total`,
			(SELECT COUNT(DISTINCT `ch`.`order_id`) FROM `" . DB_PREFIX . "coupon_history` `ch` WHERE `ch`.`coupon_id` = `c`.`coupon_id`) AS `order_total`,
			(SELECT COALESCE(SUM(`o`.`total`), 0) FROM `" . DB_PREFIX . "coupon_history` `ch` LEFT JOIN `" . DB_PREFIX . "order` `o` ON (`ch`.`order_id` = `o`.`order_id`) WHERE `ch`.`coupon_id` = `c`.`coupon_id` AND `o`.`order_status_id` > '0') AS `sales_total`
			FROM `" . DB_PREFIX . "coupon` `c`";

		$sql .= $this->getFilterSql($data);

		$sort_data = [
			'name',
			'code',
			'discount',
			'date_start',
			'date_end',
			'status'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY `c`.`" . $data['sort'] . "`";
		} else {
			$sql .= " ORDER BY `c`.`date_start`";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Build WHERE clause for coupon list filters.
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return string
	 */
	private function getFilterSql(array $data = []): string {
		$implode = [];

		if (!empty($data['filter_search'])) {
			$search = $this->db->escape((string)$data['filter_search']);

			$implode[] = "(`c`.`name` LIKE '%" . $search . "%' OR `c`.`code` LIKE '%" . $search . "%'
				OR EXISTS (SELECT 1 FROM `" . DB_PREFIX . "coupon_product` `cp` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`cp`.`product_id` = `pd`.`product_id`) WHERE `cp`.`coupon_id` = `c`.`coupon_id` AND `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `pd`.`name` LIKE '%" . $search . "%')
				OR EXISTS (SELECT 1 FROM `" . DB_PREFIX . "coupon_category` `cc` LEFT JOIN `" . DB_PREFIX . "category_description` `cd` ON (`cc`.`category_id` = `cd`.`category_id`) WHERE `cc`.`coupon_id` = `c`.`coupon_id` AND `cd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `cd`.`name` LIKE '%" . $search . "%'))";
		}

		$today = date('Y-m-d');

		if (!empty($data['filter_tab']) && $data['filter_tab'] !== 'all') {
			if ($data['filter_tab'] === 'active') {
				$implode[] = "`c`.`status` = '1' AND `c`.`date_start` <= '" . $this->db->escape($today) . "' AND `c`.`date_end` >= '" . $this->db->escape($today) . "'";
			} elseif ($data['filter_tab'] === 'scheduled') {
				$implode[] = "`c`.`status` = '1' AND `c`.`date_start` > '" . $this->db->escape($today) . "'";
			} elseif ($data['filter_tab'] === 'completed') {
				$implode[] = "(`c`.`status` = '0' OR `c`.`date_end` < '" . $this->db->escape($today) . "')";
			}
		}

		if ($implode) {
			return " WHERE " . implode(" AND ", $implode);
		}

		return '';
	}

	/**
	 * Get lifecycle status for a coupon row.
	 *
	 * @param array<string, mixed> $coupon
	 *
	 * @return string active|scheduled|completed
	 */
	public function getLifecycleStatus(array $coupon): string {
		$today = date('Y-m-d');
		$start = (string)($coupon['date_start'] ?? '');
		$end = (string)($coupon['date_end'] ?? '');
		$enabled = !empty($coupon['status']);

		if ($enabled && $start && $start > $today) {
			return 'scheduled';
		}

		if ($enabled && $start && $end && $start <= $today && $end >= $today) {
			return 'active';
		}

		return 'completed';
	}

	/**
	 * Overview metrics for the promotions dashboard.
	 *
	 * @param string $date_start
	 * @param string $date_end
	 *
	 * @return array<string, mixed>
	 */
	public function getOverview(string $date_start, string $date_end): array {
		$promo = $this->db->query("SELECT COUNT(DISTINCT `ch`.`order_id`) AS `orders`,
			COALESCE(SUM(`o`.`total`), 0) AS `sales`,
			COUNT(DISTINCT CASE WHEN (
				SELECT MIN(`o2`.`order_id`) FROM `" . DB_PREFIX . "order` `o2`
				WHERE `o2`.`customer_id` = `o`.`customer_id` AND `o2`.`order_status_id` > '0'
			) = `o`.`order_id` THEN `o`.`customer_id` END) AS `new_customers`
			FROM `" . DB_PREFIX . "coupon_history` `ch`
			LEFT JOIN `" . DB_PREFIX . "order` `o` ON (`ch`.`order_id` = `o`.`order_id`)
			WHERE `o`.`order_status_id` > '0'
			AND DATE(`ch`.`date_added`) >= '" . $this->db->escape($date_start) . "'
			AND DATE(`ch`.`date_added`) <= '" . $this->db->escape($date_end) . "'");

		$total = $this->db->query("SELECT COUNT(*) AS `orders`, COALESCE(SUM(`total`), 0) AS `sales`
			FROM `" . DB_PREFIX . "order`
			WHERE `order_status_id` > '0'
			AND DATE(`date_added`) >= '" . $this->db->escape($date_start) . "'
			AND DATE(`date_added`) <= '" . $this->db->escape($date_end) . "'");

		$promo_orders = (int)($promo->row['orders'] ?? 0);
		$promo_sales = (float)($promo->row['sales'] ?? 0);
		$total_sales = (float)($total->row['sales'] ?? 0);

		return [
			'promo_sales'    => $promo_sales,
			'promo_orders'   => $promo_orders,
			'new_customers'  => (int)($promo->row['new_customers'] ?? 0),
			'avg_order'      => $promo_orders ? ($promo_sales / $promo_orders) : 0,
			'sales_share'    => $total_sales > 0 ? round(($promo_sales / $total_sales) * 100) : 0,
			'total_sales'    => $total_sales,
			'product_visits' => 0
		];
	}

	/**
	 * Add Product
	 *
	 * Create a new coupon product record in the database.
	 *
	 * @param int $coupon_id  primary key of the coupon record
	 * @param int $product_id primary key of the product record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->addProduct($coupon_id, $product_id);
	 */
	public function addProduct(int $coupon_id, int $product_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "coupon_product` SET `coupon_id` = '" . (int)$coupon_id . "', `product_id` = '" . (int)$product_id . "'");
	}

	/**
	 * Delete Products
	 *
	 * Delete coupon product records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->deleteProducts($coupon_id);
	 */
	public function deleteProducts(int $coupon_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_product` WHERE `coupon_id` = '" . (int)$coupon_id . "'");
	}

	/**
	 * Delete Products By Product ID
	 *
	 * Delete coupon products by product records in the database.
	 *
	 * @param int $product_id primary key of the product record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->deleteProductsByProductId($product_id);
	 */
	public function deleteProductsByProductId(int $product_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_product` WHERE `product_id` = '" . (int)$product_id . "'");
	}

	/**
	 * Get Products
	 *
	 * Get the record of the coupon product records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return array<int, int> product records that have coupon ID
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $products = $this->model_marketing_coupon->getProducts($coupon_id);
	 */
	public function getProducts(int $coupon_id): array {
		$coupon_product_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon_product` WHERE `coupon_id` = '" . (int)$coupon_id . "'");

		foreach ($query->rows as $result) {
			$coupon_product_data[] = $result['product_id'];
		}

		return $coupon_product_data;
	}

	/**
	 * Add Category
	 *
	 * Create a new coupon category record in the database.
	 *
	 * @param int $coupon_id   primary key of the coupon record
	 * @param int $category_id primary key of the category record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->addCategory($coupon_id, $category_id);
	 */
	public function addCategory(int $coupon_id, int $category_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "coupon_category` SET `coupon_id` = '" . (int)$coupon_id . "', `category_id` = '" . (int)$category_id . "'");
	}

	/**
	 * Delete Categories
	 *
	 * Delete coupon category records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->deleteCategories($coupon_id);
	 */
	public function deleteCategories(int $coupon_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_category` WHERE `coupon_id` = '" . (int)$coupon_id . "'");
	}

	/**
	 * Delete Categories By Category ID
	 *
	 * Delete coupon category by category records in the database.
	 *
	 * @param int $category_id primary key of the category record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->deleteCategoriesByCategoryId($category_id);
	 */
	public function deleteCategoriesByCategoryId(int $category_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_category` WHERE `category_id` = '" . (int)$category_id . "'");
	}

	/**
	 * Get Categories
	 *
	 * Get the record of the coupon category records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return array<int, int> category records that have coupon ID
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $categories = $this->model_marketing_coupon->getCategories($coupon_id);
	 */
	public function getCategories(int $coupon_id): array {
		$coupon_category_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon_category` WHERE `coupon_id` = '" . (int)$coupon_id . "'");

		foreach ($query->rows as $result) {
			$coupon_category_data[] = $result['category_id'];
		}

		return $coupon_category_data;
	}

	/**
	 * Get Total Coupons
	 *
	 * Get the total number of total coupon records in the database.
	 *
	 * @return int total number of coupon records
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $coupon_total = $this->model_marketing_coupon->getTotalCoupons();
	 */
	public function getTotalCoupons(array $data = []): int {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "coupon` `c`";
		$sql .= $this->getFilterSql($data);

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	/**
	 * Get Histories
	 *
	 * Get the record of the coupon history records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 * @param int $start
	 * @param int $limit
	 *
	 * @return array<int, array<string, mixed>> history records that have coupon ID
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $results = $this->model_marketing_coupon->getHistories($coupon_id, $start, $limit);
	 */
	public function getHistories(int $coupon_id, int $start = 0, int $limit = 10): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT `ch`.`order_id`, CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `customer`, `ch`.`amount`, `ch`.`date_added` FROM `" . DB_PREFIX . "coupon_history` `ch` LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`ch`.`customer_id` = `c`.`customer_id`) WHERE `ch`.`coupon_id` = '" . (int)$coupon_id . "' ORDER BY `ch`.`date_added` ASC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	/**
	 * Delete Coupon Histories
	 *
	 * Delete coupon history records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $this->model_marketing_coupon->deleteHistories($coupon_id);
	 */
	public function deleteHistories(int $coupon_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_history` WHERE `coupon_id` = '" . (int)$coupon_id . "'");
	}

	/**
	 * Get Total Histories
	 *
	 * Get the total number of total coupon history records in the database.
	 *
	 * @param int $coupon_id primary key of the coupon record
	 *
	 * @return int total number of history records
	 *
	 * @example
	 *
	 * $this->load->model('marketing/coupon');
	 *
	 * $history_total = $this->model_marketing_coupon->getTotalHistories($coupon_id);
	 */
	public function getTotalHistories(int $coupon_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "coupon_history` WHERE `coupon_id` = '" . (int)$coupon_id . "'");

		return (int)$query->row['total'];
	}

	/**
	 * Performance summary for a promotion.
	 *
	 * @return array<string, float|int>
	 */
	public function getPromotionStats(int $coupon_id): array {
		$query = $this->db->query("SELECT
			COUNT(DISTINCT `ch`.`order_id`) AS `orders`,
			COALESCE(SUM(`o`.`total`), 0) AS `sales`,
			COALESCE(AVG(ABS(`ch`.`amount`)), 0) AS `avg_discount`,
			COALESCE(SUM((
				SELECT SUM(`op`.`quantity`) FROM `" . DB_PREFIX . "order_product` `op` WHERE `op`.`order_id` = `ch`.`order_id`
			)), 0) AS `units`
			FROM `" . DB_PREFIX . "coupon_history` `ch`
			LEFT JOIN `" . DB_PREFIX . "order` `o` ON (`ch`.`order_id` = `o`.`order_id`)
			WHERE `ch`.`coupon_id` = '" . (int)$coupon_id . "'
			AND (`o`.`order_status_id` > '0' OR `o`.`order_id` IS NULL)");

		$orders = (int)($query->row['orders'] ?? 0);
		$sales = (float)($query->row['sales'] ?? 0);

		return [
			'sales'         => $sales,
			'orders'        => $orders,
			'avg_order'     => $orders ? ($sales / $orders) : 0,
			'avg_discount'  => (float)($query->row['avg_discount'] ?? 0),
			'units'         => (int)($query->row['units'] ?? 0),
			'product_visits'=> 0
		];
	}

	/**
	 * Recent orders that used this promotion.
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getPromotionOrders(int $coupon_id, int $start = 0, int $limit = 20): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 20;
		}

		$query = $this->db->query("SELECT `ch`.`order_id`, `ch`.`amount`, `ch`.`date_added`, `ch`.`customer_id`,
			`o`.`total`, `o`.`firstname`, `o`.`lastname`, `o`.`payment_company`, `o`.`shipping_company`,
			CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `customer_name`, `ct`.`company` AS `trade_company`
			FROM `" . DB_PREFIX . "coupon_history` `ch`
			LEFT JOIN `" . DB_PREFIX . "order` `o` ON (`ch`.`order_id` = `o`.`order_id`)
			LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`ch`.`customer_id` = `c`.`customer_id`)
			LEFT JOIN `" . DB_PREFIX . "customer_trade` `ct` ON (`ch`.`customer_id` = `ct`.`customer_id`)
			WHERE `ch`.`coupon_id` = '" . (int)$coupon_id . "'
			ORDER BY `ch`.`date_added` DESC
			LIMIT " . (int)$start . "," . (int)$limit);

		$orders = [];

		foreach ($query->rows as $row) {
			$products = $this->db->query("SELECT `op`.`product_id`, `op`.`name`, `op`.`quantity`, `p`.`image`
				FROM `" . DB_PREFIX . "order_product` `op`
				LEFT JOIN `" . DB_PREFIX . "product` `p` ON (`op`.`product_id` = `p`.`product_id`)
				WHERE `op`.`order_id` = '" . (int)$row['order_id'] . "'
				ORDER BY `op`.`order_product_id` ASC");

			$company = trim((string)($row['trade_company'] ?: $row['payment_company'] ?: $row['shipping_company'] ?: ''));
			$customer = $company !== '' ? $company : trim((string)($row['customer_name'] ?: ($row['firstname'] . ' ' . $row['lastname'])));

			$subtotal_query = $this->db->query("SELECT COALESCE(SUM(`total`), 0) AS `subtotal` FROM `" . DB_PREFIX . "order_product` WHERE `order_id` = '" . (int)$row['order_id'] . "'");

			$orders[] = [
				'order_id'    => (int)$row['order_id'],
				'customer'    => $customer !== '' ? $customer : 'Guest',
				'customer_id' => (int)$row['customer_id'],
				'amount'      => abs((float)$row['amount']),
				'subtotal'    => (float)($subtotal_query->row['subtotal'] ?? 0),
				'total'       => (float)($row['total'] ?? 0),
				'date_added'  => $row['date_added'],
				'products'    => $products->rows
			];
		}

		return $orders;
	}

	public function endPromotion(int $coupon_id): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "coupon` SET `status` = '0', `date_end` = CURDATE() WHERE `coupon_id` = '" . (int)$coupon_id . "'");
	}
}

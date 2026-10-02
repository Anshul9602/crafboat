<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Class Product
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Product extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return ?\Opencart\System\Engine\Action
	 */
	public function index(): ?\Opencart\System\Engine\Action {
		$this->load->language('product/product');

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {
			$this->document->setTitle($product_info['meta_title']);
			$this->document->setDescription($product_info['meta_description']);
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_id), 'canonical');

			$data['breadcrumbs'] = [];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
			];

			// Category
			$this->load->model('catalog/category');

			if (isset($this->request->get['path'])) {
				$path = '';

				$parts = explode('_', (string)$this->request->get['path']);

				$category_id = (int)array_pop($parts);

				foreach ($parts as $path_id) {
					if (!$path) {
						$path = $path_id;
					} else {
						$path .= '_' . $path_id;
					}

					$category_info = $this->model_catalog_category->getCategory((int)$path_id);

					if ($category_info) {
						$data['breadcrumbs'][] = [
							'text' => $category_info['name'],
							'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $path)
						];
					}
				}

				// Set the last category breadcrumb
				$category_info = $this->model_catalog_category->getCategory($category_id);

				if ($category_info) {
					$url = '';

					if (isset($this->request->get['sort'])) {
						$url .= '&sort=' . $this->request->get['sort'];
					}

					if (isset($this->request->get['order'])) {
						$url .= '&order=' . $this->request->get['order'];
					}

					if (isset($this->request->get['page'])) {
						$url .= '&page=' . $this->request->get['page'];
					}

					if (isset($this->request->get['limit'])) {
						$url .= '&limit=' . $this->request->get['limit'];
					}

					$data['breadcrumbs'][] = [
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $this->request->get['path'] . $url)
					];
				}
			}

			// Manufacturer
			$this->load->model('catalog/manufacturer');

			if (isset($this->request->get['manufacturer_id'])) {
				$data['breadcrumbs'][] = [
					'text' => $this->language->get('text_brand'),
					'href' => $this->url->link('product/manufacturer', 'language=' . $this->config->get('config_language'))
				];

				$url = '';

				if (isset($this->request->get['sort'])) {
					$url .= '&sort=' . $this->request->get['sort'];
				}

				if (isset($this->request->get['order'])) {
					$url .= '&order=' . $this->request->get['order'];
				}

				if (isset($this->request->get['page'])) {
					$url .= '&page=' . $this->request->get['page'];
				}

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

				if ($manufacturer_info) {
					$data['breadcrumbs'][] = [
						'text' => $manufacturer_info['name'],
						'href' => $this->url->link('product/manufacturer.info', 'language=' . $this->config->get('config_language') . '&manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
					];
				}
			}

			if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
				$url = '';

				if (isset($this->request->get['search'])) {
					$url .= '&search=' . $this->request->get['search'];
				}

				if (isset($this->request->get['tag'])) {
					$url .= '&tag=' . $this->request->get['tag'];
				}

				if (isset($this->request->get['description'])) {
					$url .= '&description=' . $this->request->get['description'];
				}

				if (isset($this->request->get['category_id'])) {
					$url .= '&category_id=' . $this->request->get['category_id'];
				}

				if (isset($this->request->get['sub_category'])) {
					$url .= '&sub_category=' . $this->request->get['sub_category'];
				}

				if (isset($this->request->get['sort'])) {
					$url .= '&sort=' . $this->request->get['sort'];
				}

				if (isset($this->request->get['order'])) {
					$url .= '&order=' . $this->request->get['order'];
				}

				if (isset($this->request->get['page'])) {
					$url .= '&page=' . $this->request->get['page'];
				}

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$data['breadcrumbs'][] = [
					'text' => $this->language->get('text_search'),
					'href' => $this->url->link('product/search', 'language=' . $this->config->get('config_language') . $url)
				];
			}

			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = [
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . $url . '&product_id=' . $product_id)
			];

			$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');

			$data['heading_title'] = $product_info['name'];

			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', 'language=' . $this->config->get('config_language')), $this->url->link('account/register', 'language=' . $this->config->get('config_language')));
			$data['text_reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['error_upload_size'] = sprintf($this->language->get('error_upload_size'), $this->config->get('config_file_max_size'));

			$data['config_file_max_size'] = ((int)$this->config->get('config_file_max_size') * 1024 * 1024);

			$this->session->data['upload_token'] = oc_token(32);

			$data['upload'] = $this->url->link('tool/upload', 'language=' . $this->config->get('config_language') . '&upload_token=' . $this->session->data['upload_token']);

			$data['product_id'] = $product_id;

			$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($product_info['manufacturer_id']);

			if ($manufacturer_info) {
				$data['manufacturer'] = $manufacturer_info['name'];
			} else {
				$data['manufacturer'] = '';
			}

			$data['manufacturers'] = $this->url->link('product/manufacturer.info', 'language=' . $this->config->get('config_language') . '&manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];

			$data['product_codes'] = [];

			$results = $this->model_catalog_product->getCodes($product_id);

			foreach ($results as $result) {
				if ($result['status']) {
					$data['product_codes'][] = $result;
				}
			}

			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

			// Stock Status
			if ($product_info['quantity'] <= 0 || $this->hasRequiredOptionsWithoutStock($product_info)) {
				$stock_status_id = $product_info['stock_status_id'];
			} elseif (!$this->config->get('config_stock_display')) {
				$stock_status_id = (int)$this->config->get('config_stock_status_id');
			} else {
				$stock_status_id = 0;
			}

			// Stock Status
			$this->load->model('localisation/stock_status');

			$stock_status_info = $this->model_localisation_stock_status->getStockStatus($stock_status_id);

			if ($stock_status_info) {
				$data['stock'] = $stock_status_info['name'];
			} else {
				$data['stock'] = $product_info['quantity'];
			}

			$data['rating'] = $product_info['rating'];
			$data['review_status'] = (int)$this->config->get('config_review_status');
			$data['review'] = $this->load->controller('product/review');

			$data['wishlist_add'] = $this->url->link('account/wishlist.add', 'language=' . $this->config->get('config_language'));
			$data['compare_add'] = $this->url->link('product/compare.add', 'language=' . $this->config->get('config_language'));

			// Image
			$this->load->model('tool/image');

			if ($product_info['image'] && is_file(DIR_IMAGE . html_entity_decode($product_info['image'], ENT_QUOTES, 'UTF-8'))) {
				$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height'));
				$data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('config_image_thumb_width'), $this->config->get('config_image_thumb_height'));
			} else {
				$data['popup'] = '';
				$data['thumb'] = '';
			}

			$data['images'] = [];

			$results = $this->model_catalog_product->getImages($product_id);

			foreach ($results as $result) {
				if ($result['image'] && is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
					$data['images'][] = [
						'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')),
						'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('config_image_additional_width'), $this->config->get('config_image_additional_height'))
					];
				}
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
			}

			if ((float)$product_info['special']) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['special'] = false;
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getDiscounts($product_id);

			$data['discounts'] = [];

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				foreach ($discounts as $discount) {
					$data['discounts'][] = ['price' => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])] + $discount;
				}
			}

			$data['options'] = [];

			// Check if product is variant
			if ($product_info['master_id']) {
				$master_id = (int)$product_info['master_id'];
			} else {
				$master_id = (int)$product_id;
			}

			$product_options = $this->model_catalog_product->getOptions($master_id);

			foreach ($product_options as $option) {
				if ($product_id && !isset($product_info['override']['variant'][$option['product_option_id']])) {
					$product_option_value_data = [];

					foreach ($option['product_option_value'] as $option_value) {
						if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
							if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
								$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
							} else {
								$price = false;
							}

							if ($option_value['image'] && is_file(DIR_IMAGE . html_entity_decode($option_value['image'], ENT_QUOTES, 'UTF-8'))) {
								$image = $option_value['image'];
							} else {
								$image = '';
							}

							$product_option_value_data[] = [
								'image' => $this->model_tool_image->resize($image, 50, 50),
								'price' => $price
							] + $option_value;
						}
					}

					$data['options'][] = ['product_option_value' => $product_option_value_data] + $option;
				}
			}

			// Subscriptions
			$data['subscription_plans'] = [];

			$results = $this->model_catalog_product->getSubscriptions($product_id);

			foreach ($results as $result) {
				$description = '';

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					if ($result['duration']) {
						$price = ($product_info['special'] ?: $product_info['price']) / $result['duration'];
					} else {
						$price = ($product_info['special'] ?: $product_info['price']);
					}

					$price = $this->currency->format($this->tax->calculate($price, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$cycle = $result['cycle'];
					$frequency = $this->language->get('text_' . $result['frequency']);
					$duration = $result['duration'];

					if ($duration) {
						$description = sprintf($this->language->get('text_subscription_duration'), $price, $cycle, $frequency, $duration);
					} else {
						$description = sprintf($this->language->get('text_subscription_cancel'), $price, $cycle, $frequency);
					}
				}

				$data['subscription_plans'][] = ['description' => $description] + $result;
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['share'] = $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_id);

			$data['attribute_groups'] = $this->model_catalog_product->getAttributes($product_id);

			$data['related'] = '';
			$tag_names = array_map('trim', explode(',', (string)$product_info['tag']));
			$made = in_array('made', $tag_names, true);
			$data['badge'] = in_array('bestseller', $tag_names, true) ? 'bestseller' : (in_array('new', $tag_names, true) ? 'new' : 'ready');
			$data['collection_name'] = $product_info['location'];
			$data['category_name'] = $product_info['meta_keyword'];
			$data['summary'] = trim(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')));

			if ((int)$product_id === 100) {
				$data['summary'] = 'Hand-finished scalloped forms wrapped in printed cotton paper, designed for gifting tables, desks and collected interiors.';
			}
			$data['ship'] = $made ? 'Made to order · Ships in 10–12 days' : 'Ready to ship · Dispatches in 3–5 days';
			$data['ship_wait'] = $made;
			$data['lead'] = $made ? 'Ships in 10–12 days' : 'Dispatches in 3–5 days';
			$language = (string)$this->config->get('config_language');
			$collection_code = [
				'Saffron valley' => 'saffron',
				'Marbled Stories' => 'marbled',
				'Holiday 2026' => 'holiday'
			][$product_info['location']] ?? '';
			$data['collection_href'] = $collection_code
				? $this->url->link('product/collection', 'language=' . $language . '&collection=' . $collection_code)
				: $this->url->link('product/category', 'language=' . $language . '&path=100');
			$data['register'] = $this->url->link('account/register', 'language=' . $language . '&account=trade');
			$data['logged'] = $this->customer->isLogged();
			$group_id = $data['logged'] ? (int)$this->customer->getGroupId() : 0;
			$trade_group_id = $this->customerGroupId('Trade');
			$wholesale_group_id = $this->customerGroupId('Wholesale');
			$data['trade'] = $trade_group_id && $group_id === $trade_group_id;
			$data['wholesale'] = $wholesale_group_id && $group_id === $wholesale_group_id;
			$retail_row = $this->db->query("SELECT `price` FROM `" . DB_PREFIX . "product` WHERE `product_id` = '" . (int)$product_id . "'");
			$retail_value = $retail_row->num_rows ? (float)$retail_row->row['price'] : (float)$product_info['price'];
			$tax_class_id = (int)$product_info['tax_class_id'];
			$data['price'] = $this->money($retail_value, $tax_class_id);
			$trade_offer = $this->groupOffer((int)$product_id, $trade_group_id, $retail_value);
			$wholesale_offer = $this->groupOffer((int)$product_id, $wholesale_group_id, $retail_value);
			$data['trade_price'] = $data['trade'] ? $this->money($trade_offer['value'], $tax_class_id) : '';
			$data['trade_off'] = $data['trade'] ? $trade_offer['off'] : '';
			$data['wholesale_price'] = $data['wholesale'] ? $this->money($wholesale_offer['value'], $tax_class_id) : '';
			$data['wholesale_off'] = $data['wholesale'] ? $wholesale_offer['off'] : '';
			$data['login'] = $this->url->link('account/login', 'language=' . $language);
			$data['cart_add'] = $this->url->link('checkout/cart.add', 'language=' . $language);
			$data['account'] = $this->url->link('account/account', 'language=' . $language . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			$data['about'] = $this->url->link('information/about', 'language=' . $language);
			$data['view_all'] = $data['collection_href'];

			$image_file = (string)$product_info['image'];
			$fit_name = basename($image_file);
			$fit_file = DIR_IMAGE . 'catalog/craftboat/pdp-fit/' . $fit_name;
			$main_image = is_file($fit_file)
				? 'image/catalog/craftboat/pdp-fit/' . $fit_name
				: ($image_file !== '' ? 'image/' . $image_file : 'catalog/view/image/craftboat/pdp-main.png');

			if ((int)$product_id === 100) {
				$data['gallery'] = [
					'catalog/view/image/craftboat/pdp-main.png',
					'catalog/view/image/craftboat/pdp-alt.png',
					'catalog/view/image/craftboat/pdp-detail.png'
				];
				$data['dimensions'] = 'Set of 3 · 12 × 9 in largest';
				$data['material'] = 'Printed cotton paper over board';
				$data['technique'] = 'Each edge is cut, wrapped and aligned by hand';
				$data['packing'] = 'Nested, tissue wrapped · 4 sets per carton';
			} else {
				$data['gallery'] = [$main_image];

				foreach ($this->model_catalog_product->getImages($product_id) as $extra) {
					if (!empty($extra['image'])) {
						$data['gallery'][] = 'image/' . ltrim((string)$extra['image'], '/');
					}
				}

				if (count($data['gallery']) < 3) {
					$data['gallery'] = [$main_image, $main_image, $main_image];
				}
				$data['dimensions'] = ((float)$product_info['length'] > 0) ? rtrim(rtrim((string)$product_info['length'], '0'), '.') . ' × ' . rtrim(rtrim((string)$product_info['width'], '0'), '.') . ' cm' : 'See the product notes';
				$data['material'] = 'Handmade in the Jaipur studio';
				$data['technique'] = 'Finished by hand';
				$data['packing'] = 'Case pack of ' . (int)$data['minimum'];
			}

			$related_query = $this->db->query("SELECT `p`.`product_id`, `p`.`model`, `p`.`image`, `p`.`location`, `pd`.`name`, `pd`.`tag`, `pd`.`meta_keyword` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p`.`status` = '1' AND `p`.`product_id` <> '" . (int)$product_id . "' AND `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `p`.`location` = '" . $this->db->escape((string)$product_info['location']) . "' ORDER BY `p`.`sort_order` ASC LIMIT 8");
			$data['related_products'] = [];

			foreach ($related_query->rows as $row) {
				$row_tags = array_map('trim', explode(',', (string)$row['tag']));
				$row_made = in_array('made', $row_tags, true);
				$data['related_products'][] = [
					'product_id' => $row['product_id'],
					'name'       => $row['name'],
					'sku'        => $row['model'],
					'category'   => $row['meta_keyword'],
					'collection' => $row['location'],
					'image'      => 'image/' . $row['image'],
					'href'       => $this->url->link('product/product', 'language=' . $language . '&product_id=' . $row['product_id']),
					'badge'      => in_array('new', $row_tags, true) ? 'new' : (in_array('bestseller', $row_tags, true) ? 'bestseller' : 'ready'),
					'ship'       => $row_made ? 'Made to order · Ships in 10–12 days' : 'Ready to ship · Dispatches in 3–5 days',
					'wait'       => $row_made
				];
			}

			$data['related_products'] = $this->model_catalog_product->withRolePrices($data['related_products']);

			$data['tags'] = [];

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = [
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'language=' . $this->config->get('config_language') . '&tag=' . trim($tag))
					];
				}
			}

			if ($this->config->get('config_product_report_status')) {
				$this->model_catalog_product->addReport($product_id, oc_get_ip());
			}

			$data['language'] = $this->config->get('config_language');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			return new \Opencart\System\Engine\Action('error/not_found');
		}

		return null;
	}

	/**
	 * Check to make sure that none of the required product options is without stock
	 *
	 * @param array<string, mixed> $product_info
	 *
	 * @return bool
	 */
	protected function hasRequiredOptionsWithoutStock(array $product_info): bool {
		if ($product_info['master_id']) {
			$master_id = (int)$product_info['master_id'];
		} else {
			$master_id = (int)$product_info['product_id'];
		}

		$product_options = $this->model_catalog_product->getOptions($master_id);

		foreach ($product_options as $product_option) {
			if (!$product_option['required']) {
				continue;
			}
			$product_option_id = $product_option['product_option_id'];

			$has_stock = false;

			$type = $product_option['type'];
			if ($type == 'select' || $type == 'radio' || $type == 'checkbox') {
				foreach ($product_option['product_option_value'] as $product_option_value) {
					$product_option_value_id = $product_option_value['product_option_value_id'];
					if (!empty($product_info['override']['variant'][$product_option_id])) {
						if (!isset($product_info['variant'][$product_option_id])) {
							// option value is not used in variant product
							continue;
						}
						$value = $product_info['variant'][$product_option_id];
						if (!is_array($value)) {
							$value = [$value];
						}
						if (!in_array($product_option_value_id, $value)) {
							// option value is not used in variant product
							continue;
						}
					}
					if (!$product_option_value['subtract']) {
						// at least one required product option value can still be chosen
						$has_stock = true;
						break;
					}
					if ($product_option_value['quantity'] > 0) {
						// at least one required product option value still has some stock
						$has_stock = true;
						break;
					}
				}
				if (!$has_stock) {
					return true;
				}
			} else {
				$has_stock = true;
			}

			if (!$has_stock) {
				return true;
			}
		}

		return false;
	}

	private function customerGroupId(string $name): int {
		$query = $this->db->query("SELECT `customer_group_id` FROM `" . DB_PREFIX . "customer_group_description` WHERE `name` = '" . $this->db->escape($name) . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");

		return $query->num_rows ? (int)$query->row['customer_group_id'] : 0;
	}

	/**
	 * @return array{value: float, off: string}
	 */
	private function groupOffer(int $product_id, int $group_id, float $fallback): array {
		$offer = ['value' => $fallback, 'off' => ''];

		if (!$group_id) {
			return $offer;
		}

		$row = $this->db->query("SELECT `pd`.`price`, `pd`.`type`, (CASE WHEN `pd`.`type` = 'P' THEN (`p`.`price` - (`p`.`price` * (`pd`.`price` / 100))) WHEN `pd`.`type` = 'S' THEN (`p`.`price` - `pd`.`price`) ELSE `pd`.`price` END) AS `value` FROM `" . DB_PREFIX . "product_discount` `pd` LEFT JOIN `" . DB_PREFIX . "product` `p` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `pd`.`product_id` = '" . (int)$product_id . "' AND `pd`.`customer_group_id` = '" . (int)$group_id . "' AND `pd`.`quantity` = '1' AND ((`pd`.`date_start` = '0000-00-00' OR `pd`.`date_start` < NOW()) AND (`pd`.`date_end` = '0000-00-00' OR `pd`.`date_end` > NOW())) ORDER BY `pd`.`special` DESC, `pd`.`priority` ASC LIMIT 1");

		if (!$row->num_rows || (float)$row->row['value'] >= $fallback) {
			return $offer;
		}

		$offer['value'] = (float)$row->row['value'];
		$amount = (float)$row->row['price'];

		if ((string)$row->row['type'] === 'P' && $amount > 0) {
			$offer['off'] = rtrim(rtrim(number_format($amount, 2, '.', ''), '0'), '.') . '% off';
		} else {
			$saved = $fallback - $offer['value'];
			$percent = $fallback > 0 ? round(($saved / $fallback) * 100) : 0;
			$offer['off'] = $percent > 0 ? $percent . '% off' : '';
		}

		return $offer;
	}

	private function money(float $value, int $tax_class_id): string {
		$formatted = $this->currency->format($this->tax->calculate($value, $tax_class_id, $this->config->get('config_tax')), $this->session->data['currency']);

		return (string)preg_replace('/\.00$/', '', $formatted);
	}
}

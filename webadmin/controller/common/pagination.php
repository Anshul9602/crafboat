<?php
namespace Opencart\Admin\Controller\Common;
/**
 * Class Pagination
 *
 * Can be loaded using $this->load->controller('common/pagination', $setting);
 *
 * @example
 *
 * $setting = [
 *     'total' => 10,
 *     'page'  => 1,
 *     'limit' => 10,
 *     'url'   => ''
 * ];
 *
 * @package Opencart\Admin\Controller\Common
 */
class Pagination extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @param array<string, mixed> $setting array of filters
	 *
	 * @return string
	 */
	public function index(array $setting): string {
		if (isset($setting['total'])) {
			$total = $setting['total'];
		} else {
			$total = 0;
		}

		if (isset($setting['page']) && $setting['page'] > 0) {
			$page = (int)$setting['page'];
		} else {
			$page = 1;
		}

		if (isset($setting['limit']) && (int)$setting['limit']) {
			$limit = (int)$setting['limit'];
		} else {
			$limit = 10;
		}

		if (isset($setting['url'])) {
			$url = str_replace('%7Bpage%7D', '{page}', (string)$setting['url']);
		} else {
			$url = '';
		}

		$num_links = 8;
		$num_pages = ceil($total / $limit);

		if ($url && $page > 1 && $num_pages < $page) {
			$back = true;
		} else {
			$back = false;
		}

		$data['page'] = $page;
		$data['num_pages'] = (int)$num_pages;

		$data['first'] = str_replace(['&amp;page={page}', '?page={page}', '&page={page}'], '', $url);

		if ($page > 1) {
			if ($page - 1 === 1) {
				$data['prev'] = $data['first'];
			} else {
				$data['prev'] = str_replace('{page}', $page - 1, $url);
			}
		} else {
			$data['prev'] = '';
		}

		$data['links'] = [];

		// Faire-style window: show current neighborhood, always keep first/last available
		$num_links = 5;

		if ($num_pages > 1) {
			if ($num_pages <= $num_links + 2) {
				$start = 1;
				$end = $num_pages;
			} else {
				$start = max(1, $page - 2);
				$end = min($num_pages, $page + 2);

				if ($start <= 2) {
					$start = 1;
					$end = min($num_pages, $num_links);
				}

				if ($end >= $num_pages - 1) {
					$end = $num_pages;
					$start = max(1, $num_pages - $num_links + 1);
				}
			}

			for ($i = $start; $i <= $end; $i++) {
				$data['links'][] = [
					'page' => $i,
					'href' => ($i === 1) ? str_replace(['&amp;page={page}', '?page={page}', '&page={page}'], '', $url) : str_replace('{page}', $i, $url)
				];
			}
		}

		$data['last'] = ($num_pages > 1) ? str_replace('{page}', $num_pages, $url) : '';

		if ($num_pages > $page) {
			$data['next'] = str_replace('{page}', $page + 1, $url);
		} else {
			$data['next'] = '';
		}

		if ($num_pages > 1 || $back) {
			return $this->load->view('common/pagination', $data);
		} else {
			return '';
		}
	}
}

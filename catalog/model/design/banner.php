<?php
namespace Opencart\Catalog\Model\Design;
/**
 * Class Banner
 *
 * Can be called using $this->load->model('design/banner');
 *
 * @package Opencart\Catalog\Model\Design
 */
class Banner extends \Opencart\System\Engine\Model {
	/**
	 * Get Banner
	 *
	 * Get the record of the banner record in the database.
	 *
	 * @param int $banner_id primary key of the banner record
	 *
	 * @return array<int, array<string, mixed>> banner records that have banner ID
	 *
	 * @example
	 *
	 * $this->load->model('design/banner');
	 *
	 * $banner_info = $this->model_design_banner->getBanner($banner_id);
	 */
	public function getBanner(int $banner_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "banner` `b` LEFT JOIN `" . DB_PREFIX . "banner_image` `bi` ON (`b`.`banner_id` = `bi`.`banner_id`) WHERE `b`.`banner_id` = '" . (int)$banner_id . "' AND `b`.`status` = '1' AND `bi`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY `bi`.`sort_order` ASC");

		return $query->rows;
	}

	/**
	 * Images for a banner, matched by the name shown in the admin banner list.
	 *
	 * @return array<int, array<string, string>>
	 */
	public function getPageBanners(string $name): array {
		$query = $this->db->query("SELECT `bi`.`title`, `bi`.`link`, `bi`.`image`, `bi`.`mobile_image` FROM `" . DB_PREFIX . "banner` `b` LEFT JOIN `" . DB_PREFIX . "banner_image` `bi` ON (`b`.`banner_id` = `bi`.`banner_id`) WHERE `b`.`name` = '" . $this->db->escape($name) . "' AND `b`.`status` = '1' AND `bi`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY `bi`.`sort_order` ASC, `bi`.`banner_image_id` ASC");

		$banners = [];

		foreach ($query->rows as $row) {
			$banner = $this->bannerImage($row);

			if ($banner) {
				$banners[] = $banner;
			}
		}

		return $banners;
	}

	/**
	 * Every enabled banner image for the homepage, skipping the sample catalog.
	 *
	 * @return array<int, array<string, string>>
	 */
	public function getAllPageBanners(): array {
		$query = $this->db->query("SELECT `b`.`name`, `bi`.`title`, `bi`.`link`, `bi`.`image`, `bi`.`mobile_image` FROM `" . DB_PREFIX . "banner` `b` LEFT JOIN `" . DB_PREFIX . "banner_image` `bi` ON (`b`.`banner_id` = `bi`.`banner_id`) WHERE `b`.`status` = '1' AND `bi`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY CASE WHEN `b`.`name` = 'Homepage' THEN 0 ELSE 1 END, `b`.`name` ASC, `bi`.`sort_order` ASC, `bi`.`banner_image_id` ASC");

		$banners = [];
		$seen = [];

		foreach ($query->rows as $row) {
			$image = html_entity_decode((string)$row['image'], ENT_QUOTES, 'UTF-8');

			if ($image === '' || str_starts_with($image, 'catalog/demo/') || isset($seen[$image])) {
				continue;
			}

			$banner = $this->bannerImage($row);

			if (!$banner) {
				continue;
			}

			$seen[$image] = true;
			$banner['title'] = (string)($row['title'] !== '' ? $row['title'] : $row['name']);
			$banners[] = $banner;
		}

		return $banners;
	}

	/**
	 * @param array<string, mixed> $row
	 *
	 * @return array<string, string>|null
	 */
	private function bannerImage(array $row): ?array {
		$image = html_entity_decode((string)$row['image'], ENT_QUOTES, 'UTF-8');

		if ($image === '' || !is_file(DIR_IMAGE . $image)) {
			return null;
		}

		$mobile = html_entity_decode((string)($row['mobile_image'] ?? ''), ENT_QUOTES, 'UTF-8');

		if ($mobile === '' || !is_file(DIR_IMAGE . $mobile)) {
			$mobile = '';
		}

		$base = rtrim((string)$this->config->get('config_url'), '/') . '/image/';

		return [
			'title'  => (string)$row['title'],
			'link'   => (string)$row['link'],
			'image'  => $base . $image,
			'mobile' => $mobile !== '' ? $base . $mobile : ''
		];
	}
}

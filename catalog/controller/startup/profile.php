<?php
namespace Opencart\Catalog\Controller\Startup;

/**
 * Gate catalog browsing until wholesale business details are complete.
 */
class Profile extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
	 */
	public function index(): void {
		if (!$this->customer->isLogged()) {
			return;
		}

		$this->load->model('account/trade');

		if (!$this->model_account_trade->requiresCompletion()) {
			return;
		}

		$route = isset($this->request->get['route'])
			? (string)$this->request->get['route']
			: (string)$this->config->get('action_default');

		// Never interrupt account, login, API, or asset routes.
		if (
			str_starts_with($route, 'account/')
			|| str_starts_with($route, 'api/')
			|| str_starts_with($route, 'extension/')
			|| str_starts_with($route, 'tool/')
			|| str_starts_with($route, 'common/language')
			|| str_starts_with($route, 'common/currency')
			|| str_starts_with($route, 'localisation/')
		) {
			return;
		}

		$blocked = [
			'product/product',
			'product/category',
			'product/collection',
			'product/search',
			'product/special',
			'product/compare',
			'product/manufacturer',
			'product/manufacturer_info',
			'checkout/cart',
			'checkout/checkout',
			'checkout/cart.add',
			'checkout/cart.edit',
			'checkout/cart.remove'
		];

		$is_blocked = in_array($route, $blocked, true) || str_starts_with($route, 'product/') || str_starts_with($route, 'checkout/');

		if (!$is_blocked) {
			return;
		}

		$language = (string)$this->config->get('config_language');
		$token = (string)($this->session->data['customer_token'] ?? '');

		$this->session->data['cb_profile_notice'] = [
			'title'   => 'Update account information',
			'message' => 'Please complete your business details before browsing products and collections.'
		];

		$this->response->redirect($this->url->link('account/edit', 'language=' . $language . ($token !== '' ? '&customer_token=' . $token : ''), true));
	}
}

<?php
namespace Opencart\Catalog\Controller\Startup;

/**
 * First-visit landing gate for guests without a pass flag.
 */
class Landing extends \Opencart\System\Engine\Controller {
	/**
	 * @return \Opencart\System\Engine\Action|null
	 */
	public function index(): ?\Opencart\System\Engine\Action {
		if ($this->customer->isLogged() || !empty($this->session->data['landing_passed'])) {
			return null;
		}

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = (string)$this->config->get('action_default');
		}

		if (str_starts_with($route, 'api/') || str_starts_with($route, 'extension/')) {
			return null;
		}

		$allow = [
			'common/landing',
			'common/language',
			'common/language/language',
			'common/currency',
			'common/currency/currency',
			'account/login',
			'account/login.login',
			'account/login.token',
			'account/register',
			'account/register.register',
			'account/register.lead',
			'account/forgotten',
			'account/forgotten.confirm',
			'account/forgotten.reset',
			'account/forgotten.password',
			'account/logout',
			'account/complete',
			'account/complete.save',
			'information/contact',
			'information/contact.send',
			'information/about',
			'information/information',
			'information/information.info',
			'localisation/country',
			'tool/upload'
		];

		if (in_array($route, $allow, true)) {
			return null;
		}

		return new \Opencart\System\Engine\Action('common/landing');
	}
}

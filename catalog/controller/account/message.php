<?php
namespace Opencart\Catalog\Controller\Account;

class Message extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('account/message');

		if (!$this->load->controller('account/login.validate')) {
			$this->session->data['redirect'] = $this->url->link('account/message', 'language=' . $this->config->get('config_language'));
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('account/message');

		$customer_id = (int)$this->customer->getId();
		$order_id = (int)($this->request->get['order_id'] ?? 0);
		$thread_id = $this->model_account_message->getOrCreateThread($customer_id, $order_id);

		if ($order_id) {
			$has_system = false;

			foreach ($this->model_account_message->getMessages($thread_id, $customer_id) as $row) {
				if ($row['sender'] === 'system' && str_contains($row['body'], '#' . $order_id)) {
					$has_system = true;
					break;
				}
			}

			if (!$has_system) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "message` SET `thread_id` = '" . (int)$thread_id . "', `sender` = 'system', `user_id` = '0', `customer_id` = '" . (int)$customer_id . "', `body` = '" . $this->db->escape('Order #' . $order_id . ' placed') . "', `attachment` = '', `date_added` = NOW()");
				$this->db->query("UPDATE `" . DB_PREFIX . "message_thread` SET `last_message` = '" . $this->db->escape('Order #' . $order_id . ' placed') . "', `last_sender` = 'system', `date_last` = NOW() WHERE `thread_id` = '" . (int)$thread_id . "'");
			}
		}

		$this->model_account_message->markCustomerRead($thread_id, $customer_id);

		$token = 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'];

		$data['breadcrumbs'] = [
			['text' => $this->language->get('text_home') ?: 'Home', 'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))],
			['text' => $this->language->get('text_account'), 'href' => $this->url->link('account/account', $token)],
			['text' => $this->language->get('heading_title'), 'href' => $this->url->link('account/message', $token)]
		];

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_type'] = $this->language->get('text_type');
		$data['text_send'] = $this->language->get('text_send');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['action'] = $this->url->link('account/message.send', $token);
		$data['thread_id'] = $thread_id;
		$data['success'] = $this->session->data['success'] ?? '';
		unset($this->session->data['success']);
		$data['error'] = $this->session->data['error'] ?? '';
		unset($this->session->data['error']);

		$data['messages'] = [];

		foreach ($this->model_account_message->getMessages($thread_id, $customer_id) as $row) {
			if ($row['sender'] === 'system') {
				$data['messages'][] = [
					'type' => 'system',
					'body' => $row['body'],
					'time' => date('M j, g:i A', strtotime($row['date_added']))
				];
				continue;
			}

			$data['messages'][] = [
				'type'   => 'message',
				'sender' => $row['sender'],
				'name'   => $row['sender'] === 'customer' ? $this->language->get('text_you') : $this->language->get('text_team'),
				'body'   => nl2br(htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8')),
				'time'   => date('M j, g:i A', strtotime($row['date_added']))
			];
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/message', $data));
	}

	public function send(): void {
		$this->load->language('account/message');

		if (!$this->load->controller('account/login.validate')) {
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language'), true));
		}

		$this->load->model('account/message');

		$token = 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token'];
		$customer_id = (int)$this->customer->getId();
		$thread_id = (int)($this->request->post['thread_id'] ?? 0);
		$body = trim((string)($this->request->post['message'] ?? ''));

		if ($body === '') {
			$this->session->data['error'] = $this->language->get('error_message');
		} else {
			if (!$thread_id) {
				$thread_id = $this->model_account_message->getOrCreateThread($customer_id);
			}

			$ok = $this->model_account_message->addMessage($thread_id, $customer_id, $body);

			if ($ok) {
				$this->session->data['success'] = $this->language->get('text_success');
			} else {
				$this->session->data['error'] = $this->language->get('error_message');
			}
		}

		$this->response->redirect($this->url->link('account/message', $token, true));
	}
}

<?php
namespace Opencart\Admin\Controller\Customer;

class Message extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('customer/message');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/message');
		$this->model_customer_message->ensureTables();

		$token = 'user_token=' . $this->session->data['user_token'];

		$filter = [
			'filter_search'  => (string)($this->request->get['filter_search'] ?? ''),
			'filter_unread'  => !empty($this->request->get['filter_unread']),
			'filter_starred' => !empty($this->request->get['filter_starred']),
			'start'          => 0,
			'limit'          => 80
		];

		$threads = $this->model_customer_message->getThreads($filter);
		$active_id = (int)($this->request->get['thread_id'] ?? 0);
		$customer_id = (int)($this->request->get['customer_id'] ?? 0);
		$order_id = (int)($this->request->get['order_id'] ?? 0);

		if ($customer_id) {
			$active_id = $this->model_customer_message->getOrCreateThread($customer_id, $order_id);

			if ($order_id) {
				$thread = $this->model_customer_message->getThread($active_id);
				$has_system = false;

				foreach ($this->model_customer_message->getMessages($active_id) as $message) {
					if ($message['sender'] === 'system' && str_contains($message['body'], '#' . $order_id)) {
						$has_system = true;
						break;
					}
				}

				if (!$has_system) {
					$this->model_customer_message->addMessage($active_id, 'system', sprintf($this->language->get('text_system_order'), $order_id));
				}
			}
		} elseif (!$active_id && $threads) {
			$active_id = (int)$threads[0]['thread_id'];
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_search'] = $this->language->get('text_search');
		$data['text_unread'] = $this->language->get('text_unread');
		$data['text_starred'] = $this->language->get('text_starred');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['text_empty_thread'] = $this->language->get('text_empty_thread');
		$data['text_type'] = $this->language->get('text_type');
		$data['text_send'] = $this->language->get('text_send');
		$data['text_order_volume'] = $this->language->get('text_order_volume');
		$data['text_total_orders'] = $this->language->get('text_total_orders');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_address'] = $this->language->get('text_address');
		$data['text_recent_orders'] = $this->language->get('text_recent_orders');
		$data['text_no_orders'] = $this->language->get('text_no_orders');
		$data['text_online_store'] = $this->language->get('text_online_store');
		$data['text_you'] = $this->language->get('text_you');

		$data['filter_search'] = $filter['filter_search'];
		$data['filter_unread'] = $filter['filter_unread'];
		$data['filter_starred'] = $filter['filter_starred'];
		$data['unread_count'] = $this->model_customer_message->getUnreadCount();
		$data['starred_count'] = $this->model_customer_message->getStarredCount();
		$data['user_token'] = $this->session->data['user_token'];
		$data['send_href'] = $this->url->link('customer/message.send', $token);
		$data['star_href'] = $this->url->link('customer/message.star', $token);
		$data['base_href'] = $this->url->link('customer/message', $token);

		$data['threads'] = [];

		foreach ($threads as $row) {
			$store = trim((string)$row['company']) !== '' ? trim((string)$row['company']) : trim((string)$row['customer_name']);
			$initial = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $store) ?: 'C', 0, 1));

			$data['threads'][] = [
				'thread_id'   => (int)$row['thread_id'],
				'name'        => $store,
				'initial'     => $initial,
				'preview'     => (string)$row['last_message'],
				'time'        => $this->relativeTime((string)$row['date_last']),
				'unread'      => (int)$row['admin_unread'],
				'starred'     => (int)$row['starred'],
				'active'      => ((int)$row['thread_id'] === $active_id),
				'href'        => $this->url->link('customer/message', $token . '&thread_id=' . (int)$row['thread_id'])
			];
		}

		$data['active'] = $this->buildThreadView($active_id);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/message', $data));
	}

	public function send(): void {
		$this->load->language('customer/message');
		$this->load->model('customer/message');

		$json = [];

		if (!$this->user->hasPermission('modify', 'customer/customer') && !$this->user->hasPermission('access', 'customer/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$thread_id = (int)($this->request->post['thread_id'] ?? 0);
		$body = trim((string)($this->request->post['message'] ?? ''));

		if (!$json && $body === '') {
			$json['error'] = $this->language->get('error_message');
		}

		$thread = $thread_id ? $this->model_customer_message->getThread($thread_id) : [];

		if (!$json && !$thread) {
			$json['error'] = $this->language->get('error_thread');
		}

		if (!$json) {
			$this->model_customer_message->addMessage($thread_id, 'admin', $body, (int)$this->user->getId(), (int)$thread['customer_id']);
			$json['success'] = true;
			$json['thread'] = $this->buildThreadView($thread_id, false);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function star(): void {
		$this->load->language('customer/message');
		$this->load->model('customer/message');

		$json = [];
		$thread_id = (int)($this->request->post['thread_id'] ?? 0);

		if (!$thread_id) {
			$json['error'] = $this->language->get('error_thread');
		} else {
			$json['success'] = true;
			$json['starred'] = $this->model_customer_message->toggleStar($thread_id);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * @return array<string, mixed>
	 */
	private function buildThreadView(int $thread_id, bool $mark_read = true): array {
		$this->load->language('customer/message');
		$this->load->model('customer/message');
		$this->load->model('tool/image');

		if (!$thread_id) {
			return [];
		}

		$thread = $this->model_customer_message->getThread($thread_id);

		if (!$thread) {
			return [];
		}

		if ($mark_read) {
			$this->model_customer_message->markAdminRead($thread_id);
			$thread['admin_unread'] = 0;
		}

		$store = trim((string)$thread['company']) !== '' ? trim((string)$thread['company']) : trim((string)$thread['customer_name']);
		$context = $this->model_customer_message->getCustomerContext((int)$thread['customer_id']);
		$currency = (string)$this->config->get('config_currency');

		$messages = [];
		$last_day = '';

		foreach ($this->model_customer_message->getMessages($thread_id) as $row) {
			$day = date('F j', strtotime($row['date_added']));

			if ($day !== $last_day) {
				$messages[] = [
					'type' => 'day',
					'label' => $day
				];
				$last_day = $day;
			}

			if ($row['sender'] === 'system') {
				$messages[] = [
					'type' => 'system',
					'body' => $row['body']
				];
				continue;
			}

			$messages[] = [
				'type'       => 'message',
				'sender'     => $row['sender'],
				'body'       => nl2br(htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8')),
				'name'       => $row['sender'] === 'admin' ? $this->language->get('text_you') : trim((string)$thread['firstname']),
				'time'       => date('g:i A', strtotime($row['date_added'])),
				'attachment' => $row['attachment']
			];
		}

		$orders = [];

		foreach (($context['orders'] ?? []) as $order) {
			$thumbs = [];

			foreach ($order['products'] as $product) {
				$image = !empty($product['image']) && is_file(DIR_IMAGE . html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'))
					? $this->model_tool_image->resize($product['image'], 56, 56)
					: $this->model_tool_image->resize('no_image.png', 56, 56);

				$thumbs[] = $image;
			}

			$orders[] = [
				'order_id' => (int)$order['order_id'],
				'date'     => date('M j', strtotime($order['date_added'])),
				'status'   => (string)$order['status'],
				'total'    => $this->currency->format($order['total'], $order['currency_code'], $order['currency_value']),
				'thumbs'   => $thumbs,
				'extra'    => max(0, (int)$order['product_count'] - count($thumbs)),
				'href'     => $this->url->link('sale/order.info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . (int)$order['order_id'])
			];
		}

		$customer = $context['customer'] ?? [];

		return [
			'thread_id'      => $thread_id,
			'name'           => $store,
			'starred'        => (int)$thread['starred'],
			'messages'       => $messages,
			'member_since'   => sprintf($this->language->get('text_member_since'), date('M Y', strtotime((string)($customer['date_added'] ?? $thread['customer_since'])))),
			'contact_name'   => trim((string)$thread['customer_name']),
			'email'          => (string)($customer['email'] ?? $thread['email']),
			'telephone'      => (string)($customer['telephone'] ?? $thread['telephone']),
			'address'        => (string)($customer['address_line'] ?? ''),
			'orders_total'   => (int)($context['orders_total'] ?? 0),
			'volume'         => $this->currency->format((float)($context['volume'] ?? 0), $currency),
			'orders'         => $orders,
			'customer_href'  => $this->url->link('customer/customer.form', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . (int)$thread['customer_id'])
		];
	}

	private function relativeTime(string $datetime): string {
		$ts = strtotime($datetime);

		if (!$ts) {
			return '';
		}

		$diff = time() - $ts;

		if ($diff < 60) {
			return 'Just now';
		}

		if ($diff < 3600) {
			return (int)floor($diff / 60) . ' min ago';
		}

		if ($diff < 86400) {
			return (int)floor($diff / 3600) . ' hr ago';
		}

		if ($diff < 86400 * 7) {
			$days = (int)floor($diff / 86400);
			return $days . ($days === 1 ? ' day ago' : ' days ago');
		}

		return date('M j', $ts);
	}
}

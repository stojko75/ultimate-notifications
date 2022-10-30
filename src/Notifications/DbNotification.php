<?php

namespace Stojko\UltimateNotifications\Notifications;

use Exception;
use Stojko\UltimateNotifications\Interfaces\NotificationInterface;
use Stojko\UltimateNotifications\Dao\NotificationDao;

class DbNotification implements NotificationInterface
{
	private array $options;

	/**
	 * @throws Exception
	 */
	public function __construct(array $options)
	{
		if (!array_key_exists('to', $options)) {
			throw new Exception("Missing 'to' key in options array. Options array needs to have 'to' key which is an id of user who receive the notification");
		}
		if (!array_key_exists('message', $options)) {
			throw new Exception("Missing 'message' key in options array");
		}
		$this->options = $options;
	}

	public function send()
	{
		$notification = (new NotificationDao)->create($this->options);
	}
}
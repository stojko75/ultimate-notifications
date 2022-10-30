<?php

namespace Stojko\UltimateNotifications;

use Exception;
use Stojko\UltimateNotifications\Interfaces\NotificationInterface;
use Stojko\UltimateNotifications\Interfaces\NotificationsFactoryInterface;
use Stojko\UltimateNotifications\Notifications\DbNotification;

class NotificationsFactory implements NotificationsFactoryInterface
{

	/**
	 * @throws Exception
	 */
	public function get(string $type, array $options): NotificationInterface
	{
		return match ($type) {
			'db' => new DbNotification($options),
			default => throw new Exception("Notification of type $type doesn't exist"),
		};
	}
}
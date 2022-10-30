<?php

namespace Stojko\UltimateNotifications\Dao;

use Stojko\UltimateNotifications\Entities\Notification;
use Stojko\UltimateNotifications\Models\NotificationModel;

class NotificationDao
{
	private $notificationModel;

	public function __construct(NotificationModel $notificationModel)
	{
		$this->notificationModel = $notificationModel;
	}

	public function create(array $data): Notification
	{

	}
}
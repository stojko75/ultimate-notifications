<?php

namespace Stojko\UltimateNotifications\Interfaces;

interface NotificationsFactoryInterface
{
	public function get(string $type, array $options): NotificationInterface;
}
<?php

namespace Stojko\UltimateNotifications;

use Exception;
use Stojko\UltimateNotifications\Interfaces\NotificationInterface;
use Stojko\UltimateNotifications\Interfaces\NotificationsFactoryInterface;
use Stojko\UltimateNotifications\ServiceContainer\ServiceContainer;

class NotificationsService
{
	private ServiceContainer $sc;
	private NotificationsFactoryInterface $factory;
	private NotificationInterface $notification;

	/**
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->sc = new ServiceContainer();
		$this->factory = $this->sc->get(NotificationsFactory::class);
	}

	public function send(string $type, array $options): void
	{
		$this->notification = $this->factory->get($type, $options);
		$this->notification->send();
	}
}
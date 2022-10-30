<?php

namespace Stojko\UltimateNotifications\ServiceContainer;

use Exception;
use Illuminate\Database\Capsule\Manager as Capsule;
use Stojko\UltimateNotifications\NotificationsFactory;

class Config
{
	public ServiceContainer $sc;

	/**
	 * @throws Exception
	 */
	public function __construct(ServiceContainer $sc)
	{
		$this->sc = $sc;
		$this->register();
	}

	/**
	 * @throws Exception
	 */
	private function register(): void
	{
		$config = [
			"driver" 	=> "mysql",
			"host" 		=> "mysql",
			"database" 	=> "ultimate-notifications",
			"username" 	=> "root",
			"password" 	=> "stojko0603"
		];

		$this->sc->register('db', function () use ($config) {
			$capsule = new Capsule();
			$capsule->addConnection($config);
			$capsule->setAsGlobal();
			$capsule->bootEloquent();
			return $capsule;
		});

		$this->sc->register(NotificationsFactory::class, function () {
			return new NotificationsFactory();
		});
	}
}

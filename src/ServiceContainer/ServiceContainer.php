<?php

namespace Stojko\UltimateNotifications\ServiceContainer;

use Exception;

class ServiceContainer
{
	private array $bindings;

	/**
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->loadRegistrations();
	}

	/**
	 * @throws Exception
	 */
	public function register(string $name, callable $callable): void
	{
		if (isset($this->bindings[$name])) {
			throw new Exception("Service with name '$name' is already registered");
		}
		$this->bindings[$name] = $callable($this);
	}

	/**
	 * @throws Exception
	 */
	public function get(string $name)
	{
		if (!isset($this->bindings[$name])) {
			throw new Exception("Service with name '$name' isn't registered");
		}
		return $this->bindings[$name];
	}

	/**
	 * @throws Exception
	 */
	private function loadRegistrations(): void
	{
		new Config($this);
	}
}


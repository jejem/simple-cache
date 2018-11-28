<?php
/**
 * Cache/Memcached.php
 *
 * @author Jérémy 'Jejem' Desvages <jejem@phyrexia.org>
 * @copyright Jérémy 'Jejem' Desvages
 * @license The MIT License (MIT)
**/

namespace Phyrexia\Cache;

class Memcached {
	private static $instance;

	private function __construct()
	{
	}

	public static function getInstance($host_ = NULL, $port_ = NULL)
	{
		if (is_null(self::$instance) || ! is_null($host) || ! is_null($port)) {
			self::$instance = new \Memcached();
			self::$instance->addServer($host_, (int)$port_);
		}

		return self::$instance;
	}
}

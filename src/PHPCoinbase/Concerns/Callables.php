<?php

namespace PHPCoinbase\Concerns;

use PHPCoinbase\PHPCoinbaseException;

trait Callables
{

	/**
	 * Call required service dynamically
	 * 
	 * @param $serviceName String
	 * @access public
	 * @throws PHPCoinbase\PHPCoinbaseException
	 */
	public function __callStatic(String $serviceName, Array $arguments): Mixed
	{
		$registeredServices = self::$services;
		$serviceKeyNames = array_keys($registeredServices);
		$qualifiedServiceName = self::getQualifiedServiceName($serviceName);
		if (!self::isServiceRegistered($qualifiedServiceName)) {
			throw new PHPCoinbaseException();
		}
	}

	/**
	 * Returns a qualified service name.
	 * 
	 * @param $serviceName String
	 * @access protected
	 * @static
	 * @return String
	 */
	protected static function getQualifiedServiceName(String $serviceName): String
	{
		return str_replace(['use', 'Service'], ['', ''], $serviceName);
	}

	/**
	 * Checks if the called service is registered.
	 * 
	 * @param $serviceName String
	 * @access protected
	 * @static
	 */
	protected static function isServiceRegistered(String $serviceName): Bool
	{
		if (in_array($serviceName, array_keys(self::$services))) {
			return true;
		}

		return false;
	}

}
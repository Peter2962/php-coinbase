<?php

namespace PHPCoinbase\Concerns;

use PHPCoinbase\Concerns\Constants;
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
		$qualifiedServiceName = self::getQualifiedServiceName($serviceName);
		if (!self::isServiceRegistered($qualifiedServiceName)) {
			throw new PHPCoinbaseException(
				Constants::SERVICE_UNREGISTERED
			);
		}

		return self::callRequiredResource(
			$qualifiedServiceName,
			$arguments
		);
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
		return str_replace(
			['use', 'Service'],
			['', ''],
			ucfirst($serviceName)
		);
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

	/**
	 * Calls a resource method returned as the service parameter.
	 * 
	 * @param $serviceName String
	 * @param $serviceArguments Array
	 * @access private
	 */
	private static function callRequiredResource(String $serviceName, Array $serviceArguments)
	{
		$serviceNamespace = "\\PHPCoinbase\\Services\\$serviceName\Service::class";
		return new $serviceNamespace();
	}

}
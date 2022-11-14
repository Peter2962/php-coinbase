<?php

namespace PHPCoinbase;

abstract class PHPCoinbaseErrors
{

	/**
	 * Error definitions
	 * 
	 * @var $errorDefinitions Array
	 * @access protected
	 */
	protected $errorDefinitions = [
		'service_unregistered' => '',
		'service_deprecated' => '',
	];

	/**
	 * Returns an error definition.
	 * 
	 * @param $errorKey String
	 * @access public
	 * @static
	 * @return String
	 */
	public static function getError(String $errorKey)
	{
		return self::$errorDefinitions[$errorKey] ?? null;
	}

}
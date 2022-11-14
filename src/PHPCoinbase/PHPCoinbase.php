<?php

namespace PHPCoinbase;

use PHPCoinbase\Concerns\Callables;

class PHPCoinbase
{

	use Callables;

	/**
	 * List of callable services
	 * 
	 * @var $services Array
	 * @access private
	 * @static
	 */
	private static $services = [
		'Wallets' => [
			'paymentMethods'
		],
		'Data' => []
	];

	/**
	 * Coinbase api key
	 * 
	 * @var $apiKey
	 * @access private
	 * @static
	 */
	private static $apiKey;

	/**
	 * PHPCoinbase constructor
	 * 
	 * @param $apiKey String Coinbase api key
	 * @access public
	 * @return void
	 */
	public function __construct(String $apiKey = null)
	{
		self::$apiKey = $apiKey;
	}

	/**
	 * Set api key statically
	 * 
	 * @param $apiKey String
	 * @access public
	 * @static
	 * @return void
	 */
	public static function setApiKey(String $apiKey)
	{
		self::$apiKey = $apiKey;
	}

}
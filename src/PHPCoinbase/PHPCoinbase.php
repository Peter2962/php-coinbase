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
			'buys',
			'sells',
			'deposits',
			'withdrawals',
			'user',
			'accounts',
			'address',
			'transactions',
			'paymentMethods',
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
	 * Coinbase api secret
	 * 
	 * @var $apiSecret
	 * @access private
	 * @static
	 */
	private static $apiSecret;

	/**
	 * PHPCoinbase constructor
	 * 
	 * @param $apiKey String Coinbase api key
	 * @param $apiSecret String Coinbase api secret
	 * @access public
	 * @return void
	 */
	public function __construct(String $apiKey = null, String $apiSecret = null)
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

	/**
	 * Returns set api key statically
	 * 
	 * @access public
	 * @static
	 * @return string | null
	 */
	public static function getApiKey(): String|null
	{
		return self::$apiKey;
	}

	/**
	 * Set api secret statically
	 * 
	 * @param $apiSecret String
	 * @access public
	 * @static
	 * @return void
	 */
	public static function setApiSecret(String $apiSecret)
	{
		self::$apiSecret = $apiSecret;
	}

	/**
	 * Returns set api secret statically
	 * 
	 * @access public
	 * @static
	 * @return string | null
	 */
	public static function getApiSecret(): String|null
	{
		return self::$apiSecret;
	}

}
<?php

namespace PHPCoinbase;

class PHPCoinbase
{

	/**
	 * List of callable services
	 * 
	 * @var $services Array
	 * @access private
	 */
	private $services = [
		[
			'useWallets' => [
				'paymentMethods'
			]
		]
	];

	/**
	 * Coinbase api key
	 * 
	 * @var $apiKey
	 * @access private
	 */
	private $apiKey;

	/**
	 * PHPCoinbase constructor
	 * 
	 * @param $apiKey String Coinbase api key
	 * @access public
	 * @return void
	 */
	public function __construct(String $apiKey = null)
	{
		PHPCoinbase::$apiKey = $apiKey;
	}

	/**
	 * Call required service dynamically
	 * 
	 * @param $serviceName String
	 * @access public
	 */
	public function __call(String $serviceName, Array $arguments) : Mixed
	{

	}

	/**
	 * Call required service dynamically
	 * 
	 * @param $serviceName String
	 * @access public
	 */
	public function __callStatic(String $serviceName, Array $arguments) : Mixed
	{

	}

}
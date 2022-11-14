<?php

namespace PHPCoinbase;

class PHPCoinbase
{

	/**
	 * @var $apiKey
	 * Coinbase api key
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

}
<?php

namespace PHPCoinbase;

use GuzzleHttp\Client;
use PHPCoinbase\PHPCoinbase;

class PHPCoinbaseRequests
{

	/**
	 * Http client
	 * 
	 * @var $client
	 * @access protected
	 */
	protected $client;

	/**
	 * PHPCoinbase
	 * 
	 * @var $base
	 * @access protected
	 */
	protected $base;

	/**
	 * Coinbase api url
	 * 
	 * @var $apiUrl String
	 * @access protected
	 */
	protected $apiUrl = 'https://api.coinbase.com/v2/';

	public function __construct(PHPCoinbase $base)
	{
		$this->base = $base;
	}

}
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

	public function __construct(PHPCoinbase $base)
	{
		$this->base = $base;
	}

}
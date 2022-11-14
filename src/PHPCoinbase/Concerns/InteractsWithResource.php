<?php

namespace PHPCoinbase\Concerns;

use PHPCoinbase\PHPCoinbaseRequests;

trait InteractsWithResource
{

	/**
	 * Request client
	 * 
	 * @var $client
	 * @access protected
	 */
	protected $client;

	/**
	 * InteractsWithResource construct
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		$this->client = new PHPCoinbaseRequests();
	}

}
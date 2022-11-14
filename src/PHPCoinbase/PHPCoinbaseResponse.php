<?php

namespace PHPCoinbase;

use GuzzleHttp\Psr7\Response;

class PHPCoinbaseResponse
{

	/**
	 * @var $response
	 * @access protected
	 */
	protected $response;

	/**
	 * PHPCoinbaseResponse construct
	 * 
	 * @param $response GuzzleHttp\Psr7\Response
	 * @access public
	 * @return void
	 */
	public function __construct(Response $response)
	{
		$this->response = $response;
	}

}
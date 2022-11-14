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
	 * @return Array
	 */
	public function __construct(Response $response)
	{
		$this->response = $response;
		return $this->resolveResponse($response);
	}

	/**
	 * @param $response GuzzleHttp\Psr7\Response
	 * @access protected
	 * @return Array
	 */
	protected function resolveResponse(Response $response)
	{
		return [
			'status' => $response->getReasonPhrase(),
			'statusCode' => $response->getStatusCode(),
			'data' => $response->body()
		];
	}

}
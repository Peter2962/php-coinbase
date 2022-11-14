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
	}

	/**
	 * Return's response status.
	 * 
	 * @access public
	 * @return String
	 */
	public function getStatus()
	{
		return $this->response->getReasonPhrase();
	}

	/**
	 * Return's response status code.
	 * 
	 * @access public
	 * @return Int
	 */
	public function getStatusCode()
	{
		return (Int) $this->response->getStatusCode();
	}

	/**
	 * Return's response body.
	 * 
	 * @access public
	 * @return Mixed
	 */
	public function getData()
	{
		return $this->response->getBody()->getContents();
	}

}
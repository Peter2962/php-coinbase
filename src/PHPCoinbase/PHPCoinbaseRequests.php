<?php

namespace PHPCoinbase;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use PHPCoinbase\PHPCoinbase;
use PHPCoinbase\PHPCoinbaseResponse;

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
	 * PHPCoinbase api key
	 * 
	 * @var $apiKey
	 * @access protected
	 */
	protected $apiKey;

	/**
	 * PHPCoinbase api secret
	 * 
	 * @var $apiKey
	 * @access protected
	 */
	protected $apiSecret;

	/**
	 * Coinbase api url
	 * 
	 * @var $apiUrl String
	 * @access protected
	 */
	protected $apiUrl = 'https://api.coinbase.com/v2/';

	/**
	 * Default headers
	 * 
	 * @var $defaultHeaders
	 * @access protected
	 */
	protected $defaultHeaders = [];

	/**
	 * PHPCoinbaseRequests constructor
	 * 
	 * @param $defaultHeaders Array|[]
	 * @access public
	 * @see PHPCoinbase\PHPCoinbase::setApiKey
	 * @return void
	 */
	public function __construct(Array $defaultHeaders = [])
	{
		$this->defaultHeaders = $defaultHeaders;
		$this->apiKey = PHPCoinbase::getApiKey();
		$this->apiSecret = PHPCoinbase::getApiSecret();
	}

	/**
	 * Sends a GET request
	 * 
	 * @param $url String
	 * @param $headers Array
	 * @access public
	 */
	public function get(String $url, Array $headers = [])
	{
		return $this->resolveRequest(
			'GET',
			$url,
			$headers
		);
	}

	/**
	 * Sends a POST request
	 * 
	 * @param $url String
	 * @param $headers Array
	 * @param $data Array
	 * @access public
	 */
	public function post(String $url, Array $headers = [], Array $data = [])
	{
		return $this->resolveRequest(
			'POST',
			$url,
			$headers,
			$data
		);
	}

	/**
	 * Sends a PUT request
	 * 
	 * @param $url String
	 * @param $headers Array
	 * @param $data Array
	 * @access public
	 */
	public function put(String $url, Array $headers = [], Array $data = [])
	{
		return $this->resolveRequest(
			'PUT',
			$url,
			$headers,
			$data
		);
	}

	/**
	 * Sends a DELETE request
	 * 
	 * @param $url String
	 * @param $headers Array
	 * @param $data Array
	 * @access public
	 */
	public function delete(String $url, Array $headers = [], Array $data = [])
	{
		return $this->resolveRequest(
			'DELETE',
			$url,
			$headers
		);
	}

	/**
	 * Sends a request with provided parameters.
	 * 
	 * @param $method String
	 * @param $url String
	 * @param $headers Array|[]
	 * @param $data Array|[]
	 */
	protected function resolveRequest(String $method, String $url, Array $headers = [], Array $data = [])
	{
		$timestamp = time();
		$version = '2015-07-22';
		$data = bin2hex($timestamp . $method . $url . json_encode($data));
		$signature = hash_hmac('sha256', $data, $this->apiSecret);

		$newDefaultHeaders = [
			'CB-VERSION' => $version,
			'CB-ACCESS-SIGN' => $signature,
			'CB-ACCESS-KEY' => $this->apiKey,
			'CB-ACCESS-TIMESTAMP' => $timestamp
		];
		
		$mergedHeaders = array_merge(
			$this->defaultHeaders,
			$newDefaultHeaders,
			$headers
		);
		
		$requestUrl = $this->apiUrl . $url;
		$request = new Request(
			$method,
			$requestUrl,
			[
				'headers' => $mergedHeaders,
				'form_params' => $data
			]
		);
		$client = new Client();
		return new PHPCoinbaseResponse($client->send($request));
	}

}
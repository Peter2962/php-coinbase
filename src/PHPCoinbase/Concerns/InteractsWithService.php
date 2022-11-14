<?php

namespace PHPCoinbase\Concerns;

use PHPCoinbase\PHPCoinbaseException;

trait InteractsWithService
{

	/**
	 * @param $serviceName String
	 * @access public
	 * @throws PHPCoinbase\PHPCoinbaseException
	 * @return mixed
	 */
	public function __get(String $serviceName)
	{
		$serviceName = ucfirst($serviceName);
		$resource = $this->namespace . "\\Resources\\" . $serviceName;

		if (!class_exists($resource)) {
			throw new PHPCoinbaseException();
		}

		return new $resource();
	}

}
<?php

namespace PHPCoinbase\Concerns;

trait InteractsWithService
{

	/**
	 * @param $serviceName String
	 * @access public
	 * @return mixed
	 */
	public function __get(String $serviceName)
	{
		$serviceName = ucfirst($serviceName);
		$resource = $this->namespace . "\\" . $serviceName;

		return new $resource();
	}

}
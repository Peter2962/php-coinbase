<?php

namespace PHPCoinbase\Services\Wallets;

use PHPCoinbase\Concerns\InteractsWithService;

class WalletsService
{
	use InteractsWithService;

	/**
	 * @var $namespace
	 * @access protected
	 */
	protected $namespace;

	/**
	 * Wallets service constructor
	 * 
	 * @param $namespace String
	 * @access public
	 * @return mixed
	 */
	public function __construct(String $namespace)
	{
		$this->namespace = $namespace;
	}
}
<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-sells
 */

class Sells
{

	use InteractsWithResource;

	/**
	 * Lists sells for an account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function listSells(String $accountId)
	{

	}

	/**
	 * Get an individual sell.
	 * 
	 * @param $accountId String
	 * @param $sellId String
	 * @access public
	 */
	public function getSell(String $accountId, String $sellId)
	{

	}

	/**
	 * Sells a user-defined amount of any Coinbase supported asset.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function placeSellOrder(String $accountId)
	{

	}

	/**
	 * Completes a sell that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $sellId
	 * @access public
	 */
	public function commitSell(String $accountId, String $sellId)
	{

	}

}
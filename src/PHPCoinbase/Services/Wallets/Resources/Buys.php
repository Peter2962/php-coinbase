<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-buys
 */

class Buys
{

	use InteractsWithResource;

	/**
	 * Lists buys for an account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function listBuys(String $accountId)
	{

	}

	/**
	 * Get an individual buy.
	 * 
	 * @param $accountId String
	 * @param $buyId String
	 * @access public
	 */
	public function getBuy(String $accountId, String $buyId)
	{

	}

	/**
	 * Buys a user-defined amount of any Coinbase supported asset.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function placeBuyOrder(String $accountId)
	{

	}

	/**
	 * Completes a buy that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $buyId
	 * @access public
	 */
	public function commitBuy(String $accountId, String $buyId)
	{

	}

}
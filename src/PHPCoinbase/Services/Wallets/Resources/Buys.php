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
		return $this->client->get(
			'accounts/' . $accountId . '/buys'
		);
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
		return $this->client->get(
			'accounts/' . $accountId . '/buys/' . $buyId
		);
	}

	/**
	 * Buys a user-defined amount of any Coinbase supported asset.
	 * 
	 * @param $accountId String
	 * @param $data Array
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-buys#place-buy-order
	 */
	public function placeBuyOrder(String $accountId, Array $data)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/buys',
			[],
			$data
		);
	}

	/**
	 * Completes a buy that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $buyId String
	 * @access public
	 */
	public function commitBuy(String $accountId, String $buyId)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/buys/' . $buyId . '/commit'
		);
	}

}
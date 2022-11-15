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
		return $this->client->get(
			'accounts/' . $accountId . '/sells'
		);
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
		return $this->client->get(
			'accounts/' . $accountId . '/sells/' . $sellId
		);
	}

	/**
	 * Sells a user-defined amount of any Coinbase supported asset.
	 * 
	 * @param $accountId String
	 * @param $data Array
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-sells#place-sell-order
	 */
	public function placeSellOrder(String $accountId, Array $data)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/sells',
			[],
			$data
		);
	}

	/**
	 * Completes a sell that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $sellId String
	 * @access public
	 */
	public function commitSell(String $accountId, String $sellId)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/sells/' . $sellId . '/commit'
		);
	}

}
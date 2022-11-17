<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-withdrawals
 */

class Withdrawals
{

	use InteractsWithResource;

	/**
	 * Lists withdrawals for an account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function listWithdrawals(String $accountId)
	{
		return $this->client->get(
			'accounts/' . $accountId . '/withdrawals'
		);
	}

	/**
	 * Get a single withdrawal.
	 * 
	 * @param $accountId String
	 * @param $withdrawalId String
	 * @access public
	 */
	public function getWithdrawal(String $accountId, String $withdrawalId)
	{
		return $this->client->get(
			'accounts/' . $accountId . '/withdrawals/' . $withdrawalId
		);
	}

	/**
	 * Withdraws a user-defined amount of funds from a fiat account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function withdrawFunds(String $accountId)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/withdrawals',
			[
				'Content-Type' => 'application/json'
			],
			$params
		);
	}

	/**
	 * Completes a withdrawal that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $withdrawalId String
	 * @access public
	 */
	public function commitWithdrawal(String $accountId, String $withdrawalId)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/withdrawals/' . $withdrawalId
		);
	}

}
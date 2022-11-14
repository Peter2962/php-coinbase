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

	}

	/**
	 * Get a single withdrawal.
	 * 
	 * @param $accountId String
	 * @param $withdrawalId String
	 * @access public
	 */
	public function getDeposit(String $accountId, String $withdrawalId)
	{

	}

	/**
	 * Withdraws a user-defined amount of funds from a fiat account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function withdrawFunds(String $accountId)
	{

	}

	/**
	 * Completes a withdrawal that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $withdrawId String
	 * @access public
	 */
	public function commitWithdraw(String $accountId, String $withdrawId)
	{

	}

}
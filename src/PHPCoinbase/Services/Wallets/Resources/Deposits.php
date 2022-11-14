<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-deposits
 */

class Deposits
{

	use InteractsWithResource;

	/**
	 * Lists fiat deposits for an account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function listDeposits(String $accountId)
	{

	}

	/**
	 * Get one deposit by deposit Id.
	 * 
	 * @param $accountId String
	 * @param $depositId String
	 * @access public
	 */
	public function getDeposit(String $accountId, String $depositId)
	{

	}

	/**
	 * Deposits user-defined amount of funds to a fiat account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function depositFunds(String $accountId)
	{

	}

	/**
	 * Completes a deposit that is created in commit: false state.
	 * 
	 * @param $accountId String
	 * @param $depositId String
	 * @access public
	 */
	public function commitDeposit(String $accountId, String $depositId)
	{

	}

}
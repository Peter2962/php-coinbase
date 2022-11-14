<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-accounts
 */

class Accounts
{

	use InteractsWithResource;

	/**
	 * List a current user's accounts to which the authentication method has access to.
	 * 
	 * @access public
	 */
	public function listAccounts()
	{
		
	}

	/**
	 * Modify a user's account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function updateAccount(String $accountId)
	{

	}

	/**
	 * Show (or get) a current user's account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function getAccount(String $accountId)
	{

	}

	/**
	 * Show (or get) a current user's account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function deleteAccount(String $accountId)
	{

	}

}
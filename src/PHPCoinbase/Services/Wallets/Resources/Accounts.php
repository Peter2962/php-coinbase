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
	 * @return PHPCoinbase\PHPCoinbaseResponse
	 */
	public function listAccounts()
	{
		return $this->client->get(
			'accounts'
		);
	}

	/**
	 * Modify a user's account.
	 * 
	 * @param $accountId String
	 * @param $name String
	 * @access public
	 * @return PHPCoinbase\PHPCoinbaseResponse
	 */
	public function updateAccount(String $accountId, String $name)
	{
		return $this->client->put(
			'accounts/' . $accountId,
			[],
			['name' => $name]
		);
	}

	/**
	 * Show (or get) a current user's account.
	 * 
	 * @param $accountId String
	 * @access public
	 * @return PHPCoinbase\PHPCoinbaseResponse
	 */
	public function getAccount(String $accountId)
	{
		return $this->client->get(
			'accounts/' . $accountId
		);
	}

	/**
	 * Deleta a user's account.
	 * 
	 * @param $accountId String
	 * @access public
	 * @return PHPCoinbase\PHPCoinbaseResponse
	 */
	public function deleteAccount(String $accountId)
	{
		return $this->client->delete(
			'accounts/' . $accountId
		);
	}

}
<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-addresses
 */

class Address
{

	use InteractsWithResource;

	/**
	 * Lists addresses for an account.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function listAddresses(String $accountId)
	{
		return $this->client->get(
			'accounts/'. $accountId .'/addresses'
		);
	}

	/**
	 * Get an single address for an account.
	 * 
	 * @param $accountId String
	 * @param $addressId String
	 * @access public
	 */
	public function getAddress(String $accountId, String $addressId)
	{
		return $this->client->get(
			'accounts/'. $accountId .'/addresses/' . $addressId
		);
	}

	/**
	 * List transactions that have been sent to a specific address.
	 * 
	 * @param $accountId String
	 * @param $addressId String
	 * @access public
	 */
	public function listTransactions(String $accountId, String $addressId)
	{
		return $this->client->get(
			'accounts/'. $accountId .'/addresses/' . $addressId . '/transactions'
		);
	}

	/**
	 * Creates a new address for an account.
	 * 
	 * @param $accountId String
	 * @param $accoutName String
	 * @access public
	 */
	public function createAddress(String $accountId, String $accoutName)
	{
		return $this->client->post(
			'accounts/'. $accountId .'/addresses/',
			[],
			['name' => $accoutName]
		);
	}

}
<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions
 */

class Transactions
{

	use InteractsWithResource;

	/**
	 * Lists the transactions of an account by account ID.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function listTransactions(String $accountId)
	{
		return $this->client->get(
			'accounts/' . $accountId . '/transactions'
		);
	}

	/**
	 * Get a single transaction for an account.
	 * 
	 * @param $accountId String
	 * @param $transactionId String
	 * @access public
	 */
	public function getTransaction(String $accountId, String $transactionId)
	{
		return $this->client->get(
			'accounts/' . $accountId . '/transactions/' . $transactionId
		);
	}

	/**
	 * Send funds to a network address for any Coinbase supported asset, or email address of the recipient.
	 * 
	 * @param $accountId String
	 * @param $data Array
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#send-money
	 */
	public function sendMoney(String $accountId, Array $data)
	{
		$data['type'] = 'send';
		return $this->client->post(
			'accounts/' . $accountId . '/transactions',
			['Content-Type' => 'application/json'],
			$data
		);
	}

	/**
	 * Transfer any Coinbase supported digital asset between two of a single user's accounts.
	 * 
	 * @param $accountId String
	 * @param $data Array
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#transfer-money-between-accounts
	 */
	public function transferMoneyBetweenAccounts(String $accountId, Array $data)
	{
		$data['type'] = 'transfer';
		return $this->client->post(
			'accounts/' . $accountId . '/transactions',
			['Content-Type' => 'application/json'],
			$data
		);
	}

	/**
	 * Requests money from an email address.
	 * 
	 * @param $accountId String
	 * @param $data Array
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#request-money
	 */
	public function requestMoney(String $accountId, Array $data)
	{
		$data['type'] = 'request';
		return $this->client->post(
			'accounts/' . $accountId . '/transactions',
			['Content-Type' => 'application/json'],
			$data
		);
	}

	/**
	 * Lets the recipient of a money request complete the request by sending money to the user who requested the money.
	 * 
	 * @param $accountId String
	 * @param $transactionId String
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#complete-request-money
	 */
	public function completeRequestMoney(String $accountId, String $transactionId)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/transactions/' . $transactionId . '/complete'
		);
	}

	/**
	 * Lets the user resend a money request. This notifies the recipient with a new email.
	 * 
	 * @param $accountId String
	 * @param $transactionId String
	 * @access public
	 */
	public function resendRequestMoney(String $accountId, String $transactionId)
	{
		return $this->client->post(
			'accounts/' . $accountId . '/transactions/' . $transactionId . '/resend'
		);
	}

	/**
	 * Lets a user cancel a money request. Money requests can be canceled by the sender or the recipient.
	 * 
	 * @param $accountId String
	 * @param $transactionId String
	 * @access public
	 */
	public function cancelRequestMoney(String $accountId, String $transactionId)
	{
		return $this->client->delete(
			'accounts/' . $accountId . '/transactions/' . $transactionId
		);
	}

}
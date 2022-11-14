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

	}

	/**
	 * Send funds to a network address for any Coinbase supported asset, or email address of the recipient.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function sendMoney(String $accountId)
	{

	}

	/**
	 * Transfer any Coinbase supported digital asset between two of a single user's accounts.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function transferMoneyBetweenAccounts(String $accountId)
	{

	}

	/**
	 * Requests money from an email address.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function requestMoney(String $accountId)
	{

	}

	/**
	 * Lets the recipient of a money request complete the request by sending money to the user who requested the money.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function completeRequestMoney(String $accountId, String $transactionId)
	{

	}

	/**
	 * Lets the user resend a money request. This notifies the recipient with a new email.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function resendRequestMoney(String $accountId, String $transactionId)
	{

	}

	/**
	 * Lets a user cancel a money request. Money requests can be canceled by the sender or the recipient.
	 * 
	 * @param $accountId String
	 * @access public
	 */
	public function cancelRequestMoney(String $accountId, String $transactionId)
	{

	}

}
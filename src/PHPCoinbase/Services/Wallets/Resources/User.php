<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-users
 */

class User
{

	use InteractsWithResource;

	/**
	 * Get any user's public information with their ID.
	 * 
	 * @param $userId String
	 * @access public
	 */
	public function getPublicUser(String $userId)
	{
		return $this->client->get('user/' . $userId);
	}

	/**
	 * Get current user's public information.
	 * 
	 * @access public
	 */
	public function getCurrentUser()
	{
		return $this->client->get('user');
	}

	/**
	 * Get current user's authorization information
	 * 
	 * @access public
	 */
	public function getCurrentUserAuthInfo()
	{
		return $this->client->get('user/auth');
	}

	/**
	 * Modify current user and their preferences.
	 * 
	 * @param $data Array
	 * @access public
	 * @see https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-users#update-current-user
	 */
	public function updateCurrentUser(Array $data)
	{
		return $this->client->update(
			'user',
			['Content-Type' => 'application/json'],
			$data
		);
	}

}
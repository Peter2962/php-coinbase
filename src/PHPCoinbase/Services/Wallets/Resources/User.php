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

	}

	/**
	 * Get current user's public information.
	 * 
	 * @access public
	 */
	public function getCurrentUser()
	{

	}

	/**
	 * Get current user's authorization information
	 * 
	 * @access public
	 */
	public function getCurrentUserAuthInfo()
	{

	}

	/**
	 * Modify current user and their preferences.
	 * 
	 * @access public
	 */
	public function updateCurrentUser()
	{

	}

}
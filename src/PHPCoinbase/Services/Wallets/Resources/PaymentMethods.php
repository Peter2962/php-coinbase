<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-payment-methods
 */

class PaymentMethods
{

	use InteractsWithResource;

	/**
	 * Lists payment methods.
	 * 
	 * @access public
	 * @return PHPCoinbase\PHPCoinbaseResponse
	 */
	public function listPaymentMethods()
	{
		return $this->client->get('payment-methods');
	}

	/**
	 * Show payment method with provided id.
	 * 
	 * @param $paymentMethodId String
	 * @access public
	 * @return PHPCoinbase\PHPCoinbaseResponse
	 */
	public function getPaymentMethod(String $paymentMethodId)
	{
		return $this->client->get('payment-methods/' . $paymentMethodId);
	}

}
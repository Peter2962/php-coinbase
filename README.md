# PHP Based Coinbase SDK Library

Unofficial sdk library for Coinbase.
Note: This library is still in development.

For more information, please refer to the [official documentation](https://developers.coinbase.com/api/v2).

## Installation

Install the library using Composer. Please read the Composer Documentation if you are unfamiliar with Composer or dependency managers in general.

```json
"require": {
    "php-coinbase/php-coinbase": "dev-master"
}
```
## Authentication

### API Key

This library makes use of the API key authentication. Oauth2 authentication will be added in future.

```php
use PHPCoinbase\PHPCoinbase;

// Setting your api keys
PHPCoinbase::setApiKey($apiKey);
PHPCoinbase::setApiSecret($apiSecret);

// OR

$phpcoinbase = new PHPCoinbase($apiKey, $apiSecret);
```

### Responses

Each request returns a response object [PHPCoinbase\PHPCoinbaseResponse].
The response object contains three methods:

- getStatus: _'OK'_
- getStatusCode: _'200'_
- getData: _{'data': 'my response'}_

## Usage

### [Wallet API Endpoints]
```php
$walletService = PHPCoinbase::useWalletsService();
```

#### [Users resource](https://developers.coinbase.com/api/v2#users)
```php
$usersResource = $walletService->users;
```
#### Show a user
```php
$usersResource->getPublicUser('1a2b3c4d-5e6f7g8h-9i0j0k0l');
```
#### Show current user
```php
$usersResource->getCurrentUser();
```
#### Show authorization information
```php
$usersResource->getCurrentUserAuthInfo()
```
#### Update current user
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-users#update-current-user]
```php
$data = [
    'name' => 'My new name'
];
$usersResource->updateCurrentUser($data)
```

#### [Accounts resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-accounts)
```php
$accountsResource = $walletsService->accounts;
```

#### List accounts
```php
$accountsResource->listAccounts()
```
#### Update account
```php
$accountsResource->updateAccount('account_id', 'name');
```
#### Show an account
```php
$accountsResource->getAccount('account_id');
```
#### Delete account
```php
$accountsResource->deleteAccount('account_id');
```

#### [Addresses resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-addresses)
```php
$addressResource = $walletsService->address;
```

#### List addresses 
```php
$addressResource->listAddresses('account_id');
```
#### Show Address 
```php
$addressResource->getAddress('account_id', 'address_id');
```
#### List Transactions
```php
$addressResource->listTransactions('account_id');
```
#### Create Address
```php
$addressResource->createAddress('account_id', 'address_name');
```

#### [Transactions resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions)
```php
$transactionsResource = $walletsService->transactions;
```

#### List Transactions
```php
$transactionsResource->listTransactions('account_id');
```
#### Show a Transaction
```php
$transactionsResource->getTransaction('account_id', 'transaction_id');
```
#### Send Money
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#send-money]
```php
$data = [
    'to' => 'blockchain address or email',
    'amount' => 50
];
$transactionsResource->sendMoney('account_id', $data);
```
#### Transfer Money (between accounts)
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#transfer-money-between-accounts]
```php
$data = [
    'to' => 'to_account_id',
    'amount' => 50,
    'currency' => 'ETH'
];
$transactionsResource->transferMoneyBetweenAccounts('account_id', $data);
```
#### Request Money
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-transactions#request-money]
```php
$data = [
    'to' => 'to@email.com', // email
    'amount' => 50,
    'currency' => 'ETH'
];
$transactionsResource->requestMoney('account_id', $data);
```
#### Complete Request Money
```php
$transactionsResource->completeRequestMoney('account_id', 'transaction_id');
```
#### Re-send Request Money
```php
$transactionsResource->resendRequestMoney('account_id', 'transaction_id');
```
#### Cancel Request Money
```php
$transactionsResource->cancelRequestMoney('account_id', 'transaction_id');
```

#### [Buys resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-buys#buy-resource)
```php
$buysResource = $walletsService->buys;
```

#### List buys
```php
$buysResource->listBuys('account_id');
```
#### Show a buy
```php
$buysResource->getBuy('account_id', 'buy_id');
```
#### Place buy order
```php
$data = [
    'amount' => 50,
    'currency' => 'ETH'
];
$buysResource->placeBuyOrder('account_id', $data);
```
#### Commit a buy
```php
$buysResource->commitBuy('account_id', 'buy_id');
```

#### [Sells resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-sells)
```php
$sellsResource = $walletsService->sells;
```

#### List sells
```php
$sellsResource->listSells('account_id');
```
#### Show a sell
```php
$sellsResource->getSell('account_id', 'sell_id');
```
#### Place sell order
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-sells#place-sell-order]
```php
$data = [
    'amount' => 50,
    'currency' => 'ETH'
];
$sellsResource->placeSellOrder('account_id', $data);
```
#### Commit a sell
```php
$sellsResource->commitSell('account_id', 'sell_id');
```

#### [Deposits resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-deposits)
```php
$depositsResource = $walletsService->deposits;
```

#### List Deposits
```php
$depositsResource->listDeposits('account_id');
```
#### Show a Deposit
```php
$depositsResource->getDeposit('account_id', 'deposit_id');
```
#### Deposit Funds
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-deposits#deposit-funds]
```php
$data = [
    'amount' => 50,
    'currency' => 'ETH',
    'payment_method' => 'payment_method_id' 
];
$depositsResource->depositFunds('account_id', $data);
```
#### Commit a Deposit
```php
$depositsResource->commitDeposit('account_id', 'deposit_id');
```

#### [Withdrawals resource](https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-withdrawals)
```php
$withdrawalsResource = $walletsService->withdrawals;
```

#### List Withdrawals
```php
$withdrawalsResource->listWithdrawals('account_id');
```
#### Show a Withdrawal
```php
$withdrawalsResource->getWithdrawal('account_id', 'withdrawal_id');
```
#### Withdraw Funds
[See: https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-withdrawals#withdraw-funds]
```php
$data = [
    'amount' => 50,
    'currency' => 'ETH',
    'payment_method' => 'payment_method_id' 
];
$withdrawalsResource->withdrawFunds('account_id', $data);
```
#### Commit a Withdrawal
```php
$withdrawalsResource->commitWithdrawal('account_id', 'withdrawal_id');
```
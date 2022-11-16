# PHP Based Coinbase SDK Library

Unofficial sdk library for Coinbase.
Note: This library is still in development.

For more information, please refer to the: [official documentation](https://developers.coinbase.com/api/v2).

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
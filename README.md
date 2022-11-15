# PHP Based Coinbase SDK Library

Unofficial sdk library for Coinbase.
Note: This library is still in development.

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
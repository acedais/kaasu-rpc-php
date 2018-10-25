# Kaasu RPC PHP

Kaasu RPC PHP is a PHP wrapper for the Kaasu JSON-RPC interfaces.

---

1) [Install Kaasu RPC PHP](#install-kaasu-rpc-php)
1) [Examples](#examples)
1) [Docs](#docs)
1) [License](#license)

---

## Install Kaasu RPC PHP

This package requires PHP >=7.1.3. Require this package with composer:

```
composer require kaasu/kaasu-rpc-php
```

## Examples

```php
use Kaasu\Kaasud;

$config = [
    'rpcHost' => 'http://127.0.0.1',
    'rpcPort' => 10112,
];

$kaasud = new Kaasud($config);
echo $kaasud->getBlockCount();

> {"id":2,"jsonrpc":"2.0","result":{"count":784547,"status":"OK"}}
``` 

```php
use Kaasu\KaasuService;

$config = [
    'rpcHost'     => 'http://127.0.0.1',
    'rpcPort'     => 8070,
    'rpcPassword' => 'test',
];

$turtleService = new KaasuService($config);
echo $turtleService->getBalance($walletAddress);

> {"id":0,"jsonrpc":"2.0","result":["availableBalance":100,"lockedAmount":50]}
``` 

Optionally, you may access details about the response:

```php
$response = $turtleService->getBalance($walletAddress);

// The result field from the RPC response
$response->result();

// RPC response as JSON string
$response->toJson();

// RPC response as an array
$response->toArray();

// Or other response details
$response->getStatusCode();
$response->getProtocolVersion();
$response->getHeaders();
$response->hasHeader($header);
$response->getHeader($header);
$response->getHeaderLine($header);
$response->getBody();
``` 

## Docs

Documentation of the Kaasu RPC API and more PHP examples for this package can be found at [api-docs.kaasu.lol](https://api-docs.getkaasu.org).

## License

Kaasu RPC PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

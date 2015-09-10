# PSR-7 middleware for league/route

[![Latest Version](https://img.shields.io/github/release/hannesvdvreken/route-middleware.svg?style=flat-square)](https://github.com/hannesvdvreken/route-middleware/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/hannesvdvreken/route-middleware/master.svg?style=flat-square)](https://travis-ci.org/hannesvdvreken/route-middleware)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/hannesvdvreken/route-middleware.svg?style=flat-square)](https://scrutinizer-ci.com/g/hannesvdvreken/route-middleware/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/hannesvdvreken/route-middleware.svg?style=flat-square)](https://scrutinizer-ci.com/g/hannesvdvreken/route-middleware)

[PSR-7 compatible](https://github.com/hannesvdvreken/psr7-middlewares) Middleware for league/route's RouteCollection.

## Installation

```
composer require hannesvdvreken/route-middleware
```

## Description

This package aims to provide an easy to use middleware that takes PSR-7 Request object and converts it
to a Response object by calling the Route's dispatcher class.

```php
use League\Router\RouteCollection

$router = new RouteCollection();

// Setup router
$router->addRoute('GET', '/robots.txt', function (RequestInterface $request, ResponseInterface $response) {
    // Adjust the response
    return $response;
});

$app = new League\Route\Stack\Middleware($router);

$response = $app->handle($request);
```

## Contributing

Contributions are welcome. See the [contributions file](CONTRIBUTING.md) to know how to contribute.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

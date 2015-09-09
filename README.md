# PSR-7 middleware for league/route

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

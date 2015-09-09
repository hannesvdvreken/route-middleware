<?php
namespace League\Route\Stack;

use League\Route\RouteCollection;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr7Stack\Contracts\Core;

class Middleware implements Core
{
    /**
     * @var RouteCollection
     */
    private $router;

    /**
     * @param RouteCollection $router
     */
    public function __construct(RouteCollection $router)
    {
        $this->router = $router;
    }

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(RequestInterface $request)
    {
        $method = $request->getMethod();
        $path = $request->getUri()->getPath();

        return $this->router->getDispatcher()->dispatch($method, $path);
    }
}

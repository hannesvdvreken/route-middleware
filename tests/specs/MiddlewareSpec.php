<?php
namespace League\Route\Stack;

use League\Route\Dispatcher;
use League\Route\RouteCollection;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class MiddlewareSpec extends ObjectBehavior
{
    public function it_is_initializable(RouteCollection $router)
    {
        $this->beConstructedWith($router);
        $this->shouldHaveType('League\Route\Stack\Middleware');
    }

    public function it_handles_request(
        RouteCollection $router,
        Dispatcher $dispatcher,
        RequestInterface $request,
        UriInterface $uri,
        ResponseInterface $response)
    {
        $this->beConstructedWith($router);

        $router->getDispatcher()->willReturn($dispatcher);
        $dispatcher->dispatch('GET', '/path/to/endpoint')->willReturn($response);
        $request->getUri()->willReturn($uri);
        $uri->getPath()->willReturn('/path/to/endpoint');
        $request->getMethod()->willReturn('GET');

        $this->handle($request)->shouldReturn($response);
    }
}

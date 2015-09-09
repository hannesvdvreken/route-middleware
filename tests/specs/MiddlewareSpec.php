<?php
namespace League\Route\Stack;

use League\Route\RouteCollection;
use PhpSpec\ObjectBehavior;

class MiddlewareSpec extends ObjectBehavior
{
    public function it_is_initializable(RouteCollection $router)
    {
        $this->beConstructedWith($router);
        $this->shouldHaveType('League\Route\Stack\Middleware');
    }
}

<?php

namespace app\Router;

use app\core\Request\Request;

class Router
{
    private array $routesArr = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct()
    {
    }

    public function start($routes, $method, $uri)
    {
        $this->matchRoute($routes);
        if ($method == 'GET') {
            if (isset($this->routesArr[$method][$uri])) {
                $route = $this->routesArr[$method][$uri];
                $route->action();
            }
        }
    }

    public function matchRoute($routes)
    {
        foreach ($routes as $route) {
            $this->routesArr[$route->getMethod()][$route->getUri()] = $route;
        }
    }
}

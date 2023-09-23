<?php

namespace app\Route;

class Route
{

    public function __construct(
        public $method,
        public $uri,
        public $action
    ) {
    }

    public static function get($uri, $action)
    {
        return new static('GET', $uri, $action);
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function action()
    {
        $controller = new $this->action[0];
        $action = $this->action[1];

        $controller->$action();
    }
}

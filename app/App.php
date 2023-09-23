<?php

namespace app;

use app\core\Container\Container;

class App
{
    public Container $container;

    public function __construct()
    {
        $this->container = Container::registerServices();
    }

    public function run()
    {
        $this->container->router->start(
            $this->container->getRoutes(),
            $this->container->request->getMethod(),
            $this->container->request->getUri(),
        );
    }
}

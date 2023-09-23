<?php

namespace app\core\Container;

use app\core\Request\Request;
use app\core\Settings\Settings;
use app\Router\Router;

class Container
{
    public function __construct(
        public  Request $request,
        public  array $routes,
        //public static Settings $settings;
        public  Router $router,
    ) {
    }

    public static function registerServices(): static
    {
        return new static(
            Request::getAll(),
            require_once APP_PATH . '/app/config/routes.php',
            //self::$settings = Settings::getConfig();
            new Router(),
        );
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}

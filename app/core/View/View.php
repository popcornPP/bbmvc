<?php

namespace app\core\View;

class View
{
    public function __construct()
    {
    }

    public function render($item)
    {
        require_once  APP_PATH . '/src/public/pages/'. $item . '.php';
    }
}

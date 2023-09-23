<?php

namespace app\core\Controller;

use app\core\View\View;

abstract class Controller
{
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }
}

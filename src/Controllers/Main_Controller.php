<?php

namespace src\Controllers;

use app\core\Controller\Controller;

class Main_Controller extends Controller
{

    public function index()
    {
        $this->view->render('main');
    }
}


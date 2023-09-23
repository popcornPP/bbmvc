<?php

namespace src\Controllers\Auth;

use app\core\Controller\Controller;

class Auth_Controller extends Controller
{

    public function index()
    {
        $this->view->render('registration');
    }
}


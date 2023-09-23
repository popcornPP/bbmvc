<?php

namespace src\Controllers;

use app\core\Controller\Controller;

class Post_Controller extends Controller
{

    public function index()
    {
        $this->view->render('post');
    }
}


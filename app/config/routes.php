<?php

use app\Route\Route;
use src\Controllers\Auth\Auth_Controller;
use src\Controllers\Main_Controller;
use src\Controllers\Post_Controller;

return [
    Route::get('/', [Main_Controller::class, 'index']),
    Route::get('/post', [Post_Controller::class, 'index']),

    Route::get('/auth', [Auth_Controller::class, 'index']),

];

<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\GreetController;

Route::get('/greet1', function () {
    return ('Hello, Laravel!');
});

Route::get('/greet2', function () {
    return ('Welcome to my first Laravel project!!!');
});

Route::get('/greet',[GreetController::class,'greet']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;


Route::get('/greet1', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet2', function () {
    return 'Hello World!';
});

Route::get('/greet', [GreetController::class,'IntroductionPage']);
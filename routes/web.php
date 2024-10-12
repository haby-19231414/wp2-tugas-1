<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class, 'index']);

Route::get('home', [HelloWorldController::class, 'home']);
Route::get('about', [HelloWorldController::class, 'about']);
Route::get('blog', [HelloWorldController::class, 'blog']);
Route::get('contact', [HelloWorldController::class, 'contact']);




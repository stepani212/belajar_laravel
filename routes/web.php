<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('contact', [HomeController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

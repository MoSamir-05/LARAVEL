<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
Route::get('/', function () {
    return view('welcome');
});
Route::view('home','home');
Route::view('about','about');
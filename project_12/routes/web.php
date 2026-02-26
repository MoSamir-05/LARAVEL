<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
use  App\Http\Middleware\country;
Route::get('/', function () {
    return view('welcome');
});
Route::view('home','home')->middleware([AgeCheck::class,country::class]);
Route::view('about','about');
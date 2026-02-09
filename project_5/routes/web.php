<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController1;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1',[UserController1::class,"getUser1"]);

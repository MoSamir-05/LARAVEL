<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController1;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo1',function(){
    return view ('home1');
});

Route::get('/user-home',[ UserController1::class,'userHome2']);
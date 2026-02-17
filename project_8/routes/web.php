<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCountroller;
Route::get('/', function () {
    return view('welcome');
});
Route::view('student/home','home1');
// Route::get('student/show',[HomeCountroller::class,'show1']);
// Route::get('student/show',[HomeCountroller::class,'add']);

Route::prefix('student')->group(function(){
    Route::view('/home','home1');
    Route::get('/show',[HomeCountroller::class,'show1']);
    Route::get('/add',[HomeCountroller::class,'add']);
});


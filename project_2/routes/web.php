<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::view('/abc','welcome');

Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about',['name'=>$name]);
});
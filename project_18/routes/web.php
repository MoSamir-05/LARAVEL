<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user-form', function () {
//     return view('user-form1');
// });

Route::view('user-form', 'user-form1');
Route::post('adduser',[Usercontroller::class,'adduser']);
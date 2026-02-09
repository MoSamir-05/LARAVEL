<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/about','about');
Route::view('/userlogin','admin.login1');
Route::get('user-home',[Usercontroller::class,'userHome']);
// Route::get('user-about',[Usercontroller::class,'userAbout']);
Route::get('user-about/{name}',[Usercontroller::class,'getName']);
Route::get('user-login',[Usercontroller::class,'userLogin']);

Route::get('istar',[Usercontroller::class,'getUser']);
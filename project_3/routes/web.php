<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('user',[StudentController::class,'getUser']);

Route::get('about',[StudentController::class,'getData']);

Route::get('user1/{name}',[StudentController::class,'getName']);

Route::get('user1',[StudentController::class,'getUser1']);

// Route::get('',[StudentController::class,'getUser2']);
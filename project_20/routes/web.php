<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-student', function () {
    return view('add-student');
});

Route::post('add',[StudentController::class,'add' ]);
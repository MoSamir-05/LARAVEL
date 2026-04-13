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
Route::get('list',[StudentController::class,'list' ]);
Route::get('delete/{id}',[StudentController::class,'delete']);
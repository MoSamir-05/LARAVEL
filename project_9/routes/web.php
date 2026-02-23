<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\std_controller;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('show',[std_controller::class,'show']);
// Route::get('add',[std_controller::class,'add']);
// Route::get('delete',[std_controller::class,'delete']);

Route::controller(std_controller::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('about/{name}','about');

});
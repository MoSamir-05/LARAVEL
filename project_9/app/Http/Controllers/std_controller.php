<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class std_controller extends Controller
{
    function show(){
        return "list of Students";
    }
    function add(){
        return "list of Students Added";
    }
    function delete(){
        return "list of Students deleted";
    }
    function about($name){
        return $name;
    }
}

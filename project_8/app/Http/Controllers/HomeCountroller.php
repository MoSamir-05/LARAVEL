<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCountroller extends Controller
{
    function show1(){
        return "Student list";
    }
    function add(){
        return "Add new Student";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
     function getUser()
    {
        return "MO SAMIR SAEED SITPONWALA";
    }

    function getData()
    {
        return "Welcome to ISTAR ";
    }

    function getName($name)
    {
        // return "Welcome to ISTAR ".$name;
        return view('getUser',['name'=>$name]);
    }

    function getUser1()
    {
        return view('user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    function getUser1(){
        $name="ISTAR";
        return view('user',["user"=>$name]);
    }
}

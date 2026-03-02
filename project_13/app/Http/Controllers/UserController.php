<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function adduser(Request $request){
        echo "User name is :$request->username";
        echo "<br>";
        echo "User Email is :$request->email";
        echo "<br>";
        echo "User City is :$request->city";
        echo "<br>";
    }
}

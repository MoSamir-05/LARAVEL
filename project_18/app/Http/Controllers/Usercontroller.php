<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function adduser(Request $request){
        $request -> validate ([
            'fname'=>'required |min:3 |max:10',
            'lname'=>'required |min:3 |max:10',
            'email'=>'email',
            'password'=>'required |min:6',
            'gender'=>'required',
        ],[
            'fname.required'=>'first name can not be empty',
            'fname.min'=>'first name must be at least 3 characters',
            'fname.max'=>'first name must be less than 10 characters',
            // 'email.email'=>'email must be a valid'
        ]);
        return $request;
    }
}

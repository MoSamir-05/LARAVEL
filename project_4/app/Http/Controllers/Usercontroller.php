<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    function userHome(){
        return view('about');
    }
    function userAbout(){
        return view('home');
    }
    function userLogin(){
        return view('admin.login1');
    }
    function getName($name){
        return view('getUser',['name'=>$name]);
    }
}

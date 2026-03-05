<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    function users(){
        // return DB::select('select*from users2');
        $users=DB::select('select*from users2');
        return view('users',['users'=>$users]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents(){
        $student=\App\Models\Student::all();
        return $student;
    }
}

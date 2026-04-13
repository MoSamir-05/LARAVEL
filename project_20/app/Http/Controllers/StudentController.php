<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function add(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return "Student added successfully";

        if($student){
                return "Student added successfully";
            }
            else{
                return "Failed to add student";
            }

            
    }

    
    function list(){
        $students = Student::all();
        return view('list-student',['students'=>$students]);
    }

    
    function delete($id){
        $isDeleted=Student::destroy($id);
        if($isDeleted){
            return redirect('list');
        }else{
            return "Failed to delete student";
        }
    }
}   
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showstudent extends Controller
{
    //
    function viewStudentDetails(){
        $student = \App\Models\student::all();
        return view('showstudent',['student'=>$student]);
    }
}
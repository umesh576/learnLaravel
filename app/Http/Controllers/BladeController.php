<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //

    function randomVariable(){
        $name = "umesh joshi is a person";
        $user = ['umesh','joshi','and'];
        return view("blade",['username'=>$name,'users'=>$user]);
    }
}

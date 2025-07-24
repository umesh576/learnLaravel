<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    // get submitted data
    function addUser(Request $req){
        // return $req;
        // echo "new user adding form";
        
        echo 'name: '.$req->username.' email: '.$req->email.' city: '.$req->city;
    }
}

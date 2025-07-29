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
        $req ->validate([
            'username'=> 'required| min:3 | max:10',
            'email'=> 'required | email',
            'city'=> 'required| min:2| max:10',
            'skill'=> 'required'
        ]);
        return $req;
        // echo 'name: '.$req->username.' email: '.$req->email.' city: '.$req->city."skill".print_r($req->skill);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AddUserController extends Controller
{
    //
    function addUser(Request $request){
        $request->validate(
        [
                'username'=>'required | min:3',
                'email'=>'required | email',
                'address'=>'required | min:2'
            
            
        ],[
            'username.required'=>'User feild cannot be empty.',
            'email.email' =>'please give valid email',
            'address.required'=>'address is required'
        ]

        );

        return $request;

    }
}

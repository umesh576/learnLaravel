<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //

    function getUser($username){
        return view('url.DynamicProfile',['username'=>$username]);

    }
}

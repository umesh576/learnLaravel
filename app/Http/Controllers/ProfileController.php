<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function user(){
        return to_route('user',["name"=>'anil']);
    }
}

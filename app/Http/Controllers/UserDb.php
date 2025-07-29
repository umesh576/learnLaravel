<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDb extends Controller
{
    //
    function users(){
        return DB::select('select * from users;');
    }
}
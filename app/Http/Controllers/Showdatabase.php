<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Showdatabase extends Controller
{
    //
    function showDbData(){
         $users = DB::select('select * from users');
        
        return view('Shodatabase.ShowData',['userdata'=>$users]);
    }
}
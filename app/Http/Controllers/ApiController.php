<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    //
    function getData(){

        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return view("ApiController");
        $data= $response->body();
        return view('ApiController',['data'=>json_decode( $data)]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //

    function getUser(){
        return 'joshi';
        
    }

    function getName(){
        return 'hello world';
    }


    // also for the dynamic page
    function getUserName($name){

        

            return view('username',['name'=>$name]);

        
    }


    function getView(){
        return view ('user');
    }
    
    // for the nested view
    function adminLogin(){

        if(View::exists('admin.adminLogin')){

            
            return view('admin.adminlogin');
        }else{
            echo 'hello this page is not found ';
        }

    }

    function helloPage(){
        return view ('hello');
    }

    function adminSignuppage($adminname){

        // for checking the view is exixtes or not


        return view ('admin.adminSignup',['adminname'=>$adminname]);
    }

}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\formHandel2Controller;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Middleware\checkAge;

Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::view('/home', 'home');

// if i want to redirect when i get into the home page
// route::redirect('/home','/about/umesh');



// Route::get('/about/{name}', function ($name) {
//     // echo $name;
//     return view('about',['name'=> $name]);
// });

// for controller
// Route::get("/controller", [UserController::class,'getUser']);
// Route::get('/getname',[UserController::class,'getName']);

// for pass the name in the controller
// Route::get('/getusername/{name}',[UserController::class,'getUserName']);


//this route is learn for the how to see the view throught the controller
// Route::get('/view',[UserController::class,'getView']);


// nested view file access
// Route::get('/admin',[UserController::class,'adminLogin']);


// aceccing the dynamic view page
// Route::get('/hello',[UserController::class,'helloPage']);

// passing data in nested view page
// Route::get('/admin/{name}',[UserController::class,'adminSignuppage']);


// ? now from the Blade controller

// Route::get('/blade',[BladeController::class,'randomVariable']);



// ? about page route handel

Route::get('/about',[AboutController::class,'aboutPage']);
Route::get('/contact',[ContactController::class,'contactPage']);


// ? about handel the route
Route::view('/user-form','userForm');
Route::post('/addUser',[FormController::class,'addUser']);

// handel advance form like radio checkbox

Route::view('/user-form1','userForm2');
Route::post('/addUserDetails',[formHandel2Controller::class,'handelForm']);


Route::view('/addUserForm','AddUser');
Route::post('/addUser2',[AddUserController::class,'addUser']);


// url folder in view route are here 

Route::view('/urlHome','url.home');


Route::view('/urlAbout','url.about');


Route::view('/urlContact','url.contact')->name('uc');


Route::get('/hello',[ProfileController::class, 'user']);

Route::view('/user/profile/{name}','url.profile');

Route::get('/userProfile/{username}',[UserProfileController::class,'getUser']);



//started learn about the middleware


Route::view('middleHome','middlewarepage.home')->middleware('check1');
Route::view('middleAbout','middlewarepage.about');


// method of doing routing in many route
// Route::middleware('check1')->group(
//     function(){
//         Route::view('middleHome','middlewarepage.home');
// Route::view('home','middlewarepage.about');
//     }
// );
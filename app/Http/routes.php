<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return \view('index/index');
});

Route::get("/register",  function (){
    return view("register/register");
});

Route::get("/login",  function (){
    return view("register/login");
});

Route::post("/login","LoginControllers@index");

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get("test","UiController@index");

Route::get("/dep",  function (){
    return view("admin/Department/index");
});
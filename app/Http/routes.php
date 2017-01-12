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

Route::group(['prefix' => 'admin'], function()
{
    Route::get('users',"UsersController@index");
    
    Route::post('users/edit',"UsersController@edit");
    Route::get('users/department',"UsersController@getDepartment");
    Route::get('users/course/{id}',"UsersController@getCourse");
    
    //Department
    Route::get('department','DepartmentController@index');
    Route::post('department/add','DepartmentController@add');
    Route::post('department/edit','DepartmentController@edit');
    Route::post('department/delete','DepartmentController@delete');
    //Course
    Route::get('course','CourseController@index');
    Route::post('course/add','CourseController@add');
    Route::post('course/edit','CourseController@edit');
    Route::post('course/delete','CourseController@delete');
});
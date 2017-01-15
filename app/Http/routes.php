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

Route::get("/register", function () {
    return view("register/register");
});

Route::get("/login", function () {
    return view("register/login");
});

Route::post("/login", "LoginControllers@index");

//Logout
Route::get('/login/logout', ['middleware' => 'auth', 'uses' => 'LoginControllers@logout']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'admin'], function() {
    Route::get('users', ['middleware' => 'auth', 'uses' => "UsersController@index"]);

    Route::post('users/edit', ['middleware' => 'auth', 'uses' => "UsersController@edit"]);
    Route::post('users/delete', ['middleware' => 'auth', 'uses' => "UsersController@delete"]);
    Route::get('users/department', ['middleware' => 'auth', 'uses' => "UsersController@getDepartment"]);
    Route::get('users/course/{id}', ['middleware' => 'auth', 'uses' => "UsersController@getCourse"]);
    Route::post('users/add', ['middleware' => 'auth', 'uses' => "UsersController@add"]);

    //Department
    Route::get('department', ['middleware' => 'auth', 'uses' => 'DepartmentController@index']);
    Route::post('department/add', ['middleware' => 'auth', 'uses' => 'DepartmentController@add']);
    Route::post('department/edit', ['middleware' => 'auth', 'uses' => 'DepartmentController@edit']);
    Route::post('department/delete', ['middleware' => 'auth', 'uses' => 'DepartmentController@delete']);
    //Course
    Route::get('course', ['middleware' => 'auth', 'uses' => 'CourseController@index']);
    Route::post('course/add', ['middleware' => 'auth', 'uses' => 'CourseController@add']);
    Route::post('course/edit', ['middleware' => 'auth', 'uses' => 'CourseController@edit']);
    Route::post('course/delete', ['middleware' => 'auth', 'uses' => 'CourseController@delete']);

    //Admins
    Route::get('admins', ['middleware' => 'auth', 'uses' => 'AdminsController@index']);
    Route::post('admins/add', ['middleware' => 'auth', 'uses' => 'AdminsController@add']);
    Route::post('admins/edit', ['middleware' => 'auth', 'uses' => 'AdminsController@edit']);
    Route::post('admins/delete', ['middleware' => 'auth', 'uses' => 'AdminsController@delete']);
});

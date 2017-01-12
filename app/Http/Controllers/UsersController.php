<?php

namespace App\Http\Controllers;
use App\Http\Model\TeachingUsers;
use Illuminate\Http\Request;
class UsersController extends \App\Http\Controllers\Controller{
    
    public function index() {
        $data = \App\Model\TeachingUsers::all();
        return view("admin/Users/index", array("data" => $data));
    }
    
    public function edit(Request $request) {
        var_dump($request->all());
    }
}

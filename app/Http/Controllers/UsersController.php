<?php

namespace App\Http\Controllers;

use App\Http\Model\TeachingUsers;
use Illuminate\Http\Request;

class UsersController extends \App\Http\Controllers\Controller {

    public function index() {
        header("content-type:application/json");
        $data['users'] = \App\Model\TeachingUsers::where('flddeleted', '<>', 1)->get();

//        $data['department'] =$d;
        $data['course'] = \App\Model\Course::where('flddeleted', '<>', 1)->get();
        return view("admin/Users/index", array("data" => $data));
    }

    public function edit(Request $request) {
        var_dump($request->all());
    }

    public function getDepartment() {
        $d = json_encode(\App\Model\Department::where('flddeleted', '<>', 1)->get()->toArray());
        return response()->json($d)->header('content-Type', 'application/json');
    }

    public function getCourse($id) {
        $d = json_encode(\App\Model\Course::where('flddeleted', '<>', 1)->where('fldtbldeparment_id','=',$id)->get()->toArray());
        return response()->json($d)->header('content-Type', 'application/json');
    }

}

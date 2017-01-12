<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Department;
use Illuminate\Http\Request;

class CourseController extends Controller{
    
    public function index() {
        $data['department'] = Department::where('flddeleted' ,'<>',1)->get();
        $data['course'] = \App\Model\Course::where('flddeleted' ,'<>', 1)->get();
        return view("admin/Course/index",array("data"=>$data));
    }
    
    public function add(Request $request) {
        $data = $request->only("fldname","flddeparment_id");
        $d = new \App\Model\Course();
        $d->fldname = $data['fldname'];
        $d->fldtbldeparment_id = $data['flddeparment_id'];
        $d->save();
    }
    
    public function edit(Request $request) {
        $data = $request->only("fldid","fldname","fldtbldeparment_id");
        if(empty($data['fldid']))
            return '';
        $d = \App\Model\Course::where('fldid', '=', $data['fldid'])->update($data);
    }
    
    public function delete(Request $request) {
        $data = $request->only("fldid");
        $data['flddeleted'] = 1;
        if(empty($data['fldid']))
            return '';
        $d = \App\Model\Course::where('fldid', '=', $data['fldid'])->update($data);
    }
}
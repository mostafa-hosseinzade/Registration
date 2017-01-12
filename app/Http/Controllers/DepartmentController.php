<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller{
    
    public function index() {
        $data = Department::where('flddeleted' ,'<>',1)->get();
        
        return view("admin/Department/index",array("data"=>$data));
    }
    
    public function add(Request $request) {
        $data = $request->only("fldgroup","fldlevel");
        $d = new Department();
        $d->fldgroup = $data['fldgroup'];
        $d->fldlevel = $data['fldlevel'];
        $d->save();
    }
    
    public function edit(Request $request) {
        $data = $request->only("fldid","fldgroup","fldlevel");
        if(empty($data['fldid']))
            return '';
        $d =  Department::where('fldid', '=', $data['fldid'])->update($data);
    }
    
    public function delete(Request $request) {
        $data = $request->only("fldid");
        $data['flddeleted'] = 1;
        if(empty($data['fldid']))
            return '';
        $d =  Department::where('fldid', '=', $data['fldid'])->update($data);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Department;
use Illuminate\Http\Request;

class AdminsController extends Controller{
    
    public function index() {
        $data['admins'] = \App\User::where('flddeleted' ,'<>',1)->get();
        
        return view("admin/admins/index",array("data"=>$data));
    }
    
    public function add(Request $request) {
        $data = $request->only("name","email","password");
        if(empty($data['name']) || empty($data['emila']) || empty($data['password'])){
            return '';
        }
        $d = new \App\User();
        $d->name = $data['name'];
        $d->email = $data['email'];
        $d->password = bcrypt($data['password']);
        $d->save();
    }
    
    public function edit(Request $request) {
        $data = $request->only("name","email","password","id");
        $data['password'] = bcrypt($data['password']);
        if(empty($data['id']))
            return '';
        $d = \App\User::where('id', '=', $data['id'])->update($data);
    }
    
    public function delete(Request $request) {
        $data = $request->only("id");
        $data['flddeleted'] = 1;
        if(empty($data['id']))
            return '';
        $d = \App\User::where('id', '=', $data['id'])->update($data);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginControllers extends Controller {
    private $username;
    private $password;
    private $email;
    
    public function index(Request $request) {
        $this->email = $request->input("email");
        $this->password = $request->input("password");
//        var_dump();
//        
//        $insert =  DB::table('users')->insert($user);
//        die;
        if (Auth::check()) {
//            if(Auth::check()->role == "admin"){
                return "user is admin";
//            }else if(Auth::check()->role == "user"){
//                return "role is user";
//            }
        }
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return "user exists";
        } else {
            return "User Dosent exists";
        }
    }

    public function CheckLoginRemeber() {
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            // The user is being remembered...
        }

        if (Auth::viaRemember()) {
            //
        }
    }

}

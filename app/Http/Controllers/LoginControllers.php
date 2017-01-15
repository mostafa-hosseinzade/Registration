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

        if (Auth::check()) {
            return redirect("/admin/users");
        }
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect("/admin/users");
        } else {
            return redirect("/login");
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

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
            return redirect("/");
        }
        return redirect("/login");
    }

}

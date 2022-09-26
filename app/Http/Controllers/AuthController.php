<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("user.login");
    }
    public function logout(){
        return "fail";
    }
    
    public function register(){
        return view("user.register");
    }

    public function forgetPassword(){
        return "sorry ye aabhi nahi";
    }


}

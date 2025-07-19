<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        $title = "Learning Laravel Application";

        return view("home",compact("title"));
    }
    public function login() {
        $title = "Sign In";

        return view("login",compact("title"));
    }
     public function dashboard() {
        $title = "Dashboard";

        return view("dashboard",compact("title"));
    }
     public function doLogin() {
        request()->validate(['email'=>'required','password'=>'required']);

        $input = ['email' => request('email'), 'password' => request('password')];
        if(auth()->attempt($input, true)){
            return redirect()->route("dashboard");
        }else{
            return redirect()->route("login")->with("message", "Invalid Login");
        }
        
    }
     public function logout() {
        $title = "Sign out";

        return view("login",compact("title"));
    }
       public function register() {
        $title = "Register";

        return view("register",compact("title"));
    }
     public function doRegister() {
        request()->validate(['name'=>'required','email'=>'required','password'=>'required']);
        $title = "Register";
        $input = ['name' => request('name'),'email' => request('email'), 'password' => request('password')];
        User::create($input);
        return view("dashboard",compact("title"));
    }
}

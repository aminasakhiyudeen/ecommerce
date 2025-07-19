<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //echo "admin home controller";exit;
        $title = "eCommerce Admin Side - Home";

        return view("admin.home",compact("title"));

    }
    public function doLogin() {
        $title = "eCommerce Admin Side - Home";
        $input = ['email' => request('email'), 'password' => request('password')];
        if(auth()->guard('admin')->attempt($input, true)){
            return redirect()->route("admin.dashboard");
        }else{
            return redirect()->route("admin.home");
        }
       
    }
}

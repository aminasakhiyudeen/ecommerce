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

       return redirect()->route("admin.dashboard");
    }
}

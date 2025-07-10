<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "Learning Laravel Application";

        return view("home",compact("title"));

    }
}

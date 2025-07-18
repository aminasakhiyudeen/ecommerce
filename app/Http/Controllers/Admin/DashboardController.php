<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
          $title = "eCommerce Admin Side - Home";

        return view("admin.dashboard",compact("title"));
    }
}

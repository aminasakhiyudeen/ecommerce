<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
//Route::get('/admin', [HomeController::class, 'index']);



Route::prefix('admin')
    //->middleware(['auth', 'is_admin']) // Optional middleware
    //->name('admin.')
    ->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');//Login Page
        Route::post('/login', [AdminHomeController::class, 'doLogin'])->name('admin.do.login'); //Login page action
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        //Route::get('/users', [UserController::class, 'index'])->name('users.index');
    });

Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/do-login', [HomeController::class, 'doLogin'])->name('do.login');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/do-register', [HomeController::class, 'doRegister'])->name('do.register');
// Route::get('/', function () {
//     return view('welcome');
// });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

//Route::get('/admin', [HomeController::class, 'index']);



Route::prefix('admin')
    //->middleware(['auth', 'is_admin']) // Optional middleware
    //->name('admin.')
    ->group(function () {
        Route::get('/home', [AdminHomeController::class, 'index'])->name('index');
        //Route::get('/users', [UserController::class, 'index'])->name('users.index');
    });

Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

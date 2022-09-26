<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VcardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::controller(UserController::class)->group(function(){
    Route::get("/","index")->name('homepage');
});

Route::controller(AuthController::class)->group(function(){
    Route::match(["get","post"],"/login","login")->name('signin');
    Route::match(["get","post"],"/signup","register")->name("signup");
});
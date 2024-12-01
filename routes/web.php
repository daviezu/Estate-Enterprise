<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home Before Login
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function () {

    // login 
    Route::prefix('login')->group(function () {
        Route::get('/index', [UserController::class, 'indexLogin'])->name('login.index');
        Route::post('/post', [UserController::class, 'login'])->name('login.post');
    });

    // register
    Route::prefix('register')->group(function () {
        Route::get('/index', [UserController::class, 'indexRegister'])->name('register.index');
        Route::post('/post', [UserController::class, 'register'])->name('register.post');
    });

    // profile
    Route::middleware([Authenticate::class])->group(function () {
        Route::get('/profile', []);
        Route::put('/profile', []);
    });
});

// Agent List
Route::get('/agentlist', [UserController::class, 'agentList'])->name('agentlist');

// Property List Before Login
Route::get('/property', [PropertyController::class, 'propertyList'])->name('propertyList');

// Profile  
Route::get('/profile', [UserController::class, 'profileLogin'])->name('profile.index');

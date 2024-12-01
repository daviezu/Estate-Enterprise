<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\rememberMe;
use Illuminate\Support\Facades\Route;

// Home Before Login
Route::redirect('/', '/home');
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

    
    Route::middleware([Authenticate::class])->group(function () {
        Route::get('/profile', [UserController::class, 'indexProfile'])->name('profile.index');
        Route::put('/profile', []);
    });
    
    // Route::get('/profile', [UserController::class, 'indexProfile'])->name('profile.index'); 
});

// Agent List
Route::get('/agentlist', [UserController::class, 'agentList'])->name('agentlist');

// Property List 
Route::get('/property', [PropertyController::class, 'propertyList'])->name('propertyList');

// Property Detail
Route::get('/detailproperty', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');

// logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Edit Profile 
Route::get('/editprofile', [UserController::class, 'editProfile'])->name('editProfile');
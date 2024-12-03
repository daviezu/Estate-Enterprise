<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home
Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// User
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

        // Profile
        Route::prefix('profile')->group(function () {
            // get profile view
            Route::get('/', [UserController::class, 'indexProfile'])->name('profile.index');
            // Edit Profile view
            Route::get('/edit', [UserController::class, 'editProfile'])->name('profile.edit');
            // Update Profile
            Route::put('/', [UserController::class, 'updateProfile'])->name('profile.update');
        });
    });
});

Route::prefix('property')->group(function () {
    // Property List 
    Route::get('/', [PropertyController::class, 'propertyList'])->name('propertyList');

    // Property Detail
    Route::get('/detail', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');
});

// Agent List
Route::get('/agentlist', [UserController::class, 'agentList'])->name('agentlist');

// logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

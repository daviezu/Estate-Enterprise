<?php

use App\Http\Controllers\AuthController;
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
        Route::get('/index', [AuthController::class, 'indexLogin'])->name('login.index');
        Route::post('/post', [AuthController::class, 'login'])->name('login.post');
    });

    // register
    Route::prefix('register')->group(function () {
        Route::get('/index', [AuthController::class, 'indexRegister'])->name('register.index');
        Route::post('/post', [AuthController::class, 'register'])->name('register.post');
    });

    Route::middleware([Authenticate::class])->group(function () {

        // Profile
        Route::prefix('profile')->group(function () {

            // get profile view
            Route::get('/', [UserController::class, 'indexProfile'])->name('profile.index');

            // edit profile information
            Route::prefix('name')->group(function () {

                Route::get('/', [UserController::class, 'indexEditProfileName'])->name('profile.edit.name.index');
                Route::put('/', [UserController::class, 'updateProfileName'])->name('update.profile.name');
            });

            // Edit profile Password
            Route::prefix('password')->group(function () {
                Route::get('/', [UserController::class, 'indexEditPassword'])->name('profile.edit.password.index');
                Route::put('/', [UserController::class, 'updatePassword'])->name('update.password');
            });
        });
    });
});

Route::prefix('property')->group(function () {
    // Property List 
    Route::get('/', [PropertyController::class, 'propertyList'])->name('propertyList');

    // Property Detail
    Route::get('/detail', [PropertyController::class, 'propertyDetail'])->name('detail.property');
});

// Agent List
Route::get('/agentlist', [UserController::class, 'agentList'])->name('agentlist');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// My Properties for User who is Admin
Route::get('/my_property', [PropertyController::class, 'myProperty'])->name('myProperty');

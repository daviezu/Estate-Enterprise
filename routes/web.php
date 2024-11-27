<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home Before Login
Route::get('/', function () {
    return view('home');
});

// Home After Login
Route::get('/homelogin', [UserController::class, 'homeLogin'])->name('homelogin');

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

// Agent List
Route::get('/agentlist', [UserController::class, 'agentList'])->name('agentlist');

// Property List Before Login
Route::get('/property', [UserController::class, 'propertyListBeforeLogin'])->name('property');

// Property List After Login
Route::get('/propertylogin', [UserController::class, 'propertyListAfterLogin'])->name('propertylogin');

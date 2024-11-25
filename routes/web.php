<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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
Route::get('/agentlist', [UserController::class, 'agentList'])->name('agentlist.index');

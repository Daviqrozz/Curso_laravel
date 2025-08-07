<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
        Route::get('/', function () {
            return view('welcome');
    })->name('home');
    
        Route::get('/users',[UserController::class,'users'])->name('users');

        Route::get('/users/create',[UserController::class,'create_user'])->name('create_user');

        Route::post('/users/create',[UserController::class,'store_user'])->name('store_user');
});


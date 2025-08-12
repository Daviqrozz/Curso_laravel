<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
        Route::get('/', function () {
            return view('welcome');
    })->name('home');
    
        Route::get('/users',[UserController::class,'users'])->name('users');
        //Rotas de criação de usuario
        Route::get('/users/create',[UserController::class,'create_user'])->name('create_user');
        Route::post('/users/create',[UserController::class,'store_user'])->name('store_user');
        //Rotas de edição de usuario
        Route::get('/users/{user}',[UserController::class,'edit_user'])->name('edit_user');
        Route::put('/users/{user}',[UserController::class,'update_user'])->name('update_user');
        Route::put('/users/{user}/profile',[UserController::class,'update_profile'])->name('update_profile');
        Route::put('/users/{user}/interests',[UserController::class,'update_interests'])->name('update_interests');
        //Rota de exclusão de usuario
        Route::delete('/users/{user}',[UserController::class,'delete_user'])->name('delete_user');

        
});


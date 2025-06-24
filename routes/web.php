<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::resource('/user',  UserController::class);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/add-user', [UserController::class, 'create']);
Route::post('/add-user', [UserController::class, 'store']);
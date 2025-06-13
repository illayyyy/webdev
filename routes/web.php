<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;




Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'createNewUser'])->name(name: 'users.store');
Route::put('/users/{id}', [UserController::class, 'update'])->name(name: 'user.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name(name: 'user.delete');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login.form');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
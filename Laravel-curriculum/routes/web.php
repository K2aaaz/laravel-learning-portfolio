<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

Route::get('', [HomeController::class, 'top'])->name('top');
Route::resource('users', UserController::class);
Route::resource('books', BookController::class);

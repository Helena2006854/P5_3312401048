<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


Route::get('/home', function () {
    return view('pages.Home');
});

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/list-item', [PageController::class, 'listItem'])->name('list-item');

Route::get('/product', [ProductController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);
<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashbaord',[Dashboard::class,'Index'])->name('index');
Route::get('/dashbaord/products',[Dashboard::class,'GetProduct'])->name('products');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

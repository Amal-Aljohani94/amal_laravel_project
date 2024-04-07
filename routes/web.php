<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Shopping;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->middleware('auth');

Route::get('/dashboard', [Dashboard::class, 'Index'])->name('index');
Route::match(['get', 'post'],'/dashboard/products', [Dashboard::class, 'GetProducts'])->name('products');
Route::post('/dashboard/createproducts', [Dashboard::class, 'CreateProducts'])->name('createproducts');
Route::get('/del/{id}', [Dashboard::class, 'Del'])->name('del');
Route::get('/edit/{id}', [Dashboard::class, 'EditProducts'])->name('edit');
Route::post('/dashboard/update', [Dashboard::class, 'UpdateProducts'])->name('update-product');
Route::post('/dashboard/search', [Dashboard::class, 'Search'])->name('search');
Route::get('/dashboard/search', [Dashboard::class, 'clearSearch'])->name('redirect');
Route::get('/test', [Dashboard::class, 'test'])->name('test');
Route::get('/logout', [Dashboard::class, 'logout'])->name('logout');
Route::get('/dashboard/GetProductDetails',[Dashboard::class,'GetProductDetails'])->name('product-details');
Route::post('/dashboard/createproductsdetails', [Dashboard::class, 'CreateProductsdetails'])->name('create-details');
Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/shopping/showitems',[Shopping::class,'showListItemsPhone'])->name('show-items-phone');
Route::get('/shopping/details/{id}',[Shopping::class,'showDetailsphone'])->name('show-items-details');
Route::get('/shopping/add_to_cart/{id}',[Shopping::class,'Add_to_cart'])->name('add-to-cart');
Route::get('/cart', [Shopping::class,'index'])->name('cart');

Auth::routes();


Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

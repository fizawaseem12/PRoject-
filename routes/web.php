<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/das', [App\Http\Controllers\HomeController::class, 'dash'])->name('dashb');
Route::get('/add', [HomeController::class, 'addprod']);
// Route::get('/show', [HomeController::class, 'showprod']);
Route::post('/adddata', [ProductController::class, 'store']);
Route::get('/showw', [ProductController::class, 'index'])->name("productshow");
Route::get('/products/{id}', [ProductController::class, 'status']);
Route::get('/products/{id}/delete', [ProductController::class, 'destroy']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::post('/products/{id}/update', [ProductController::class, 'update']);
Route::post('/cart/{id}', [ProductController::class, 'cart']);
Route::get('/viewcart', [ProductController::class, 'cartdetail']);
Route::get('/contact', [ProductController::class, 'contact']);
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

    // Route::get('/checkout', [HomeController::class, 'checkout']);



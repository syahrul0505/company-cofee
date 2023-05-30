<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us.index');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us.index');
})->name('contact-us');

Route::get('/products', function () {
    return view('products.index');
})->name('products');

Route::get('/cart', function () {
    return view('cart.index');
})->name('cart');
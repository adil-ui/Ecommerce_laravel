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
    return view('home.home');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/details', function () {
    return view('details.details');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/checkout', function () {
    return view('checkout.checkout');
});





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AllOrderController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\DeleteProductController;

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

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/home', [HomeController::class, 'index'])->name("home");

Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
/*Route::post('/login', [AuthController::class, 'login'])->name("post-login");*/

Route::post('/log-user', [AuthController::class, 'logUser'])->name("log-user");

Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register', [AuthController::class, 'register'])->name("post-register");
/*Route::post('/register-user', [[AuthController::class, 'registerUser']])->name("register-user");*/

Route::get('/add-product', [AddProductController::class, 'addProduct'])->name("add-product");
Route::post('/add-product', [AddProductController::class, 'addProduct'])->name("post-product");

Route::get('/edit-product/{id}', [EditProductController::class, 'index'])->name("edit-product");
Route::post('/edit-product/{id}', [EditProductController::class, 'updateProduct'])->name("post-edit");

Route::get('/all-product', [AllProductController::class, 'index'])->name("all-product");

Route::get('/delete-product/{id}', [DeleteProductController::class, 'index'])->name("delete-product");



Route::get('/details/{id}', [DetailsController::class, "getProduct"])->name('details');

Route::get('/profile', [ProfileController::class, 'updateUser'])->name("profile");
Route::post('/profile', [ProfileController::class, 'updateUser'])->name("post-profile");

Route::get('/women-category', [CategoryProductController::class, 'getWomenProduct'])->name("women-product");
Route::get('/men-category', [CategoryProductController::class, 'getMenProduct'])->name("men-product");
Route::get('/kid-category', [CategoryProductController::class, 'getKidProduct'])->name("kid-product");
Route::get('/our-product', [CategoryProductController::class, 'getAllProduct'])->name("our-product");



Route::get('/checkout', function () {
    return view('checkout.checkout');
});


Route::get('/cart', [CartController::class, 'index'])->name("cart");
Route::get('/add-cart/{productId}', [CartController::class, 'addToCart'])->name("add-cart");
Route::get('/cart-delete-item/{rowId}', [CartController::class, 'deleteCartItem'])->name("cart-delete-item");
Route::get('/increment/{rowId}', [CartController::class, 'increment'])->name("increment");
Route::get('/decrement/{rowId}', [CartController::class, 'decrement'])->name("decrement");

Route::get('/chekout', [CheckoutController::class, 'index'])->name("checkout");
Route::post('/chekout', [CheckoutController::class, 'index'])->name("post-checkout");
Route::get('/create-order', [CheckoutController::class, 'createOrder'])->name("create-order");


Route::get('/all-orders', [AllOrderController::class, 'OrdersList'])->name("all-orders");
Route::get('/order-details/{id}', [AllOrderController::class, 'OrderDetails'])->name("order-details");

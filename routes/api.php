<?php

use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AllOrderController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DeleteProductController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EditProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["middleware" => "auth:sanctum"], function () {
});

Route::post('/login', [AuthController::class, 'logUser'])->name("login");
Route::post('/logout', [AuthController::class, 'logout'])->name("logout");
/*Route::post('/login', [AuthController::class, 'login'])->name("post-login");*/

Route::post('/register', [AuthController::class, 'register'])->name("post-register");

Route::get('/', [HomeController::class, 'index'])->name("home");
// Route::middleware("auth:sanctum")->get('/', [HomeController::class, 'index'])->name("home");
// Route::middleware("auth:sanctum")->get('/home', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/add-product', [AddProductController::class, 'addProduct'])->name("add-product");
Route::post('/add-product', [AddProductController::class, 'addProduct'])->name("post-product");

Route::get('/edit-product/{id}', [EditProductController::class, 'index'])->name("edit-product");
Route::post('/edit-product/{id}', [EditProductController::class, 'updateProduct'])->name("post-edit");
Route::put('/edit-product/{id}', [EditProductController::class, 'updateProduct'])->name("put-edit");

Route::get('/all-product', [AllProductController::class, 'index'])->name("all-product");

Route::get('/delete-product/{id}', [DeleteProductController::class, 'index'])->name("delete-product");
Route::delete('/delete/{id}', [DeleteProductController::class, 'delete'])->name("delete");



Route::get('/details/{id}', [DetailsController::class, "getProduct"])->name('details');

Route::get('/profile', [ProfileController::class, 'updateUser'])->name("profile");
Route::post('/profile/{id}', [ProfileController::class, 'updateUserApi'])->name("post-profile");

Route::get('/women-category', [CategoryProductController::class, 'getWomenProduct'])->name("women-product");
Route::get('/men-category', [CategoryProductController::class, 'getMenProduct'])->name("men-product");
Route::get('/kid-category', [CategoryProductController::class, 'getKidProduct'])->name("kid-product");
Route::get('/our-product', [CategoryProductController::class, 'getAllProduct'])->name("our-product");

Route::get('/cart', [CartController::class, 'index'])->name("cart");
Route::get('/add-cart/{productId}', [CartController::class, 'addToCart'])->name("add-cart");
Route::get('/cart-delete-item/{rowId}', [CartController::class, 'deleteCartItem'])->name("cart-delete-item");
Route::get('/increment/{rowId}', [CartController::class, 'increment'])->name("increment");
Route::get('/decrement/{rowId}', [CartController::class, 'decrement'])->name("decrement");

Route::get('/chekout', [CheckoutController::class, 'index'])->name("checkout");
Route::post('/chekout', [CheckoutController::class, 'index'])->name("post-checkout");
Route::get('/create-order', [CheckoutController::class, 'createOrder'])->name("create-order");
Route::post('/new-order', [CheckoutController::class, 'orderApi'])->name("new-order");


Route::get('/all-orders', [AllOrderController::class, 'index'])->name("all-orders");
Route::get('/delete-order/{id}', [AllOrderController::class, 'deleteOrder'])->name("delete-order");
Route::get('/list-orders/{id}', [AllOrderController::class, 'OrdersList'])->name("list-orders");
Route::get('/order-details/{id}', [AllOrderController::class, 'OrderDetails'])->name("order-details");
Route::get('/all-orders', [AllOrderController::class, 'allOrders']);

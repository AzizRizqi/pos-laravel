<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\LoginController::class,'index']);
Route::resource('dashboard',\App\Http\Controllers\DashboardController::class);
Route::resource('user',\App\Http\Controllers\UserController::class);
Route::resource('category',\App\Http\Controllers\CategoryController::class);
Route::resource('product',\App\Http\Controllers\ProductController::class);
Route::resource('penjualan',\App\Http\Controllers\TransactionController::class);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::get('get-products/{category_id}', [\App\Http\Controllers\TransactionController::class, 'getProducts']);
Route::get('get-product/{product_id}', [\App\Http\Controllers\TransactionController::class, 'getProduct']);

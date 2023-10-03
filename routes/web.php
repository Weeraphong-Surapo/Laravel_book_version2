<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductFrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function () {
    return view('profile');
})->middleware('auth');
Route::get('allproduct', [ProductFrontController::class, 'allproduct']);
Route::get('getcategory', [UserController::class, 'getcategory']);
Route::get('checkout', [UserController::class, 'checkout'])->middleware('auth');
Route::get('register', [UserController::class, 'register']);
Route::post('registerpost', [UserController::class, 'registerpost']);
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('loginpost', [UserController::class, 'loginpost']);
Route::post('logout', [UserController::class, 'logout']);
Route::get('history', [UserController::class, 'history'])->middleware('auth');
Route::get('history/{id}', [UserController::class, 'historydetail']);
Route::resource('cart', CartController::class)->middleware('auth');
Route::post('paycheckout', [UserController::class, 'paycheckout']);

Route::group(['prefix' => 'admin'], function () {
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::get('order',[OrderAdminController::class,'order']);
    Route::get('reportall',[OrderAdminController::class,'reportall']);
    Route::get('order/{id}/confirm',[OrderAdminController::class,'orderconfirm']);
    Route::get('order/{id}/noconfirm',[OrderAdminController::class,'ordernoconfirm']);
});

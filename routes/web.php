<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\OrderController;



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
// //register
// Route::get('user/register',[AuthController::class,'register'])->name('user.register');
// Route::post('user/register',[AuthController::class,'registerprocess'])->name('user.register');

// //login
Route::get('user/logout',[AuthController::class,'logout'])->name('user.logout');
// Route::post('user/login',[AuthController::class,'authentication'])->name('user.login');


//dashboard
// Route::get('user/dashboard',[AuthController::class,'index'])->name('user.dashboard');

//search
Route::post('user/search',[AuthController::class,'search'])->name('user.search');
//frontend
Route::get('list/product',[CategoryController::class,'index'])->name('product.list');
// Route::post('add/product',[CategoryController::class,'store'])->name('product.add');
Route::get('list/product/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('list/product/{id}',[ProductController::class,'edit'])->name('product.edit');
//details
Route::get('list/detail/{id}',[ProductController::class,'detail'])->name('product.detail');
Route::get('list/detail/user/detail/{id}',[AddressController::class,'create'])->name('product.user');
Route::post('list/detail/user/detail/{id}',[AddressController::class,'store'])->name('product.user');

Route::get('list/detail/user/payment',[ProductController::class,'payment'])->name('product.payment');
Route::post('list/detail/user/payment/process',[ProductController::class,'transaction'])->name('product.transaction');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
//backend
//category
Route::get('add/category',[CategoryController::class,'create'])->name('category.add');
Route::post('add/category',[CategoryController::class,'store'])->name('category.store');

//subcategory
Route::get('add/subcategory',[SubCategoryController::class,'create'])->name('subcategory.add');
Route::post('add/subcategory',[SubCategoryController::class,'store'])->name('subcategory.store');

//product
Route::get('add/product',[ProductController::class,'create'])->name('product.add');
Route::post('add/product',[ProductController::class,'store'])->name('product.store');




});

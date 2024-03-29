<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

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
Route::get('/product',[ProductController::class,'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/productAdd',[ProductController::class,'ProductAdd']);
Route::post('/admin/storeProduct', [ProductController::class, 'storeProduct']);
Route::get('admin/productList',[ProductController::class,'productList']);
Route::get('admin/productEdit/{id}',[ProductController::class,'productEdit']);
Route::post('admin/productUpdate/{id}',[ProductController::class,'productUpdate'])->name('products.productUpdate');
Route::get('admin/productDelete/{id}',[ProductController::class,'productDelete'])->name('products.productDelete');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('createRegister');




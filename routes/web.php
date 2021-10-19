<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Auth\UserController;


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
    return view('index');
});

Route::get('/about', function () {
    return view('about-us');
});


Route::prefix('admin')->group(function () {

Route::get('/', function () {
    return view('admin/index');
});

// Admin category section
Route::get('/add-category', [CategryController::class, 'addCategoryUI'])->name('add.catgory');
Route::post('/add-category', [CategryController::class, 'store'])->name('post.category');
Route::get('/list-categories', [CategryController::class, 'index'])->name('list.category');
Route::get('/delete-category/{id}', [CategryController::class, 'destroy'])->name('destroy.category');
Route::patch('/update-category/{id}', [CategryController::class, 'update'])->name('patch.category');
Route::get('/update-category/{id}', [CategryController::class, 'updateCategoryUI'])->name('update.catgory'); 

// Admin brand section
Route::get('/add-brand', [BrandController::class, 'addBrandUI'])->name('add.brand');
Route::post('/add-brand', [BrandController::class, 'store'])->name('post.brand');
Route::get('/list-brands', [BrandController::class, 'index'])->name('list.brand');
Route::get('/delete-brand/{id}', [BrandController::class, 'destroy'])->name('destroy.brand');
Route::patch('/update-brand/{id}', [BrandController::class, 'update'])->name('patch.brand');
Route::get('/update-brand/{id}', [BrandController::class, 'updateBrandUI'])->name('update.brand'); 


// Admin product section
Route::get('/add-product', [ProductController::class, 'addProductUI'])->name('add.product');
Route::post('/add-product', [ProductController::class, 'store'])->name('post.product');
Route::get('/list-products', [ProductController::class, 'index'])->name('list.product');
Route::get('/delete-product/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
Route::patch('/update-product/{id}', [ProductController::class, 'update'])->name('patch.product');
Route::get('/update-product/{id}', [ProductController::class, 'updateProductUI'])->name('update.product'); 

});



Route::prefix('super-buyer')->group(function () {

Route::get('/', function () {
    return view('superbuyers/index');
})->name('super-buyer.home');

Route::get('/register', [UserController::class, 'registerUI'])->name('super-buyer.register');
Route::get('/login', [UserController::class, 'loginUI'])->name('super-buyer.login');
Route::post('/register', [UserController::class, 'register'])->name('post.super-buyer.register');

});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Admin\RonCodeController;
use App\Http\Controllers\Admin\SuperBuyerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Admin\RankController;
use App\Http\Controllers\Admin\IncentiveController;
use App\Http\Controllers\SuperBuyer\ProductController as SuperProductController;
use App\Http\Controllers\Admin\RegisterFeeController;
use App\Http\Controllers\SuperBuyer\RegisterFeeController as SuperRegisterFeeController;
use App\Http\Controllers\SuperBuyer\OrderController;
use App\Http\Controllers\SuperBuyer\GenealogyController;
use App\Http\Controllers\SuperBuyer\TransactionController as SuperBuyerTransaction;
use App\Http\Controllers\SuperBuyer\PagesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search-product', [HomeController::class, 'search']);
Route::get('/shop', [HomeController::class, 'shopUI'])->name('shop');

Route::get('/product-api', [HomeController::class, 'ProductAPIs']);
Route::get('/alpha-sort-product', [HomeController::class, 'ProductAlphabetAPIsSort']);
Route::get('/price-sort-product', [HomeController::class, 'ProductPriceAPIsSort']);
Route::get('/single-product/{id}', [HomeController::class, 'singleProductAPIs']);

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::prefix('admin')->group(function () {
// Ron Code Section
Route::get('/add-ron-code', [RonCodeController::class, 'addRonCodeUI'])->name('add.ron.code')->middleware('ron');
Route::post('/add-ron-code', [RonCodeController::class, 'store'])->name('post.ron.code')->middleware('ron');
Route::get('/list-ron-code', [RonCodeController::class, 'index'])->name('list.ron.code')->middleware('ron');

});


Route::prefix('admin')->group(function () {

Route::get('/', function () {
    return view('admin/index');
})->name('admin.home')->middleware('admin');

// Admin category section
Route::get('/add-category', [CategryController::class, 'addCategoryUI'])->name('add.catgory')->middleware('admin');
Route::post('/add-category', [CategryController::class, 'store'])->name('post.category');
Route::get('/list-categories', [CategryController::class, 'index'])->name('list.category')->middleware('admin');
Route::get('/delete-category/{id}', [CategryController::class, 'destroy'])->name('destroy.category');
Route::patch('/update-category/{id}', [CategryController::class, 'update'])->name('patch.category');
Route::get('/update-category/{slug}', [CategryController::class, 'updateCategoryUI'])->name('update.catgory')->middleware('admin'); 
Route::get('/list-categories-api', [CategryController::class, 'getCategoryAPIs']);

// Admin brand section
Route::get('/add-brand', [BrandController::class, 'addBrandUI'])->name('add.brand')->middleware('admin');
Route::post('/add-brand', [BrandController::class, 'store'])->name('post.brand');
Route::get('/list-brands', [BrandController::class, 'index'])->name('list.brand')->middleware('admin');
Route::get('/delete-brand/{id}', [BrandController::class, 'destroy'])->name('destroy.brand');
Route::patch('/update-brand/{id}', [BrandController::class, 'update'])->name('patch.brand');
Route::get('/update-brand/{slug}', [BrandController::class, 'updateBrandUI'])->name('update.brand')->middleware('admin'); 
Route::get('/list-brands-api', [BrandController::class, 'getBrandAPIs']);

// Admin product section
Route::get('/add-product', [ProductController::class, 'addProductUI'])->name('add.product')->middleware('admin');
Route::post('/add-product', [ProductController::class, 'store'])->name('post.product');
Route::get('/list-products', [ProductController::class, 'index'])->name('list.product')->middleware('admin');
Route::get('/delete-product/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
Route::patch('/update-product/{id}', [ProductController::class, 'update'])->name('patch.product');
Route::get('/update-product/{slug}', [ProductController::class, 'updateProductUI'])->name('update.product')->middleware('admin'); 

// Admin Super Buyer
Route::get('/super-buyer', [SuperBuyerController::class, 'index'])->name('admin.list.super-buyer')->middleware('admin');

// Admin delivery Fee 
Route::get('/delivery-fee', [DeliveryController::class, 'deliveryFeeUI'])->name('admin.delivery.fee')->middleware('admin');
Route::post('/delivery-fee', [DeliveryController::class, 'store'])->name('admin.delivery.fee');

// Admin register Fee 
Route::get('/register-fee', [RegisterFeeController::class, 'index'])->name('admin.register.fee')->middleware('admin');
Route::post('/registry-fee', [RegisterFeeController::class, 'store'])->name('admin.register.fee.post');

// Admin login
Route::get('/login', [UserController::class, 'loginUI'])->name('admin.login');

// Admin rank  
Route::get('/add-rank', [RankController::class, 'addRankUI'])->name('admin.rank')->middleware('admin');
Route::post('/rank', [RankController::class, 'store'])->name('admin.rank.store');
Route::get('/list-rank', [RankController::class, 'index'])->name('admin.rank.list')->middleware('admin');
Route::get('/edit-rank/{id}', [RankController::class, 'updateRankUI'])->name('admin.rank.edit')->middleware('admin');
Route::patch('/edit-rank/{id}', [RankController::class, 'update'])->name('admin.rank.update');

// Admin Incensive
Route::get('/add-incentive', [IncentiveController::class, 'addIncentiveUI'])->name('admin.add.incentive');

});

Route::prefix('super-buyer')->group(function () {
    
Route::get('/', function () {
    return view('superbuyers/index');
})->name('super-buyer.home')->middleware('super.buyer');

Route::get('/register', [UserController::class, 'registerUI'])->name('super-buyer.register');
Route::get('/login', [UserController::class, 'loginUI'])->name('super-buyer.login');
Route::post('/register', [UserController::class, 'superBuyerRegister'])->name('post.super-buyer.register');
Route::post('/payment', [TransactionController::class, 'payment'])->name('post.super-buyer.register');
Route::post('/complete-register', [UserController::class, 'completeRegistration'])->name('post.super-buyer.complete-registration');
Route::get('/check-sponsor-code', [UserController::class, 'checkSponsorCode']);
Route::get('/ron-code', [UserController::class, 'checkRonCode']);
Route::get('/check-mail', [UserController::class, 'checkEmail']);
Route::get('/check-username', [UserController::class, 'checkUserName']);
Route::get('/user/{id}', [UserController::class, 'getUser']);
Route::get('/products', [SuperProductController::class, 'index'])->name('product.super-buyer')->middleware('super.buyer');
Route::get('/products-super-buyer', [SuperProductController::class, 'products']);
Route::get('/success', [UserController::class, 'registerInfo'])->name('super-buyer.register.success');
Route::get('/register-detail', [SuperRegisterFeeController::class, 'RegisterFeedetailAPIs']);
Route::get('/change-password', [UserController::class, 'updatePasswordUI'])->name('change.password.super-buyer')->middleware('super.buyer');
Route::post('/change-password', [UserController::class, 'updatePassword'])->name('change.password.post.super-buyer');
Route::get('/orders', [OrderController::class, 'index'])->name('super-buyer.index')->middleware('super.buyer');
Route::get('/genealogy/{slug}', [GenealogyController::class, 'genealogy'])->name('genealogy')->middleware('super.buyer');
Route::get('/direct-downline', [GenealogyController::class, 'directDownline'])->name('super-buyer.downline')->middleware('super.buyer');
Route::get('/all-downline', [GenealogyController::class, 'allDownLine'])->name('super-buyer.all-downline')->middleware('super.buyer');
Route::get('/bank', [SuperBuyerTransaction::class, 'bank'])->name('super-buyer.bank')->middleware('super.buyer');
Route::get('/support', [PagesController::class, 'support'])->name('super-buyer.support')->middleware('super.buyer');
Route::get('/revenue', [SuperBuyerTransaction::class, 'revenue'])->name('super-buyer.revenue')->middleware('super.buyer');
Route::get('/delivery-fee-api', [DeliveryController::class, 'getDeliveryFeeAPIs']);
});

Route::post('/login', [UserController::class, 'authenticate'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update.password');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainViewController::class, 'index'])->name(name:'welcome');
Route::get('/about', [MainViewController::class, 'about'])->name(name:'about');
Route::get('/statute', [MainViewController::class, 'statute'])->name(name:'statute');
Route::get('/contact', [MainViewController::class, 'contact'])->name(name:'contact');
Route::get('/user', [UserController::class, 'index'])->name(name:'user');
Route::get('/cart', [CartController::class, 'index'])->name(name:'cart.index');
Route::post('/cart/{product}', [CartController::class, 'add'])->name(name:'cart.add');
Route::delete('/cart/{product}', [CartController::class, 'delete'])->name(name:'cart.delete');
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
// Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/items', [ProductController::class, 'index'])->name(name:'products.index');
Route::get('/item/{product}', [ProductController::class, 'show'])->name(name:'products.show');
Route::get('/items/create', [ProductController::class, 'create'])->name(name:'products.create')->middleware(middleware:'auth');
Route::get('/items/promo/create', [ProductController::class, 'promo_create'])->name(name:'products.promoCreate')->middleware(middleware:'auth');
Route::post('/items', [ProductController::class, 'add'])->name(name:'products.add');
Route::post('/items/promo', [ProductController::class, 'promo_add'])->name(name:'products.promo_add');
Route::get('/items/edit/{product}', [ProductController::class, 'edit'])->name(name:'products.edit');
Route::get('/items/promo/edit/{promo}', [ProductController::class, 'promo_edit'])->name(name:'products.promoEdit');
Route::post('/items/{product}', [ProductController::class, 'update'])->name(name:'products.update');
Route::post('/items/promo/{promo}', [ProductController::class, 'promo_update'])->name(name:'products.promoUpdate');
Route::delete('/items/{product}', [ProductController::class, 'delete']);
Route::delete('/items/promo/{promo}', [ProductController::class, 'promo_delete'])->name(name:'products.promoDelete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

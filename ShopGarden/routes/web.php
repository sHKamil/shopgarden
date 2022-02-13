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
Route::get('/user', [UserController::class, 'index'])->name(name:'user')->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->name(name:'cart.index')->middleware('auth');
Route::post('/cart/{product}', [CartController::class, 'add'])->name(name:'cart.add')->middleware('auth');
Route::delete('/cart/{product}', [CartController::class, 'delete'])->name(name:'cart.delete')->middleware('auth');
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
// Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/items', [ProductController::class, 'index'])->name(name:'products.index')->middleware('can:isAdmin');
Route::get('/item/{product}', [ProductController::class, 'show'])->name(name:'products.show');
Route::get('/items/create', [ProductController::class, 'create'])->name(name:'products.create')->middleware('can:isAdmin');
Route::post('/items', [ProductController::class, 'add'])->name(name:'products.add')->middleware('can:isAdmin');
Route::get('/items/edit/{product}', [ProductController::class, 'edit'])->name(name:'products.edit')->middleware('can:isAdmin');
Route::post('/items/{product}', [ProductController::class, 'update'])->name(name:'products.update')->middleware('can:isAdmin');
Route::delete('/items/{product}', [ProductController::class, 'delete'])->middleware('can:isAdmin');


Route::get('/items/promo/create', [ProductController::class, 'promo_create'])->name(name:'products.promoCreate')->middleware('can:isAdmin');
Route::post('/items/promo', [ProductController::class, 'promo_add'])->name(name:'products.promo_add')->middleware('can:isAdmin');
Route::get('/items/promo/edit/{promo}', [ProductController::class, 'promo_edit'])->name(name:'products.promoEdit')->middleware('can:isAdmin');
Route::post('/items/promo/{promo}', [ProductController::class, 'promo_update'])->name(name:'products.promoUpdate')->middleware('can:isAdmin');
Route::delete('/items/promo/{promo}', [ProductController::class, 'promo_delete'])->name(name:'products.promoDelete')->middleware('can:isAdmin');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

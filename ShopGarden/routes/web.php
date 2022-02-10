<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\CartController;

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
Route::get('/cart', [CartController::class, 'index'])->name(name:'cart.index');
Route::post('/cart', [CartController::class, 'add'])->name(name:'cart.add');
Route::get('/items', [ProductController::class, 'index'])->name(name:'products.index');
Route::get('/item/{product}', [ProductController::class, 'show'])->name(name:'products.show');
Route::get('/items/create', [ProductController::class, 'create'])->name(name:'products.create')->middleware(middleware:'auth');
Route::post('/items', [ProductController::class, 'add'])->name(name:'products.add');
Route::get('/items/edit/{product}', [ProductController::class, 'edit'])->name(name:'products.edit');
Route::post('/items/{product}', [ProductController::class, 'update'])->name(name:'products.update');
Route::delete('/items/{product}', [ProductController::class, 'delete'])->name(name:'products.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

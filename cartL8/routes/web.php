<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/insertCategory', function () {
    return view('insertCategory');
});



Route::get('/contactus', function () {
    return view('contact');
});



Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('addCategory');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');


Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');

Route::get('/showProduct', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

Route::get('/insertProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('insertProduct');

Route::get('/editproduct/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editproduct');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');

Route::post('/updateproduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateproduct');

Route::post('/searchproduct', [App\Http\Controllers\ProductController::class, 'search'])->name('search.product');

Route::get('/clientProductView', [App\Http\Controllers\ProductController::class, 'clientProductView'])->name('clientProductView');

Route::get('/product_detail/{id}', [App\Http\Controllers\ProductController::class, 'showProductDetail'])->name('product.detail');

Route::post('/addToCart', [App\Http\Controllers\CartController::class, 'add'])->name('add.to.cart');

Route::get('/myCart', [App\Http\Controllers\CartController::class, 'show'])->name('my.cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
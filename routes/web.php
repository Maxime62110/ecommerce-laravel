<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () { créé de base
   // return view('welcome');
//});

Route::get('/admin-list', function () {
    return view('/admin-list'); // le nom de la vue doit correspondre
});

Route::get('cart', function(){
    return view('/cart');
});

Route::get('/category', function (){
    return view('/category');
});

Route::get('/contact', function (){
    return view('/contact');
});

Route::get('/dashboard', function (){
    return view('/dashboard');
});

Route::get('/index', function (){
    return view('/index');
});

Route::get('/products', function (){
    return view('/products');
});

Route::controller(ProductController::class)->group(function ($product) {
    Route::get('/product', 'index');
    Route::get('/product/{product}', 'show');
});


Route::get('/category/{category}', [CategoryController::class, 'show']);
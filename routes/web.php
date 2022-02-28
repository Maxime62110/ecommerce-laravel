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

Route::get('/admin-list', function () {
    return view('/admin-list'); // nom de la vue présent dans l'URL
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

Route::get('/product', function (){
    return view('/product');
});

Route::get('/products', function (){
    return view('/products');
});
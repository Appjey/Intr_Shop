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

Route::get('index.html', 'HomeController@index');
Route::get('product.html', 'ProductController@index');
Route::get('cart.html', 'CartController@index');
Route::get('categories.html', 'CategoriesController@index');
Route::get('checkout.html', 'CheckoutController@index');
Route::get('contact.html', 'ContactController@index');

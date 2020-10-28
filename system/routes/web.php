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
    return view('index');
});

Route::get('/index', function () {
	return view('index');
});

Route::get('/products', function () {
	return view('products');
});

Route::get('/checkout', function () {
	return view('checkout');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/Login', function () {
	return view('Login');
});

Route::get('/charts', function () {
	return view('charts');
});
Route::get('/dashboard', function () {
	return view('dashboard');
});
Route::get('/produk', function () {
	return view('produk');
});
Route::get('/promo', function () {
	return view('promo');
});
Route::get('/page-login', function () {
	return view('page-login');
});

Route::get('/register1', function () {
	return view('register1');
});
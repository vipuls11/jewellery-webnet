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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/footer', function () {
    return view('.layouts.footer');
});

Route::get('/header', function () {
    return view('.layouts.header');
});

Route::get('/home', function () {
    return view('.layouts.home');
});

Route::get('/necklaces_pendants', function () {
    return view('.layouts.necklaces_pendants');
});

Route::get('/singleproduct', function () {
    return view('.layouts.singleproduct');
});

Route::get('/pr', function () {
    return view('.layouts.pr');
});

Route::get('/shoppingbag', function () {
    return view('.layouts.shoppingbag');
});

Route::get('/addtocart', function () {
    return view('.layouts.addtocart');
});

Route::get('/checkout', function () {
    return view('.layouts.checkout');
});
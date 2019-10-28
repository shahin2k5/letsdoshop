<?php

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
    return redirect('home');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'HomeController@categories')->name('categories');
Route::get('/single-category', 'HomeController@singleCategory')->name('single-category');
Route::get('/product-details', 'HomeController@productDetails')->name('product-details');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/login', 'HomeController@checkout')->name('login');

//Auth::routes();
Route::get('/admin', 'AdminController@login')->name('admin');
Route::any('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

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

//  Login Section
Route::get('/login', function () {
    return view('dashboard.pages.login');
});

//  Home Section
Route::get('/', function () {
    return view('dashboard.pages.dashboard');
});

//  Categories Section
Route::get('/showCategories', function () {
    return view('dashboard.pages.category.showCategories');
});
Route::get('/addCategory', function () {
    return view('dashboard.pages.category.addCategory');
});


//  Products Section
Route::get('/showProducts', function () {
    return view('dashboard.pages.product.showProducts');
});
Route::get('/addProduct', function () {
    return view('dashboard.pages.product.addProduct');
});


//  Order Section
Route::get('/showOrders', function () {
    return view('dashboard.pages.order.showOrders');
});


//  Users Section
Route::get('/showUsers', function () {
    return view('dashboard.pages.user.showUsers');
});
Route::get('/addUser', function () {
    return view('dashboard.pages.user.addUser');
});

<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/','\App\Http\Controllers\Admin\LoginController@index');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/admin', function () {
        return view('dashboard.pages.dashboard');
    })->name('admin');


//  Categories Section
    Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);

//  Products Section
    Route::resource('products',App\Http\Controllers\Admin\ProductsController::class);


//  Order Section
    Route::get('orders','App\Http\Controllers\Admin\OrdersController@index' )->name('orders.index');


//  Users Section
    Route::resource('users',App\Http\Controllers\Admin\UsersController::class);


//  Settings
    Route::get('settings','App\Http\Controllers\Admin\SettingsController@index' )->name('settings.index');


});

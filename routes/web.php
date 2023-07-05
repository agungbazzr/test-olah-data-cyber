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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'AgentController@index')->name('agent.index');
Route::group(['prefix' => 'agent'],function() {
    Route::get('/', 'AgentController@index')->name('agent.index');
    Route::get('/top', 'AgentController@top')->name('agent.top');
   
});

// route for Customer
Route::group(['prefix' => 'customer'],function() {
    Route::get('/', 'CustomerController@index')->name('customer.index');
    Route::get('/top', 'CustomerController@top')->name('customer.top');
   
});

// route for Orders
Route::group(['prefix' => 'orders'],function() {
    Route::get('/', 'OrdersController@index')->name('orders.index');
    Route::get('/detail/{id}', 'OrdersController@detail')->name('orders.detail');
    
});

// route for Order_detail
Route::group(['prefix' => 'order_detail'],function() {
    Route::get('/', 'Order_detailController@index')->name('order_detail.index');
    Route::get('/create', 'Order_detailController@create')->name('order_detail.create');
    
});

// route for Product
Route::group(['prefix' => 'product'],function() {
    Route::get('/', 'ProductController@index')->name('product.index');
    Route::get('/top', 'ProductController@top')->name('product.top');
   
});
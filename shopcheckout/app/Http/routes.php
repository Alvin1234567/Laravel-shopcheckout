<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('products','ProductsController');
    Route::resource('transactions','TransactionsController');
    Route::resource('users','UsersController');
    Route::get('users/{user}/due','UsersController@amount_due');
    Route::any('api/auth/CustomerAuthenticate', 'Authenticate@login');
});
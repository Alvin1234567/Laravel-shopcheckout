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
    return view('index');
});

/*
Route::get('/hello', function () {
    return response('{ "name":"John", "age":31, "city":"New York" }', 200)
                  ->header('Content-Type', 'application/json');
});
*/

Route::group(['middleware' => ['web']], function() {
    Route::resource('posts','PostsController');
    Route::resource('products','ProductsController');
    Route::resource('transactions','TransactionsController');
    Route::resource('users','UsersController');
    Route::get('users/{user}/due','UsersController@amount_due');
    Route::any('api/auth/CustomerAuthenticate', 'Authenticate@login');
    #Route::any('api/accounts/fruit', 'FetchProducts@fetchproduct');
    #Route::resource('Auth','Authenticate');
});
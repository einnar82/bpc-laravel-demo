<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/product', 'ProductsController');

// Route::get('/product', 'ProductsController@index');
// Route::post('/product', 'ProductsController@store');
// Route::get('/product/{product}', 'ProductsController@show');
// Route::put('/product/{product}', 'ProductsController@update');
// Route::delete('/product/{product}', 'ProductsController@destroy');

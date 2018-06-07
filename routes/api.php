<?php

use Illuminate\Http\Request;

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

// GET all articles
Route::get('articles', 'ArticleController@index');

// GET one articles
Route::get('articles/{id}', 'ArticleController@show');

// POST Create article
Route::post('articles', 'ArticleController@store');

// PUT update article
Route::put('articles', 'ArticleController@store');

// DELETE article
Route::delete('articles', 'ArticleController@destroy');




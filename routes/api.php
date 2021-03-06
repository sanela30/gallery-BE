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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login','Auth\LoginController@authenticate');
Route::post('/register','Auth\RegisterController@create');

Route::middleware('jwt')->get('/allGalleries','GalleriesController@index');
Route::middleware('jwt')->get('/gallerie/{id}','GalleriesController@show');
Route::middleware('jwt')->get('/comments/{id}','CommentsController@show');
Route::middleware('jwt')->post('/comments','CommentsController@store');
Route::middleware('jwt')->delete('/comment/{id}','CommentController@destroy');
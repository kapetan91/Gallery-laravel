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

Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/register', 'Auth\RegisterController@registration');



Route::group(['namespace' => 'Api'], function () {
	Route::get('/all-galleries', 'GalleryController@index');
	Route::get('/galeries/{id}, GalleryController@show');


Route::group(['middleware' => 'jwt-auth'], function () {
	Route::post('/comments', 'CommentsController@create');
	Route::get('/galleries/{gallery}/comments', 'CommentsController@store');
	Route::get('/', 'GalleryController@index');
	Route::delete('/comments/{id}', 'CommentsController@destroy');

	});
});



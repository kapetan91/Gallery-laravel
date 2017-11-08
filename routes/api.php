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


Route::post('/login', 'Auth/LoginController@authenticate');
Route::middleware('jwt')->post('/register', 'Auth/RegisterController@register');
Route::post('/comments' , "CommentController@create");

Route::get('/galleries/users/{user}', 'GalleryController@personalGalleries');
Route::get('/galleries/{gallery}/comments', 'CommentController@index');
Route::get('/', 'GalleryController@index');

Route::resource('/galleries', 'GalleryController');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
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




Route::post('/login', 'Auth/LoginController@authenticate');
Route::post('/register', 'Auth/RegisterController@register');
Route::middleware('jwt')->post('/comments' , "CommentsController@create");

Route::middleware('jwt')->resource('/galleries', 'GalleryController');

Route::middleware('jwt')->get('/galleries/users/{user}', 'GalleryController@personalGalleries');

Route::middleware('jwt')->get('/galleries/{gallery}/comments', 'CommentsController@index');

Route::middleware('jwt')->get('/', 'GalleryController@index');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
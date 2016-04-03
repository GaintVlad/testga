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
    return redirect('articles');
});

Route::get('/admin', function () {
    return redirect('login');
});


Route::resource('articles', 'ArticlesController');

Route::get('admin/{id}', [
    'middleware' => 'auth',  'uses' => 'ArticlesController@admin']);

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

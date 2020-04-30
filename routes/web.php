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

Route::get('/', 'HomeController@index');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/contact', 'HomeController@contact');
Route::get('/terms', 'HomeController@terms');
Route::get('/users-guide', 'HomeController@usersguide');

Route::get('/members', 'MembersController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@checklogin');
Route::get('/logout', 'LoginController@logout');
Route::get('/register', 'LoginController@register');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

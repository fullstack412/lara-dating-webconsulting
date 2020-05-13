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
Route::get('privacy', 'HomeController@privacy');
Route::get('contact', 'HomeController@contact');
Route::get('terms', 'HomeController@terms');
Route::get('users-guide', 'HomeController@usersguide');

Route::group(['middleware' => ['auth']], function() {
    Route::get('members', 'MembersController@index');
});

Route::get('login', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::post('login', 'LoginController@checklogin');
Route::get('logout', 'LoginController@logout');
Route::get('register', 'LoginController@register');
Route::post('register', 'LoginController@postregister');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('registeredusers', function() { return view('admin.registeredusers.index');});
    Route::get('canceledaccounts', function() { return view('admin.canceledaccounts.index');});
    Route::get('payments', function() { return view('admin.payments.index');});
    Route::get('upgrades', function() { return view('admin.upgrades.index');});
    Route::get('paymentblocks', function() { return view('admin.paymentblocks.index');});
});

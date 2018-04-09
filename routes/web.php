<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'HomeController@Inicio')->name('inicio');


Route::group(['middleware' => 'admin'], function(){
    Route::get('/other', 'HomeController@Other')->name('other');

    /*Configurations */
// Route: Register user (GET)
    Route::get('/config/register', 'ConfigurationsController@Register')->name('register-user');

// Route: Register user (POST)
    Route::post('/config/register', 'ConfigurationsController@StoreRegister')->name('register-user-store');
});

/*Login*/
Route::get('/login', 'AuthController@Login')->name('login');
Route::post('/login', 'AuthController@PostLogin')->name('post-login');
Route::post('/logout', 'AuthController@Logout')->name('logout');
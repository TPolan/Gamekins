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

//Route::get('/', function () {
//    return view('mainMenu');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MenuController@index');
Route::get('/rfp', 'RollingController@index')->name('RFP');
Route::get('/rfp/roll', 'RollingController@roll');
Route::get('/react/firstPlayer','ReactController@index');

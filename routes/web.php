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

Route::get('/', function() {
    return View('welcome');
});

Route::get('/homepage', 'PagesController@pagehome');
Route::get('/aboutpage', 'PagesController@pageabout');
Route::get('/contactpage', 'PagesController@pagecontact');

Route::get('/productpage', 'ProductController@pageproduct');

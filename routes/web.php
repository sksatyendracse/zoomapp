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

Route::view('/', 'index');
Route::view('/contact', 'frontpages.contact');
Route::view('/about', 'frontpages.about');
Route::view('/aarhoan', 'frontpages.aarhoan');
Auth::routes();

Route::get('/login/frontadmin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/frontadmin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/frontadmin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/frontadmin', 'Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');

Route::view('/home', 'home')->middleware('auth');
Route::view('/frontadmin', 'dashboard');
Route::get('/frontadmin/home',array('as'=>'summernoteeditor.get','uses'=>'SummernoteController@getSummernoteeditor'));
Route::post('/frontadmin/summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernoteController@postSummernoteeditor'));


Route::view('/writer', 'writer');
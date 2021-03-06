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

Route::get('/', 'HomeController@index');

Route::get('users', 'UserController@index');
Route::get('ยูสเซอร์/แสดง/{id}', 'UserController@show');

Route::auth();

Route::get('/อะไรสักอย่างหนึ่ง', function(){
    return "acb";
});

Route::get('/home', 'HomeController@home');

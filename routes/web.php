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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('index');

Route::resource('users', 'UserController');

Route::resource('photos', 'PhotoController');

Route::resource('avatars', 'AvatarController');

Route::resource('posts', 'PostController');

Route::get('/test', 'TestController@index')->name('test.index');

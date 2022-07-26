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

/*Route::get('/', 'HomeController@index');
Route::get('test', 'HomeController@test');
Route::get('test2', 'Test\TestController@index');
Route::get('page/{slug}', 'PageController@show');

Route::resource('admin/posts', 'PostController', ['parameters' =>
    [
        'posts'=>'slug',

    ]
]);*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('posts.create');
Route::post('/', 'HomeController@store')->name('posts.store');
Route::get('/page/about', 'PageController@show')->name('page.about');
Route::match(['get', 'post'], '/send', 'ContactController@send');
// перенапровление на 404
Route::fallback(function () {
//   return redirect()->route('home');

    abort(404, 'Страница не сущестаует');
});

// группимруем маршруты для неавторизованных
Route::group(['middleware' => 'guest'], function () {
    // регистрация
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    //Аутентификация
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});


Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');


Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // админскай маршрут
    Route::get('/', 'MainController@index');
});


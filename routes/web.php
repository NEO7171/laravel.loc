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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function (){
//    return 'Привет здарова!!!';
//});
//Route::get('/', function () {
//    $res = 8 + 3;
//    $name = 'John';
//    return view('home', ['res'=>$res, 'name'=>$name]);
//});

Route::get('/', function () {
    $res = 8 + 3;
    $name = 'John';
    return view('home', compact('res', 'name'));
});

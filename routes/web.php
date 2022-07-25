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

Route::get('about', function () {
    return '<h1>Привет, страница about</h1>';
});
// для перевода на лругой URL
/*Route::get('contact', function () {
    return view('contact');
});
// для принятия методом post
Route::post('send-email', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return 'Send-mail';
});*/
// для post на той же странице
// можно именовать маршруты методом -> name
Route::match(['post', 'get'], 'contact', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');

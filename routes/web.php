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
Route::match(['post', 'get'], 'contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

// просто подключаем вид
Route::view('test', 'test', ['test' => 'Test data']);
// редирект
Route::redirect('about', 'contact', 301);
//или  выдаст 301 статус
//Route::permanentRedirect('about', 'contact');


// вывод с парамертами
Route::get('post/{id}', function ($id) {
    return "Это пост с ID - $id";
});
// c помощью where() можно указать шаблон регулярного выражения под параметры
//Route::get('post/{id}/{slug}', function ($id, $slug) {
//    return "Это пост с ID - $id, И слаг - $slug";
//})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);
// в C:\OpenServer2\domains\laravel.loc\app\Providers\RouteServiceProvider.php
// в методе boot пропишим  шаблон регулярного выражения для разных типов gtt переменных
Route::get('post/{id}/{slug}', function ($id, $slug) {
    return "Это пост с ID - $id, И слаг - $slug";
});

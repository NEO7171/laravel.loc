<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        dump($_ENV['DB_DATABASE']);
        dump($_ENV);
        return view('home', ['res'=> 5, 'name'=>'John']);
    }
    public function test()
    {
        return __METHOD__;
    }

}

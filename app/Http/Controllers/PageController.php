<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    // php artisan make:controller PageController
    public function show($slug)
    {
       return view("pages.show", ['slug'=>$slug]) ;
    }
}

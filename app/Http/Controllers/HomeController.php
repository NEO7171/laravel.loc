<?php


namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->title = 'Статья 2';
//        $post->content = 'Контент Статьи 1';
        $post->save();
        return view('home', ['res'=> 5, 'name'=>'John']);
    }

    public function test()
    {
        return __METHOD__;
    }

}

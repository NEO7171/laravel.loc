<?php


namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        //  $data = Country::limit(6)->get();
        //   $data = Country::where('Code', '<', 'ALB')->select('Code', 'name')->get();
        // $data = City::find(5);
        //  $data = Country::find('AGO');
        //   dd($data);
        //внесение данных
        /*   $post = new Post();
           $post->title = 'Post4';
           $post->content = 'lorem content 4';
           $post->save();*/

        //массовое назначение св-в
        $post = new Post();
        // добавление записи
        //   Post::create(['title'=> 'Post7', 'content'=>'lorem content 7']);
        // обновление записи
        /*   $post = Post::find(6);
           $post->content= 'lorem content 7';
           $post->save();*/

        // массовое обновление записей
     /*   Post::where('id', '>', 3)
        ->update(['updated_at' => NOW()]);*/

        // удаление модели
        /*$post = Post::find(6);
        $post->delete();*/

        Post::destroy(2, 4);

        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }

}

<?php


namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Tag;
use App\Rubric;

class HomeController extends Controller
{
    public function index()
    {
        //    $data = DB::table('country')->get();
        //   $data = DB::table('country')->limit(5)->get();
        // $data = DB::table('country')->select('code', 'name')->limit(5)->get();
        // $data = DB::table('country')->select('code', 'name')->orderBy('code', 'DESC')->get();
        //  $data = DB::table('city')->select('id', 'name')->find(5);

        /* $data = DB::table('city')->
         select('id', 'name')->where('id', '<=', 5)->get();*/

        /*  $data = DB::table('city')->select('id', 'name')->
          where([
              ['id', '>=', 1],
              ['id', '<=', 20]
          ])->get(); */

        /*  $data = DB::table('city')->
          where('id', '<', 5)->value('Name');*/

        // получаем ассоциативный массив с ключом 'code' и знечением 'name'
        //    $data = DB::table('country')->limit(10)->pluck('name', 'code');

        // вычисление количества строк и т.д.
        // $data = DB::table('country')->count();
        // $data = DB::table('country')->max('population');
        //$data = DB::table('country')->sum('population');
        //$data = DB::table('country')->avg('population'); // среднее значение

        // выборка уникальных
        //   $data = DB::table('city')->select('CountryCode')->distinct()->get();

        // джоины

        /*   $data = DB::table('city')
               ->select('city.id', 'city.Name as city_name',
                   'country.code', 'country.Name as country_name')->limit(20)
               ->join('country', 'city.CountryCode', '=', 'country.Code')
               ->orderBy('city.id')->get();*/


        /*   $post = Post::find(3);

           dd($post->title, $post->rubric->title);*/

        /*  $rubric = Rubric::find(1);
          dd($rubric->title, $rubric->post->title);*/

        /*  $posts = Rubric::find(1)->posts()->select('title')
              ->where('id', '>', 2)->get();
          dd($posts);*/

     /*   $posts = Post::with('rubric')->where('id', '>', 1)->get();

        foreach ($posts as $post) {
            dump($post->title, $post->rubric->title);
        }*/

      /*  $post = Post::find(2);
        dump($post->title);
        foreach ($post->tags as $tag) {
            dump($tag->title);
        }*/

     /*   $tags = Tag::find(1);
        dump($tags->title);
        foreach ($tags->tagPosts as $post) {
            dump($post->title);
        }*/

        //return view('home', ['res'=> 5, 'name'=>'John']);

        $title = 'Home page';
        $h1 = '<h1>Homik hage</h1>';
        $data1 = range(1, 20);
        $data2 = [
            'title'=>'Title massive',
            'content'=>'Content massive',
            'keys'=>'Keys massive',

        ];
        return view('home', compact('title', 'h1', 'data1', 'data2'));


    }

    public function test()
    {
        return __METHOD__;
    }

}

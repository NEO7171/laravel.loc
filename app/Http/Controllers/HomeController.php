<?php


namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        // cookie Так и не понял нифига не работает
        //Cookie::
        // Cookie::queue('test', 'test cookie', 4);
        /* $minutes = 60;
         $response = new Response('Set Cookie');
         $response->withCookie(cookie('test', 'test MyValue', $minutes));
         dump(Cookie::get('test'));
         dump($request->cookie('test'));*/

        // запись в кешь
        // Cache::put('cache-key', 'cache-val', 60);
        //получить из кеша
        //dump(Cache::get('cache-key'));
        /* if (Cache::has('posts')) {
             $posts = Cache::get('posts');
         } else {
             $posts = Post::orderBy('created_at', 'DESC')->get();
             Cache::put('posts', $posts, 60);
         }*/


        // запись в сессию
        // одиночное
        /* $request->session()->put('test', 'Test value');
         // массив в сессию
         session([
             'cart'=>[
                 ['id'=>1, 'title'=>'product 1'],
                 ['id'=>2, 'title'=>'product 2'],
             ]
         ]);*/

        // получение данных сессии

        // dump(session('test'));
        /*  if ($request->session()->has('cart')) {
              // dump(session('cart')[1]['title']);
          }*/

        // или
        // dump($request->session()->get('test'));
        // дозаписать в сессию
        // $request->session()->push('cart', ['id' => 5, 'title' => 'product 5']);

        // удаление из сессии
        // прочитать и удалить
        // $request->session()->pull('test2');
        // просто удалить
        //$request->session()->forget('test2');
        // полная очистка сессии
        // $request->session()->flash();

        // вывод сессии
        // dump($request->session()->all());
        //  dump(session()->all());


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

        // пагинация
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        //return view('home', ['res'=> 5, 'name'=>'John']);

        $title = 'Home page';
        $h1 = '<h1>Homik page</h1>';
        $data1 = range(1, 20);
        $data2 = [
            'title' => 'Title massive',
            'content' => 'Content massive',
            'keys' => 'Keys massive',

        ];

        return view('home', compact('title', 'h1', 'data1', 'data2', 'posts'));


    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
        /*dump($request->input('title'));
        dump($request->input('content'));
        dd($request->input('rubric_id'));*/

        // dd($request->all());
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer',
        ]);
        // перевод сообщения валидации
        /* $rules = [
             'title' => 'required|min:5|max:100',
             'content' => 'required',
             'rubric_id' => 'integer',
         ];
         $messages = [
             'title.required' => 'Заполните поле заголовка',
             'title.min' => 'Минимальное значение поля  заголовка 5',
             'title.max' => 'Максимальное значение поля  заголовка 100',
             'content.required' => 'Заполните контента',
             'rubric_id.integer' => 'Выберите рубрику',
         ];
         $validator = Validator::make($request->all(), $rules, $messages)->validate();*/


        Post::create($request->all());

        // запишем во flash сесию значения
        $request->session()->flash('success', 'данные успешно сохранены');
        return redirect()->route('home');
    }

    public function test()
    {
        return __METHOD__;
    }

}

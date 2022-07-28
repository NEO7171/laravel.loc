<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        /*  dump($_ENV['DB_DATABASE']);
          dump(env('DB_HOST'));
          dump(config('app.timezone'));
          dump(config('database.connections.msql.database'));
          dump($_ENV);*/

        /* $query = DB::insert("INSERT INTO posts (title, content)
 VALUES (:title, :content)", ['title'=>'Статья 6', 'content'=>'Текст у статьи 6']);
         var_dump($query);*/

//        DB::update("UPDATE posts SET title = ? WHERE id = 3", ['Заголовок 3 изменение']);
        //  DB::delete("DELETE FROM posts WHERE id=?", [4]);
        DB::beginTransaction();
        try {
            DB::update("UPDATE posts SET created_at = ?
WHERE created_at IS NULL", [NOW()]);
            DB::update("UPDATE posts SET updated_at = ?
WHERE updated_at IS NULL", [NOW()]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage() ;
        }

        $posts = DB::select("SELECT * FROM posts WHERE id> :id",
            ['id' => 2]);
        return dump($posts);
//        return view('home', ['res'=> 5, 'name'=>'John']);
    }

    public function test()
    {
        return __METHOD__;
    }

}

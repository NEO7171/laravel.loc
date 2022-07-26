<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список постов</title>
</head>
<body>
<h1>Список постов</h1>
<ul>
    <li>
        <a href="{{route('posts.show', ['slug'=>1])}}">Пост1</a>
        <br>
        <a href="{{route('posts.edit', ['slug'=>1])}}">Редактируем Пост1</a>
        <form action="{{route('posts.destroy', ['slug'=>1]) }}" method="post">
           @csrf
            @method('DELETE')
            <button type="submit">Destroy</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['slug'=>2])}}">Пост2</a>
        <br>
        <a href="{{route('posts.edit', ['slug'=>2])}}">Редактируем Пост2</a>
        <form action="{{route('posts.destroy', ['slug'=>2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Destroy</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['slug'=>3])}}">Пост3</a>
        <br>
        <a href="{{route('posts.edit', ['slug'=>3])}}">Редактируем Пост3</a>
        <form action="{{route('posts.destroy', ['slug'=>3]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Destroy</button>
        </form>
    </li>

</ul>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление поста </title>
</head>
<body>
<h1>Изменение поста</h1>
<form action="{{route('posts.update', ['slug'=>$id]) }}" method="post">
    @csrf
{{--     указываем метод отправки--}}
    @method('PUT')
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>
</body>
</html>

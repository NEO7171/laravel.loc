<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавляем посты</title>
</head>
<body>
<h1>Добавляем посты</h1>
<form action="{{route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>
</body>
</html>

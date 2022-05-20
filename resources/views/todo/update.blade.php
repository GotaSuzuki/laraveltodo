<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Document</title>
</head>

<body>
    <article>
        <p>{{$item -> title}}</p>
        <p>{{$item -> txt}}</p>
    </article>

    <table>
        <form action="/" method="POST">
            @csrf
            <input type="text" name="title" size="30" placeholder="タイトル"><br>
            <textarea name="txt" cols="30" rows="10" placeholder="テキスト"></textarea><br>
            <button type="submit">登録する</button>
        </form>
    </table>

    <p><a href="{{ action('App\Http\Controllers\TodoController@index') }}">戻る</a></p>
</body>

</html>
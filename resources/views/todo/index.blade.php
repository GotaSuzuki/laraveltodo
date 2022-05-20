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
    @foreach($items as $item)
    <tr>
        <td><a href="{{ action('App\Http\Controllers\TodoController@detail', $item->id) }}" id='title'>{{$item->title}}</a></td>
        <td><a href="{{ action('App\Http\Controllers\TodoController@delete', $item->id) }}">削除する</a></td>
        <br>
        <hr>
    </tr>
    @endforeach

    <table>
        <form action="/" method="POST">
            @csrf
            <input type="text" name="title" size="30" placeholder="タイトル"><br>
            <textarea name="txt" cols="30" rows="10" placeholder="テキスト"></textarea><br>
            <button type="submit">登録する</button>
        </form>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-start">
            @foreach($items as $item)
            <tr>
                <div class="col">
                    <input type="checkbox" name="check" id="">
                </div>
                <div class="col">
                    <td><a href="{{ action('App\Http\Controllers\TodoController@detail', $item->id) }}" id='title'>{{$item->title}}</a></td>
                </div>
                <div class="col">
                    <td><a href="{{ action('App\Http\Controllers\TodoController@delete', $item->id) }}" id="delete">削除する</a></td>
                </div>
                <div class="col">
                    <td><a href="{{ action('App\Http\Controllers\TodoController@edit', $item->id) }}" id="edit">編集する</a></td>
                </div>
            </tr>
            <hr><br>
            @endforeach

        </div>
    </div>

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
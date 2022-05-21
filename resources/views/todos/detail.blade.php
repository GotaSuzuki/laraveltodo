<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Detail</title>
</head>

<body>
    <header></header>
    <article>
        <div class="todo_detail">
            <table>
                <p class="title">{{$item -> title}}</p>
                <p>{{$item -> txt}}</p>
                <p><a href="{{ action('App\Http\Controllers\TodosController@index') }}">戻る</a></p>
            </table>
        </div>
    </article>
</body>

</html>
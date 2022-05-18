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
    <article>
        <p>{{$item -> title}}</p>
        <p>{{$item -> txt}}</p>
        <p><a href="{{ action('App\Http\Controllers\TodoController@index') }}">戻る</a></p>
    </article>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <td>{{$item -> title}}</td>
    <td>{{$item -> txt}}</td>
    <td><a href="{{ action('App\Http\Controllers\TodoController@index') }}">戻る</a></td>
</body>

</html>
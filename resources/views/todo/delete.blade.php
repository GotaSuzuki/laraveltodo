<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Delete</title>
</head>

<body>
    <form action="delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <p>{{$form->title}}</p>
        <p>{{$form->txt}}</p>
        <input type="submit" value="削除する">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
    <form action="delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <p>{{$form->title}}</p>
        <p>{{$form->txt}}</p>
        <input type="submit" value="send">
    </form>
</body>

</html>
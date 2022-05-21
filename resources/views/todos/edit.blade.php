<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col1">
                <div class="create_container">
                    <p>Rewrite Todo</p>
                    <table>
                        <form action="/edit" method="POST">
                            <div class="inputbox">
                                @csrf
                                <input type="hidden" name="id" value="{{$form->id}}">
                                <input type="text" name="title" size="30" placeholder="タイトル" value="{{$form->title}}"><br>
                                <input type="text" name="txt" size="30" placeholder="テキスト" value="{{$form->txt}}"><br>
                                <button id="create_button" type="submit">再登録</button>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
            <div class="col col2">
                <div class="d-grid gap-3">
                    <div class="list_container">
                        <div class="p-2">
                            <tr>
                                <div class="row align-items-center">
                                    <div>
                                        <p>{{$item -> title}}</p>
                                    </div>
                                    <div>
                                        <p>{{$item->txt}}</p>
                                    </div>
                                    <div>
                                        <p id="back"><a href="{{ action('App\Http\Controllers\TodosController@index') }}">戻る</a></p>
                                    </div>
                                </div>
                            </tr>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
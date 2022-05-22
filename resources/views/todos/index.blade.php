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
    <header></header>
    <div class="container">
        <div class="log">@if(Auth::check())
            <p id="TodoList">{{Auth::user()->name . 'の' . 'TodoList'}}</p>
            @else
            <p>*ログインしていません。(<a href="/login">ログイン</a>)</p>
            <p><a href="/register">登録</a></p>
            <p id="TodoList">TodoList</p>
            @endif
        </div>
        <div class="row">
            <div class="col col1">
                <div class="create_container">
                    <p>Create Todo</p>
                    <table>
                        <form action="/" method="POST">
                            <div class="inputbox">
                                @csrf
                                <input type="text" name="title" size="30" placeholder="タイトル"><br>
                                <input type="text" name="txt" size="30" placeholder="テキスト"><br>
                                <button id="create_button" type="submit">登録</button>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
            <div class="col col2">
                <div class="d-grid gap-3">
                    <div class="list_container">
                        <div class="p-2">@foreach($items as $item)
                            <tr>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <input type="checkbox" name="check" id="">
                                    </div>
                                    <div class="col">
                                        <td><a href="{{ action('App\Http\Controllers\TodosController@detail', $item->id) }}" id='title'>{{$item->title}}</a></td>
                                    </div>
                                    <div class="col">
                                        <td><a href="{{ action('App\Http\Controllers\TodosController@edit', $item->id) }}" id="edit">編集する</a></td>
                                    </div>
                                    <div class="col">
                                        <td><a href="{{ action('App\Http\Controllers\TodosController@delete', $item->id) }}" id="delete">削除する</a></td>
                                    </div>
                                </div>
                            </tr>
                            <br>
                            @endforeach</div>
                        {{ $items->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer></footer>
</body>

</html>
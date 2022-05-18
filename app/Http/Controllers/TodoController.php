<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from todos order by id desc');
        return view('todo.index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $param = [
            'id' => $request->id,
            'title' => $request->title,
            'txt' => $request->txt,
        ];
        DB::table('todos')->insert($param);
        return redirect('/');
    }
}

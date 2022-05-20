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

    public function detail(Request $request, $id)
    {
        $item = DB::table('todos')->where('id', $id)->first();
        return view('todo.detail', ['id' => $id], ['item' => $item]);
    }

    public function delete(Request $request)
    {
        $item = DB::table('todos')->where('id', $request->id)->first();
        return view('todo.delete',  ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('todos')->where('id', $request->id)->delete();
        return redirect('/');
    }
}

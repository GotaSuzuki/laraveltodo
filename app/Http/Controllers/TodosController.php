<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class TodosController extends Controller
{
    public function index()
    {
        $items = DB::table('todos')->orderBy('id', 'desc')->simplePaginate(5);
        return view('todos.index', ['items' => $items]);
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
        return view('todos.detail', ['id' => $id], ['item' => $item]);
    }

    public function delete(Request $request)
    {
        $item = DB::table('todos')->where('id', $request->id)->first();
        return view('todos.delete',  ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('todos')->where('id', $request->id)->delete();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $item = DB::table('todos')->where('id', $request->id)->first();
        return view('todos.edit', ['form' => $item], ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'title' => $request->title,
            'txt' => $request->txt,
        ];
        DB::table('todos')->where('id', $request->id)->update($param);
        return redirect('/');
    }
}

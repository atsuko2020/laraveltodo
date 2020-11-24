<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    //追加
        public function index() {
            $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
        }
    //todo追加処理
        public function store(Request $request) {
            $todo = new Todo();
            $todo->body = $request->body;
            $todo->save();
            return redirect('/');
        }
    //削除処理
    public function destroy(todo $todo) {
        $todo->delete();
        return redirect('/');
    }
    //編集画面への遷移処理
    public function edit(todo $todo) {
        return view('todos.edit')->with('todo', $todo);
    }
    //更新処理
    public function update(Request $request, todo $todo) {
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
    }
}

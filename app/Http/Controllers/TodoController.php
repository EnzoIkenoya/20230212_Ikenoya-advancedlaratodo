<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $todos = Todo::all();
        return view('index', ['todos' => $todos , 'user'=>$user]);
    }

    public function created(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }

    public function store(Request $request)
    {
        $todo = new todo;
        $todo->content = $request->input('content');
        $todo->save();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $todo = Todo::find($rewuest->id);
        return view('edit', ['form' => $todo]);
    }

    public function update(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $form = $request->all();
        Todo::where('id', $request->id)->delete($form);
        return redirect('/');
    }

    public function find(Request $request)
    {
        $user = Auth::user();
        $form = $request->all();
        return view('/find', ['user'=>$user]);
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        $todos = 'todos';
        $todo = Todo::where('content','LIKE BINARY',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'todo' =>$todo,
        ];
        return view('find',['user'=>$user, $param,]);
    }
}

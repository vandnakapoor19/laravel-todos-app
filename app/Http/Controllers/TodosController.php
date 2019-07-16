<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
    }

    function show($todosid){
          
            $todo = Todo::find($todosid);
            return view('todos.show')->with('todo',$todo);
          
    }

    function create(){
        return view('todos.create');
    }

    function store(){
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }
}

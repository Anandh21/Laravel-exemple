<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function showTodo()
    {
        $todos = Todo::all();
        return view('todo.showTodo',["todos"=>$todos]);
    }
}

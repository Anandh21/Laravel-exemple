<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TodoController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function showTodo()
    {
        $todos = Todo::all();
        return view('todo.showTodo',["todos"=>$todos]);
    }

    /**
     * @return Application|Factory|View
     */
    public function showAddTodoForm()
    {
        return view('todo.addTodoForm');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function addTodo(Request $request)
    {
        $todo = new Todo();
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->save();

        return redirect('/todo')->with('success', 'Todo a été ajoutée!!!');
    }

    /**
     * @param Todo $todo
     * @return Application|Factory|View
     */
    public function showUpdateTodoForm(Todo $todo)
    {
        return view('todo.updateTodoForm', ['todo'=>$todo]);
    }

    /**
     * @param Request $request
     * @param Todo $todo
     * @return Application|RedirectResponse|Redirector
     */
    public function updateTodo(Request $request, Todo $todo)
    {
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->save();

        return redirect('/todo')->with('warning', 'Todo a été mise à jour!!!');
    }
    
    public function deleteTodo(Todo $todo)
    {
        $todo->delete();
        return back()->with('error', 'Todo a été supprimée');
        // error pour avoir la couleur rouge dans la flash
    }
}

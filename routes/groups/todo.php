
<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::prefix('/todo')->group(function (){
    Route::get('/',[TodoController::class,'showTodo'])->name('showTodo');
    
    Route::get('/create', [TodoController::class, 'showAddTodoForm'])->name('showAddTodoForm');
    Route::post('/create',[TodoController::class, 'addTodo'])->name('addTodo');
    
    Route::get('/{todo:id}',[TodoController::class, 'showUpdateTodoForm'])->name('showUpdateTodoForm');
    Route::patch('{todo:id}', [TodoController::class, 'updateTodo'])->name('updateTodo');

    Route::delete('/{todo:id}', [TodoController::class, 'deleteTodo'])->name('deleteTodo');
    
});
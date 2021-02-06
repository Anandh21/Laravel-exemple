
<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::prefix('/todo')->group(function (){
    Route::get('/',[TodoController::class,'showTodo'])->name('showTodo');
});
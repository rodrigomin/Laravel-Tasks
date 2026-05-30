<?php

use App\Http\Controllers\TaskController; # importa o taskController, onde tem o get, delete, update e tals
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/tasks');
});

Route::resource('tasks', TaskController::class); # criamos as rotas com base no resource, q já padroniza tudo
# 'tasks' pq todas as rotas devem começar com tasks


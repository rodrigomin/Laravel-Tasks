<?php

namespace App\Http\Controllers;

use App\Models\Task; # Linka com o modelo que foi criado anteriormente "Task"
use Illuminate\Http\Request;

# php artisan make:controller TaskController --resource => esse resource cria um CRUD automático, facilitando td

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tasks = Task::all(); # fica verde pq usa o RECURSO do modelo, e o all vai chamar TODOS
        return view('tasks.index', compact('tasks')); # pega informações de taks.index e vai compactar diretamente pra view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }


    public function store(Request $request) # logica q armazena nova task
    {
        //
        $request->validate([
            'title'=>'required|max:255' # o título é obrigatório e o máximo de caracteres é 255 caracteres
        ]); # função que será criada pela gente p/ validar o formulutario
        
        Task::create($request->all()); # cria nova task baseada no modelo

        # Redireciona para tela inicial
        return redirect()->route('tasks.index');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(Task $task) # leva para a página com o formulario de editar
    {
        //
        return view('tasks.edit', compact('tasks'));
    }

    public function update(Request $request, Task $task) # lógica para editar
    {
        //
        $request->validate([
            'title'=>'required|max:255' # o título é obrigatório e o máximo de caracteres é 255 caracteres
        ]); # função que será criada pela gente p/ validar o formulutario
        $task->update([
            'title'=>$request->title, # titulo recebe titulo do request
            'completed'=>$request->has('completed') # Checka se está completado
        ]);
        return redirect()->route('tasks.index'); # retorna para página inicial
    }


    /**
     * Função q remove
     */
    public function destroy(Task $task)
    {
        $task->delete(); # Deleta task

        return redirect()->route('tasks.index'); # retorna para página inicial
    }
}

/**
 * As funções: validate, delete, update e create serão todas feitas depois, estão ensinando como se tudo ja tivesse pensado antes
 * por isso não há testes, portanto, não sei se tudo esta correto ou não
 */





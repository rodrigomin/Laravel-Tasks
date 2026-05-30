<h1> Minhas Tarefas </h1>
<a href="{{route('tasks.create')}}"> Nova Tarefa </a>
<ul> 
    @foreach($tasks as $task)
    <li>
        {{$task->completed ? 'Sim' : 'Não'}} 
        {{$task->title}}
        <a href="{{route('tasks.edit', $task->id)}}"> Editar Tarefa </a>
    </li>
    @endforeach
</ul>
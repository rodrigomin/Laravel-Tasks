<h1> Minhas Tarefas </h1>
<a href="{{route('tasks.create', $task->id)}}"> Nova Tarefa </a>
<ul> 
    @foreach($tasks as $task)
    <li>
        {{$task->completed ? 'Sim' : 'Não'}} 
        {{$task->title}}
        <a href="{{route('tasks.edit', $task->id)}}"> Editar Tarefa </a>
    </li>
</ul>
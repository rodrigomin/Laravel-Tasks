<h1> Criar Tarefa </h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf 
    <label for=""> Título </label>
    <input type=text required name="title"> </input>

    <button type="submit"> Salvar </button>
</form>
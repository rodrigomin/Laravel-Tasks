<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

# MIGRATIONS SÃO COMO COMMITS, históricos de alterações na estrutura do banco de dados
# Quando eu fizer uma alteração eu devo criar uma nova, como se fosse um commit novo.

# php artisan make:migration task => é oq cria a migrate
# é tipo um git commit, cria o histórico da alteração

# php artisan migrate => aplica as alterações na migration, é como se fosse um git push -u origin main
# ambos mandam as alterações pro "servidor"


# As migrations servem para criar tabelas e mudanças ESTRUTURAIS no código, nesse caso, estamos criando uma
# tabela com SQLite, onde tem o ID, Título, Completed e o Timestamp.

# Quando fizermos uma alteração devemos usar php artisan migrate:fresh (o q deleta a ultima migration e atualiza)
# Caso precisa voltar na migration anterior usamos php artisan migrate:rollback

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Código para subir as Migration
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); # ID AUTO_INCREMENT_KEY
            $table->string('title');
            $table->boolean('completed')->default(false); # Se o registro foi completo, como padrão vai ser falso
            $table->timestamps(); # Data e hora de criação
        });
        echo("Hello World");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Criação do modelo e definição de informações a serem recebidas

    protected $fillable = ['title', 'completed']; # Queremos que a model receba title e completed, caso venha algo a +,
    #requisições n serão permitidas
    
    
}

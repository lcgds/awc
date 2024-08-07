<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'Funcionario';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'telefone'
    ];

    /*
        Definição manual de chave primária
        protected $primarykey = 'nome_da_pk';
    */
}

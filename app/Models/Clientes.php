<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'Clientes';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'data_de_nascimento'
    ];

    public function vendas() {
        return $this->hasMany(Vendas::class, 'cliente_id');
    }
}

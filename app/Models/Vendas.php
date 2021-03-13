<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $table = "Vendas";

    protected $fillable = [
        'cliente_id',
        'funcionario_id',
        'valor',
        'data_da_venda'
    ];

    public function exibirCliente() {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function exibirFuncionario() {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}

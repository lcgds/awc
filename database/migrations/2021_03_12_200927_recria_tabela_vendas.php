<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecriaTabelaVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('funcionario_id');
            $table->date('data_da_venda');
            $table->double('valor', 5, 2);

            $table->foreign('cliente_id')->references('id')->on('Clientes')->onDelete('cascade');

            $table->charset='utf8';
            $table->collation='utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vendas');
    }
}

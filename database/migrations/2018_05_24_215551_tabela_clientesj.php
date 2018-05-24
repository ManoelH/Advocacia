<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaClientesj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_juridicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_fantasia');
            $table->string('cep');
            $table->string('area_atuacao');
            $table->string('telefone');
            $table->string('cnpj');
            $table->string('razao_social');
            $table->string('cidade');
            $table->string('rua');
            $table->string('numero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_juridicos');
    }
}

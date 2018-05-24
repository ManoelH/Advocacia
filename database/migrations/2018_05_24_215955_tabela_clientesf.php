<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaClientesf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_fisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->string('cep');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('ctps');
            $table->string('pis_pasep');
            $table->string('serie');
            $table->string('cidade');
            $table->string('rua');
            $table->string('numero');
            $table->string('data_nascimento');
            $table->string('rg');
            $table->string('estado_civil');
            $table->string('conjugue');                        
            $table->string('certidao_casamento');
            $table->string('uf');
            $table->string('uf_ctps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_fisicos');
    }
}

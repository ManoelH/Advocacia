<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClienteFisico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientesfisicos', function (Blueprint $table) {
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
            $table->date('dataNascimento');
            $table->string('rg');
            $table->string('estadocivil')->default('');
            $table->string('conjugue')->default('');                        
            $table->string('certidao_casamento')->default('');
            $table->string('uf');
            $table->string('ufCtps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientesfisicos');
    }
}

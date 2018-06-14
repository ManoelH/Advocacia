<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClienteJuridico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientesjuridicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeFantasia');
            $table->string('cep');
            $table->string('areaAtuacao');
            $table->string('telefone');
            $table->string('cnpj');
            $table->string('razaoSocial');
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
        Schema::dropIfExists('clientesjuridicos');
    }
}

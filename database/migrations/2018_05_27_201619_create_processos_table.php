<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('numero');
            $table->string('assunto');
            $table->float('valorCausa');
            $table->string('faseProcessual');
            $table->string('id_cliente');
            $table->string('id_reu');
            $table->string('id_advogado');
            $table->string('id_juiz');
            $table->string('id_testemunha1');
            $table->string('id_testemunha2');
            $table->string('id_testemunha3');
            $table->date('dataInicio'); 
            $table->boolean('concluido')->default(false);                       
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
        Schema::dropIfExists('processos');
    }
}

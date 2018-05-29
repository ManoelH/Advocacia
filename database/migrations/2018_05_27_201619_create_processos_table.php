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
            $table->string('cliente');
            $table->string('reu');
            $table->string('advogado');
            $table->string('juiz');
            $table->string('testemunha1');
            $table->string('testemunha2');
            $table->string('testemunha3');
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

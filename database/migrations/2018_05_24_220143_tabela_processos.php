<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaProcessos extends Migration
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
            $table->string('numero');
            $table->string('assunto');
            $table->string('area_atuacao');
            $table->string('telefone');
            $table->string('cnpj');
            $table->string('razao_social');
            $table->string('cidade');
            $table->int('id_cliente');
            $table->int('id_reu');
            $table->int('id_advogado');
            $table->int('id_juiz');
            $table->int('id_testemunha1');
            $table->int('id_testemunha2');
            $table->int('id_testemunha3');
            $table->date('data_inicio');                        
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

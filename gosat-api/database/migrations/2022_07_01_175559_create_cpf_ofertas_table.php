<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpfOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpf_ofertas', function (Blueprint $table) {
            $table->id();
            $table->integer('cpf');
//            $table->foreign('cpf')->references('cpf')->on('cpfs');
            $table->integer('id_oferta');
            $table->foreign('id_oferta')->references('id')->on('ofertas');
            $table->integer('valorSolicitado');
            $table->integer('QntParcelaSolicitada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpf_ofertas');
    }
}

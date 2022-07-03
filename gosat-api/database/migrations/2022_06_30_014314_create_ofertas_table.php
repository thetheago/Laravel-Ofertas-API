<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->integer('instituicao_id');
            $table->foreign('instituicao_id')->references('id')->on('instituicoes');
            $table->string('codModalidade');
//            $table->foreign('codModalidade')->references('cod')->on('modalidades');
            $table->integer('QntParcelaMin')->nullable();
            $table->integer('QntParcelaMax')->nullable();
            $table->integer('valorMin')->nullable();
            $table->integer('valorMax')->nullable();
            $table->float('jurosMes',1, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}

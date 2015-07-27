<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionGastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('fecha_vencimineto');
            $table->float('importe');
            $table->integer('id_gasto')->unsigned();
    
            $table->foreign('id_gasto')->references('id')->on('tipo_gastos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gastos');
    }
}

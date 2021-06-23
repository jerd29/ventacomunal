<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JornadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornada', function (Blueprint $table) {
            $table->id('pk_jornada');
            $table->string('nombre_venta');
            $table->dateTime('fecha_cierre', 0);
            $table->integer('created_by')->default('1');
            $table->integer('updated_by')->default('1');
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
        Schema::dropIfExists('jornada');
    }
}

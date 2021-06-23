<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id('pk_venta');

            // $table->string('fk_combo');

            $table->unsignedBigInteger('fk_combo');
            $table->foreign('fk_combo')->references('pk_combo')->on('combo');



            $table->integer('cantidad');
            $table->boolean('mismo_banco');
            $table->decimal('bolivares', 10, 2);
            $table->decimal('dolares', 6, 2);
            $table->string('nombre_comprador');
            $table->integer('numero_referencia');
            $table->unsignedBigInteger('fk_consejo_comunal');
            $table->foreign('fk_consejo_comunal')->references('pk_consejo_comunal')->on('consejo_comunal');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('venta');
    }
}

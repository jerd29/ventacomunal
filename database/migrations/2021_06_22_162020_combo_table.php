<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo', function (Blueprint $table) {
            $table->id('pk_combo');
            $table->string('nombre_combo');
            $table->integer('precio_dolares');
                        
            $table->unsignedBigInteger('fk_jornada');
            $table->foreign('fk_jornada')->references('pk_jornada')->on('jornada');

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
        Schema::dropIfExists('combo');
    }
}


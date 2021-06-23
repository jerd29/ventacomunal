<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambio', function (Blueprint $table) {
            $table->id('pk_cambio');
            $table->string('moneda');
            $table->decimal('tasa', 10, 2);
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
        Schema::dropIfExists('cambio');
    }
}

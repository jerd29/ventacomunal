<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConsejocomunalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consejo_comunal', function (Blueprint $table) {
            $table->id('pk_consejo_comunal');
            $table->string('nombre_consejo_comunal');
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
        Schema::dropIfExists('consejo_comunal');
    }
}

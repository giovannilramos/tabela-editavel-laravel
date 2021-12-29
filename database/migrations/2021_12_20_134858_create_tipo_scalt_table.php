<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoScaltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_scalt', function (Blueprint $table) {
            $table->id();
            $table->enum('nomes', ['SINTOMA', 'CAUSA', 'AÇÃO', 'LOCALIZAÇÃO', 'OBJETIVO']);
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
        Schema::dropIfExists('tipo_scalt');
    }
}

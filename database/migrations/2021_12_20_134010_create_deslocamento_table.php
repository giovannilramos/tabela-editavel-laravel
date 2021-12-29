<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeslocamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deslocamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_planilha')->constrained('planilha')->onDelete('cascade');
            $table->string('inicial')->nullable();
            $table->string('final')->nullable();
            $table->string('t_d')->nullable();
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
        Schema::dropIfExists('deslocamento');
    }
}

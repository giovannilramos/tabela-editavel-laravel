<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescricaoDefeitoReclamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descricao_defeito_reclamado', function (Blueprint $table) {
            $table->id();
            $table->string('desc_defeito_reclam')->nullable();
            $table->foreignId('id_planilha')->constrained('planilha')->onDelete('cascade');;
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
        Schema::dropIfExists('descricao_defeito_reclamado');
    }
}

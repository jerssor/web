<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateHospedajePreguntaFrecuenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedaje_pregunta_frecuente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('hospedaje_id');
            $table->foreign('hospedaje_id')
            ->references('id')
            ->on('hospedajes')
            ->onDelete('cascade');

            $table->unsignedBigInteger('pregunta_frecuente_id');
            $table->foreign('pregunta_frecuente_id')
            ->references('id')
            ->on('preguntas_frecuentes')
            ->onDelete('cascade');
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
        Schema::dropIfExists('hospedaje_pregunta_frecuente');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionHospedajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion_hospedaje', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('habitacion_id');
            $table->foreign('habitacion_id')
            ->references('id')
            ->on('habitaciones')
            ->onDelete('cascade');

            $table->unsignedBigInteger('hospedaje_id');
            $table->foreign('hospedaje_id')
            ->references('id')
            ->on('hospedajes')
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
        Schema::dropIfExists('habitacion_hospedaje');
    }
}

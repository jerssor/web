<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('huesped_id')->nullable();
            $table->foreign('huesped_id')
            ->references('id')
            ->on('huespedes')
            ->onDelete('set null');
            $table->unsignedBigInteger('hospedaje_id')->nullable();
            $table->foreign('hospedaje_id')
            ->references('id')
            ->on('hospedajes')
            ->onDelete('set null');

            $table->unsignedBigInteger('Id_habitacion');
            $table->unsignedBigInteger('Id_pais');
            $table->unsignedBigInteger('Id_ciudad');
            $table->unsignedBigInteger('Id_servicio');
            $table->date('Check-in');
            $table->date('Check-out');

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
        Schema::dropIfExists('reservas');
    }
}

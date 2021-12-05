<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtrosServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros_servicios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Otros_servicios');
            $table->string('Descripcion');
            $table->unsignedBigInteger('precio');
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
        Schema::dropIfExists('otros_servicios');
    }
}

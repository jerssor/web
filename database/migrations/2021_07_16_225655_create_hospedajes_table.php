<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('NIT')->nullable();
            $table->string('Nombre');
            $table->string('slug');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('set null');

            $table->unsignedBigInteger('Telefono')->nullable();
            $table->string('Correo')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('logo')->nullable();
            $table->enum('status',[1,2])->default(1);
            $table->string('Descripcion',500)->nullable();
            $table->unsignedBigInteger('tipo_hospedaje_id')->nullable();
            $table->foreign('tipo_hospedaje_id')
            ->references('id')
            ->on('tipos_hospedajes')
            ->onDelete('set null');
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
        Schema::dropIfExists('hospedajes');
    }
}

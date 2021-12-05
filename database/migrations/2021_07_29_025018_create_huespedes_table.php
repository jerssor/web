<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateHuespedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huespedes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->unsignedBigInteger('Telefono');
            $table->string('correo')->unique();
            $table->unsignedBigInteger('tipo_documento_id')->nullable();
            $table->foreign('tipo_documento_id')
            ->references('id')
            ->on('tipos_documentos')
            ->onDelete('set null');

            $table->unsignedBigInteger('Numero_documento')->unique();
            $table->string('Domicilio')->nullable();

            
            $table->unsignedBigInteger('motivo_viaje_id')->nullable();
            $table->foreign('motivo_viaje_id')
            ->references('id')
            ->on('motivos_viajes')
            ->onDelete('set null');
            
            $table->unsignedBigInteger('origen_id')->nullable();
            $table->foreign('origen_id')
            ->references('id')
            ->on('origenes')
            ->onDelete('set null');

            $table->unsignedBigInteger('destino_id')->nullable();
            $table->foreign('destino_id')
            ->references('id')
            ->on('destinos')
            ->onDelete('set null');

            $table->unsignedBigInteger('sexo_id')->nullable();
            $table->foreign('sexo_id')
            ->references('id')
            ->on('sexos')
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
        Schema::dropIfExists('huespedes');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appoiments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_servicio');
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->unsignedBigInteger('id_empleado');
            $table->enum('estado_cita',['ACTIVA','COMPLETADA','CANCELADA'])->default('ACTIVO');
            $table->unsignedBigInteger('id_prod');


            $table->foreign('id_cliente')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('id_servicio')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('id_empleado')->references('id')->on('workers')->onDelete('cascade');
            $table->foreign('id_prod')->references('id')->on('products')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoiments');
    }
};
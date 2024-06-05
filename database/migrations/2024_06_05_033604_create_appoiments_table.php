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
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_vh');
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->unsignedBigInteger('id_empleado');
            $table->enum('estado_cita',['EN PROCESO','COMPLETADA','CANCELADA'])->default('EN PROCESO');
            $table->unsignedBigInteger('id_prod');


            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_servicio')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('id_empleado')->references('id')->on('workers')->onDelete('cascade');
            $table->foreign('id_prod')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_vh')->references('id')->on('vehicles')->onDelete('cascade');



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

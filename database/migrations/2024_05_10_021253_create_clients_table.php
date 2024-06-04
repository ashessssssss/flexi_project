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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_per');
            $table->date('fecha_registro');
            $table->date('fecha_salida')->nullable();
            $table->enum('estado',['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            $table->foreign('id_per')->references('id')->on('people')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

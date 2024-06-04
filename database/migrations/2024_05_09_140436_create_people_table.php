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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->char('cedula_per',13);
            $table->string('nombre_per');
            $table->string('apellido_per');
            $table->char('sexo_per',1);
            $table->date('fecha_nac_per')->nullable();;
            $table->char('telefono_per',12);
            $table->string('correo_per');
            $table->string('estado_per');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};

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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_per');
            $table->date('fecha_ing_emp');
            $table->date('fecha_sali_emp')->nullable();
            $table->string('estado_emp');
            $table->unsignedBigInteger('id_puesto');
            $table->decimal('sueldo');
            $table->timestamps();

            $table->foreign('id_per')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('id_puesto')->references('id')->on('positions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};

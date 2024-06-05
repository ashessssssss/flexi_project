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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->string('matricula',20);
            $table->unsignedBigInteger('id_marca');
            $table->string('modelo');
            $table->year('año_salida_vh');
            $table->string('color_vh');
            $table->integer('kilometraje');
            $table->integer('cilindros');
            $table->unsignedBigInteger('id_categoria');

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_marca')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categories')->onDelete('cascade');

            
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

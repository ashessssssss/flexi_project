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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_serv');
            $table->unsignedBigInteger('id_tipo_serv');
            $table->text('desc_serv')->nullable();
            $table->float('precio_serv');
            $table->integer('tiempo_estimado');
            $table->enum('estado_serv',['ACTIVO','INACTIVO']);

            $table->foreign('id_tipo_serv')->references('id')->on('type_services')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

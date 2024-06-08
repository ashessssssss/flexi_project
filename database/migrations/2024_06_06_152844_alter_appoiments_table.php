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
        Schema::table('appoiments',function(Blueprint $table){
            $table->unsignedBigInteger('id_prod')->nullable()->change();
            $table->unsignedBigInteger('id_empleado')->nullable()->change();
            $table->enum('estado_cita',['EN PROCESO','COMPLETADA','CANCELADA'])->default('EN PROCESO')->nullable()->change();




        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appoiments',function(Blueprint $table){
            $table->unsignedBigInteger('id_prod');
            $table->unsignedBigInteger('id_empleado');
            $table->enum('estado_cita',['EN PROCESO','COMPLETADA','CANCELADA'])->default('EN PROCESO');




        });
    }
};

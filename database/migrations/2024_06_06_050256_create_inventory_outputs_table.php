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
        Schema::create('inventory_outputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prod');
            $table->date('fecha_salida');
            $table->integer('cantidad_salida');
            $table->float('precio_unitario');
            $table->string('destino',191);
            $table->text('observaciones')->nullable();

            $table->foreign('id_prod')->references('id')->on('products')->onDelete('cascade');







            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_outputs');
    }
};

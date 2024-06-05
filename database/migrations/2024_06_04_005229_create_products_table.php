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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->integer('stock');
            $table->decimal('precio',10,2);
            $table->unsignedBigInteger('id_tipo_prod');
            $table->unsignedBigInteger('id_proveedor');
            $table->enum('estado_prod',['ACTIVO','INACTIVO'])->default('ACTIVO');

            $table->foreign('id_tipo_prod')->references('id')->on('type_products')->onDelete('cascade');
            $table->foreign('id_proveedor')->references('id')->on('providers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

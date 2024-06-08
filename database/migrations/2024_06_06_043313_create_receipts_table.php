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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_cita');
            $table->unsignedBigInteger('id_prod');


            $table->date('fecha_factura');
            $table->time('hora_factura');
            $table->enum('tipo_pago',['Efectivo','Tarjeta','Transferencia']);
            $table->enum('estado',['pagada','pendiente','anulada'])->default('pendiente');
            $table->decimal('descuento_porcentaje')->nullable();
            $table->decimal('descuento_monto')->nullable();
            $table->float('subtotal');
            $table->float('impuesto');
            $table->float('total_factura');

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_empleado')->references('id')->on('workers')->onDelete('cascade');
            $table->foreign('id_prod')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_cita')->references('id')->on('appoiments')->onDelete('cascade');







            












            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};

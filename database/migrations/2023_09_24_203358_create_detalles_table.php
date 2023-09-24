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
        Schema::create('detalles', function (Blueprint $table) {
            $table->BigIncrements('id_detalle');
            $table->integer('cantidad_detalle');
            $table->double('valor_unitario_detalle');
            $table->integer('numero_detalle');
            $table->unsignedBigInteger('id_movimiento');
            $table->foreign('id_movimiento')->references('id_movimiento')->on('movimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};

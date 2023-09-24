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
        Schema::create('producto', function(Blueprint $table){
            $table->bigIncrements('id_movimiento');
            $table->string('tipo_movimiento');
            $table->string('numero_factura_movimiento');
            $table->timestamp('fecha_movimiento', $precision = 0);
            $table->double('total_movimiento', 8, 2);
            $table->double('total_iva_movimiento', 8, 2);
            $table->string('empresa)envio)movimiento');
            $table->foreign('id_persona')->references('id_persona')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};

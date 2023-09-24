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
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto');
            $table->string('descripcion_prodcuto');
            $table->string('saldo_producto');
            $table->double('precio_producto', 8, 2);
            $table->string('folio_producto');
            $table->string('ubicacion_producto');
            $table->string('pais_fabrica_producto');
            $table->integer('iva_producto');
            $table->integer('cant_maxima_producto');
            $table->integer('cant_minima_producto');
            $table->unsignedBigInteger('id_marca');
            $table->unsignedBigInteger('id_unidad_medida');
            $table->unsignedBigInteger('id_detalle');
            $table->unsignedBigInteger('id_presentacion');
            $table->string('comentarios_producto');
            $table->foreign('id_marca')->references('id_marca')->on('marca');
            $table->foreign('id_unidad_medida')->references('id_unidad_medida')->on('unidad_medida');
            $table->foreign('id_presentacion')->references('id_presentacion')->on('presentacions');
            $table->foreign('id_detalle')->references('id_detalle')->on('detalles');
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

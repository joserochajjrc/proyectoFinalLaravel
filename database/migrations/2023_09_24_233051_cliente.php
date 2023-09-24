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
        Schema::create('cliente', function(Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->date('fecha_inicio_cliente');
            $table->foreign('tipo_doc_persona')->references('tipo_doc_persona')->on('tipo_personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::droIfExist('table');
    }
};

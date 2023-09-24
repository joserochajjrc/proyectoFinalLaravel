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
        Schema::create('marca', function (Blueprint $table) {
            $table->bigIncrements('id_marca');
            $table->index('id_marca');
            $table->string('nombre_marca');
            $table->string('pais_origen_marca');
            $table->string('web_marca');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marca');
    }
};

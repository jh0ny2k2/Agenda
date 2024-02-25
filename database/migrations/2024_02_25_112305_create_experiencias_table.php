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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fechaInicio');
            $table->string('fechaTexto');
            $table->text('descripcionCorta');
            $table->decimal('precioPorPersona');
            $table->string('linkWeb');
            $table->text('descripcionLarga');
            $table->unsignedBigInteger('empresaId');
            $table->foreign('empresaId')->references('id')->on('empresas');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};

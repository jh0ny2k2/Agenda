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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->date("fecha");
            $table->time("hora");
            $table->text('descripcion');
            $table->string('ciudad');
            $table->string('direccion');
            $table->enum('estado', ['creado', 'cancelado' , 'terminado']);
            $table->integer('aforoMax');
            $table->enum('tipo', ['online', 'presencial']);
            $table->integer('numMaxEntradasPorPersona');
            $table->unsignedBigInteger('categoriaId');
            $table->foreign('categoriaId')->references('id')->on('categorias');
            $table->string('imagen')->nullable();
            $table->unsignedBigInteger('usuarioId');
            $table->foreign('usuarioId')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};

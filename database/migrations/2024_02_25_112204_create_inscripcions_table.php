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
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('eventoId');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('eventoId')->references('id')->on('eventos');
            $table->integer('numEntradas');
            $table->enum('estado', ['recibida', 'confirmada', 'cancelada']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcions');
    }
};

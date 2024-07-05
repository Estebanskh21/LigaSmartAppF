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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('tema_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};

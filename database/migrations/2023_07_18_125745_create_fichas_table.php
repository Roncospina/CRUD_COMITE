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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('no_ficha');
            $table->date('fecha_inicio_lectiva');
            $table->date('fecha_fin_lectiva');
            $table->date('fecha_inicio_productiva');
            $table->date('fecha_fin_productiva');
            $table->string('modalidad', 45);
            $table->string('jornada', 45);
            $table->unsignedBigInteger('gru_programa')->nullable();
            $table->foreign('gru_programa')->references('id')->on('programa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};

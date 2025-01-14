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
        Schema::create('faltadocentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('falta_id');
            $table->unsignedBigInteger('mes_id');
            $table->string('descripcion');
            $table->string('fecha');
            $table->string('acciones');

            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('falta_id')->references('id')->on('faltas')->onDelete('cascade');
            $table->foreign('mes_id')->references('id')->on('meses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faltadocentes');
    }
};

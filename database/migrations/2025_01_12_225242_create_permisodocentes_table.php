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
        Schema::create('permisodocentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('permiso_id');
            $table->unsignedBigInteger('mes_id');
            $table->string('descripcion');
            $table->string('dia1');
            $table->string('dia2');
            $table->string('dia3');
            $table->string('fecha');
            $table->string('acciones');

            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade');
            $table->foreign('mes_id')->references('id')->on('meses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisodocentes');
    }
};

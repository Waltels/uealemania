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
        Schema::create('diplomados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->string('ndoc');
            $table->string('descripcion');
            $table->string('emisor');
            $table->string('doc_path');
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomados');
    }
};

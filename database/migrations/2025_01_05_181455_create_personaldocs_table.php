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
        Schema::create('personaldocs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('documentofile_id');
            $table->string('ndoc');
            $table->string('doc_path');
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('documentofile_id')->references('id')->on('documentofiles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personaldocs');
    }
};

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
        Schema::create('document_courses', function (Blueprint $table) {
            $table->id('id_document');
            $table->unsignedBigInteger('id_course');
            $table->string('document_path');
            $table->string('ext');
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('id_course')->references('id_course')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_courses');
    }
};

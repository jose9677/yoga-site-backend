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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id_document');
            $table->string('email');
            $table->string('document_path');
            $table->string('ext');
            $table->boolean('active');
            $table->unsignedBigInteger('id_document_type');
            $table->unsignedBigInteger('id_course')->nullable();
            $table->timestamps();

            $table->foreign('id_document_type')->references('id_document_type')->on('documents_type');
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('id_course')->references('id_course')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

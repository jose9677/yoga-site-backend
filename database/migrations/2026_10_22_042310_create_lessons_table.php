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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('id_lesson');
            $table->unsignedBigInteger('id_module');
            $table->string('title');
            $table->string('content_url')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamps();

            $table->foreign('id_module')->references('id_module')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};

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
        Schema::create('lessons_users', function (Blueprint $table) {
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->foreignId('id_lesson')
                  ->constrained('lessons', 'id_lesson')
                  ->onUpdate('cascade');

            $table->string('email');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');

            $table->primary(['id_lesson', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons_users');
    }
};

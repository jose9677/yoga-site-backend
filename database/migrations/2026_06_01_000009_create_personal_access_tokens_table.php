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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            //$table->morphs('tokenable');
            //$table->string('tokenable_type');
            //$table->unsignedBigInteger('tokenable_id'); // Si identity es un número entero
            // Definición manual de las columnas polimórficas para soportar 'email' (string)
            $table->string('tokenable_type');
            $table->string('tokenable_id');
            $table->index(['tokenable_type', 'tokenable_id']); // Índice compuesto para rendimiento
            // (La línea original solía ser $table->morphs('tokenable'); que crea BIGINT)
            $table->text('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};

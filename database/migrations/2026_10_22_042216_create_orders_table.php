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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->integer('id_transaction');
            $table->float('total');
            $table->unsignedBigInteger('id_status');
            $table->string('email');
            $table->timestamps();

            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->foreign('id_status')->references('id_status')->on('orders_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

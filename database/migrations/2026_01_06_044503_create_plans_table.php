<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('plans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('premium_app_id')->constrained('premium_apps')->onDelete('cascade');
        $table->string('durasi'); // Contoh: 1 Bulan
        $table->integer('harga'); // Contoh: 50000
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};

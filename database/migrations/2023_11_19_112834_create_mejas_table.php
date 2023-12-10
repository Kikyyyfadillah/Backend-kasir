<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('meja', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_meja');
            $table->integer('kapasitas');
            $table->string('status', 225);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('meja');
    }
};

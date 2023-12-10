<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jenis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis', 225);
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('jenis');
    }
};

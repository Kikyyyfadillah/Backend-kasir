<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu', 50);
            $table->double('harga');
            $table->string('image');
            $table->text('deskripsi');
            $table->unsignedBigInteger('jenis_id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};

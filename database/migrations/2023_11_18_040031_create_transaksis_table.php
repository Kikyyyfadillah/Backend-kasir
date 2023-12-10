<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->double('total_harga');
            $table->enum('metode_pembayaran', ["transfer", "cash"]);
            $table->text('keterangan');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};

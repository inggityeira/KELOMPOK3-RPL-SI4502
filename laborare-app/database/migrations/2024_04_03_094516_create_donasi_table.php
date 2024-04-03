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
        Schema::create('donasi', function (Blueprint $table) {
            $table->id('id_donasi');
            $table->string('nama_donasi');
            $table->decimal('target_donasi', 10, 2);
            $table->string('sampul_donasi');
            $table->string('deskripsi_donasi');
            $table->enum('status_donasi', ['Belum', 'Berjalan', 'Selesai']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi');
    }
};

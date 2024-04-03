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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->string('nama_kegiatan');
            $table->string('deskripsi_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->enum('kategori_kegiatan', ['Pendidikan', 'Lingkungan', 'Sosial', 'Kesehatan']);
            $table->string('sampul_kegiatan');
            $table->enum('status_kegiatan', ['Belum', 'Berlajan', 'Selesai']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};

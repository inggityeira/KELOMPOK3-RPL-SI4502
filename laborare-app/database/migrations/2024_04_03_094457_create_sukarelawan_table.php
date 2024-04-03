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
        Schema::create('sukarelawan', function (Blueprint $table) {
            $table->id('id_sukarelawan');
            $table->unsignedBigInteger('id_user');
            $table->bigInteger('notelpon_sukarelawan');
            $table->bigInteger('kontak_wali');
            $table->string('pas_foto');
            $table->string('alamat_sukarelawan');
            $table->string('motivasi');
            $table->unsignedBigInteger('id_kegiatan');
            $table->enum('status_sukarelawan', ['Tidak Diterima', 'Diterima', 'Selesai']);
            $table->string('sertifikat');
            $table->integer('poin');

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('kegiatan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sukarelawan');
    }
};

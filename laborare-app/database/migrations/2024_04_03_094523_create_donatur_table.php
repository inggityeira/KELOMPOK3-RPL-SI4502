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
        Schema::create('donatur', function (Blueprint $table) {
            $table->id('id_donatur');
            $table->unsignedBigInteger('id_user');
            $table->string('pesan');
            $table->decimal('nominal', 10, 2);
            $table->unsignedBigInteger('id_donasi');

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_donasi')->references('id_donasi')->on('donasi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donatur');
    }
};

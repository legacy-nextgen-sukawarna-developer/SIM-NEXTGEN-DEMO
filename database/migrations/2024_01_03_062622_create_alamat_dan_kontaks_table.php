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
        Schema::create('alamat_dan_kontaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('alamat_lengkap', 50)->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->string('desa_kelurahan', 30)->nullable();
            $table->string('kecamatan', 30)->nullable();
            $table->string('kabupaten_kota', 30)->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('nomor_telepon', 15)->nullable();
            $table->string('nomor_whatsapp', 15)->nullable();
            $table->string('id_line', 20);
            $table->string('username_instagram', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_dan_kontaks');
    }
};

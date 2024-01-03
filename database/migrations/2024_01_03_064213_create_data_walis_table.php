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
        Schema::create('data_walis', function (Blueprint $table) {
            $table->id();
            // user id
            $table->unsignedBigInteger('user_id');
            $table->string('nama_wali', 50)->nullable();
            $table->string('pekerjaan_wali', 50)->nullable();
            $table->integer('hubungan_wali')->nullable()->default(0);
            $table->string('nomor_telepon_wali', 15)->nullable();
            $table->string('nomor_whatsapp_wali', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_walis');
    }
};

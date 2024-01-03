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
        Schema::create('data_ortus', function (Blueprint $table) {
            $table->id();
            // user id
            $table->unsignedBigInteger('user_id');
            $table->string('nama_ayah', 50)->nullable();
            $table->string('pekerjaan_ayah', 50)->nullable();
            $table->integer('hubungan_ayah')->nullable()->default(0);
            $table->string('nomor_telepon_ayah', 15)->nullable();
            $table->string('nomor_whatsapp_ayah', 15)->nullable();
            $table->string('nama_ibu', 50)->nullable();
            $table->string('pekerjaan_ibu', 50)->nullable();
            $table->integer('hubungan_ibu')->nullable()->default(0);
            $table->string('nomor_telepon_ibu', 15)->nullable();
            $table->string('nomor_whatsapp_ibu', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ortus');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // user id
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('no_jemaat')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('nama_panggilan', 50)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('jenis_kelamin')->nullable()->default(0);
            $table->integer('golongan_darah')->nullable()->default(0);
            $table->string('hobi', 50)->nullable();
            $table->string('keahlian', 50)->nullable();
            $table->string('sekolah', 50)->nullable();
            $table->integer('status_sekolah')->nullable()->default(0);
            $table->string('foto_profil')->nullable();
            $table->integer('baptis_selam')->nullable()->default(0);
            $table->integer('kom_100')->nullable()->default(0);
            $table->integer('gabung_komsel')->nullable()->default(0);
            $table->string('nama_kakak_komunitas_sel', 50)->nullable();
            $table->string('email')->unique();
            $table->integer('aktivasi_member')->nullable()->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

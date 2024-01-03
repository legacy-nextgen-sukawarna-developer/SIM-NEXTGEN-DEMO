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
        Schema::create('persembahans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('pecahan_1000');
            $table->integer('pecahan_2000');
            $table->integer('pecahan_5000');
            $table->integer('pecahan_10000');
            $table->integer('pecahan_20000');
            $table->integer('pecahan_50000');
            $table->integer('pecahan_75000');
            $table->integer('pecahan_100000');
            $table->integer('total');
            $table->string('deskripsi', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persembahans');
    }
};

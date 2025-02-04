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
        Schema::create('i_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('jurusan');
            $table->string('alamat_sekolah');
            $table->integer('tahun_lulus');
            $table->string('no_ijazah')->unique();
            $table->unsignedBigInteger('iPribadi_id');
            $table->foreign('iPribadi_id')->references('id')->on('i_pribadi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_sekolah');
    }
};

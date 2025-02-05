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
        Schema::create('i_pribadi', function (Blueprint $table) {
            $table->id();
            $table->integer('no_register')->unique();
            $table->string('nama_lengkap');
            $table->integer('gelombang');
            $table->string('tempat_lahir');
            $table->string('jalan_dusun');
            $table->string('desa_kelurahan');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('agama');
            $table->integer('no_kk');
            $table->string('email')->unique();
            $table->string('status');
            $table->string('golongan_darah');
            $table->string('no_wa')->unique();
            $table->string('kewarganegaraan');
            $table->unsignedBigInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('restrict');
            $table->unsignedBigInteger('jurusan2_id');
            $table->foreign('jurusan2_id')->references('id')->on('jurusan2')->onDelete('restrict');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_pribadi');
    }
};

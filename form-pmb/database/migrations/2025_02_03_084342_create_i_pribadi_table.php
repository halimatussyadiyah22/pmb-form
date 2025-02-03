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
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('jalan_dusun');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('agama');
            $table->integer('no_kk');
            $table->string('email')->unique();
            $table->string('status');
            $table->integer('no_wa')->unique();
            $table->string('kewarganegaraan');
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

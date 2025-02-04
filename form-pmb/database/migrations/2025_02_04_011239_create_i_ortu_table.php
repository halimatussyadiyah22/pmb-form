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
        Schema::create('i_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->integer('umur_ayah');
            $table->string('pendidikan_ayah');
            $table->string('status_ayah');
            $table->string('pekerjaan_ayah');
            $table->integer('penghasilan_ayah');
            $table->string('no_wa_ayah')->unique();
            $table->string('nama_ibu');
            $table->integer('umur_ibu');
            $table->string('pendidikan_ibu');
            $table->string('status_ibu');
            $table->string('pekerjaan_ibu');
            $table->integer('penghasilan_ibu');
            $table->string('no_wa_ibu')->unique();
            $table->string('alamat_ortu');
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
        Schema::dropIfExists('i_ortu');
    }
};

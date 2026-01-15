<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lomba');
            $table->string('tingkat'); // sekolah, kecamatan, kota, provinsi, nasional, internasional
            $table->string('juara');
            $table->string('nama_siswa')->nullable();
            $table->string('kelas')->nullable();
            $table->string('pembimbing')->nullable();
            $table->date('tanggal');
            $table->string('penyelenggara')->nullable();
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};

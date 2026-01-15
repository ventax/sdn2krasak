<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran')->unique();
            $table->string('nama_lengkap');
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('agama');
            $table->text('alamat');
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('asal_sekolah');
            $table->string('tahun_lulus')->nullable();
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('telepon_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('telepon_ibu')->nullable();
            $table->text('alamat_orangtua')->nullable();
            $table->string('foto')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('akta_lahir')->nullable();
            $table->string('ijazah')->nullable();
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdb');
    }
};

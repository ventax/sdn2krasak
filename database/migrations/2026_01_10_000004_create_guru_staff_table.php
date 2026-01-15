<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guru_staff', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jabatan');
            $table->string('mata_pelajaran')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('status', ['guru', 'staff', 'kepala_sekolah'])->default('guru');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guru_staff');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';

    protected $fillable = [
        'nama_lomba',
        'tingkat',
        'juara',
        'nama_siswa',
        'kelas',
        'pembimbing',
        'tanggal',
        'penyelenggara',
        'gambar',
        'deskripsi'
    ];

    protected $casts = [
        'tanggal' => 'date'
    ];
}

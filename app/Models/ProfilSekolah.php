<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    use HasFactory;

    protected $table = 'profil_sekolah';

    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'tentang',
        'visi',
        'misi',
        'sejarah',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'telepon',
        'email',
        'website',
        'akreditasi',
        'kepala_sekolah',
        'logo',
        'foto_sekolah'
    ];
}

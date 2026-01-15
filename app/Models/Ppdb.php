<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdb';

    protected $fillable = [
        'no_pendaftaran',
        'nama_lengkap',
        'nisn',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'telepon',
        'email',
        'asal_sekolah',
        'tahun_lulus',
        'nama_ayah',
        'pekerjaan_ayah',
        'telepon_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'telepon_ibu',
        'alamat_orangtua',
        'foto',
        'kartu_keluarga',
        'akta_lahir',
        'ijazah',
        'status',
        'catatan'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ppdb) {
            if (empty($ppdb->no_pendaftaran)) {
                $ppdb->no_pendaftaran = 'PPDB-' . date('Y') . '-' . str_pad(Ppdb::count() + 1, 4, '0', STR_PAD_LEFT);
            }
        });
    }
}

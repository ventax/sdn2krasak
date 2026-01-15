<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruStaff extends Model
{
    use HasFactory;

    protected $table = 'guru_staff';

    protected $fillable = [
        'nip',
        'nama',
        'foto',
        'jenis_kelamin',
        'jabatan',
        'mata_pelajaran',
        'pendidikan_terakhir',
        'email',
        'telepon',
        'alamat',
        'status',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}

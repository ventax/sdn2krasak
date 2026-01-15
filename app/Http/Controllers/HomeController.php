<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ProfilSekolah;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        $berita = Berita::where('is_published', true)->latest()->take(6)->get();
        $pengumuman = Pengumuman::where('is_active', true)
            ->whereDate('tanggal_mulai', '<=', now())
            ->whereDate('tanggal_selesai', '>=', now())
            ->orWhereNull('tanggal_selesai')
            ->latest()
            ->take(5)
            ->get();
        $prestasi = Prestasi::latest()->take(6)->get();
        $galeri = Galeri::where('tipe', 'foto')->latest()->take(6)->get();

        // Stats
        $stats = [
            'total_guru' => \App\Models\GuruStaff::where('jabatan', 'Guru')->count(),
            'total_siswa' => 500, // Dummy data, bisa diganti dengan model siswa nanti
            'total_prestasi' => Prestasi::count(),
        ];

        return view('welcome', compact('profil', 'berita', 'pengumuman', 'prestasi', 'galeri', 'stats'));
    }
}

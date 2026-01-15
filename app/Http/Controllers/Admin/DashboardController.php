<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Ppdb;
use App\Models\GuruStaff;
use App\Models\Pengumuman;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_berita' => Berita::count(),
            'total_ppdb' => Ppdb::count(),
            'ppdb_pending' => Ppdb::where('status', 'pending')->count(),
            'total_guru' => GuruStaff::where('status', 'guru')->count(),
            'pengumuman_aktif' => Pengumuman::where('is_active', true)->count()
        ];

        $berita_terbaru = Berita::with('user')->latest()->take(5)->get();
        $ppdb_terbaru = Ppdb::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'berita_terbaru', 'ppdb_terbaru'));
    }
}

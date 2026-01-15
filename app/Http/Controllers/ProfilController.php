<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use App\Models\GuruStaff;
use App\Models\Fasilitas;
use App\Models\Ekstrakurikuler;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('profil.index', compact('profil'));
    }

    public function visiMisi()
    {
        $profil = ProfilSekolah::first();
        return view('profil.visi-misi', compact('profil'));
    }

    public function sejarah()
    {
        $profil = ProfilSekolah::first();
        return view('profil.sejarah', compact('profil'));
    }

    public function guru()
    {
        $guru = GuruStaff::where('status', 'guru')->where('is_active', true)->get();
        $kepalaSekolah = GuruStaff::where('status', 'kepala_sekolah')->where('is_active', true)->first();
        return view('profil.guru', compact('guru', 'kepalaSekolah'));
    }

    public function staff()
    {
        $staff = GuruStaff::where('status', 'staff')->where('is_active', true)->get();
        return view('profil.staff', compact('staff'));
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('profil.fasilitas', compact('fasilitas'));
    }

    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::where('is_active', true)->get();
        return view('profil.ekstrakurikuler', compact('ekstrakurikuler'));
    }
}

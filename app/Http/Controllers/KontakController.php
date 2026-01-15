<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('kontak.index', compact('profil'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'subjek' => 'required|max:255',
            'pesan' => 'required'
        ]);

        // Simpan log atau kirim email
        // Mail::to('admin@sekolah.com')->send(new ContactMail($validated));

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}

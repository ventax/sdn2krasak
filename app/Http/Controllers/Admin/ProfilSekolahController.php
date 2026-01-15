<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('admin.profil-sekolah.index', compact('profil'));
    }

    public function edit()
    {
        $profil = ProfilSekolah::firstOrCreate([]);
        return view('admin.profil-sekolah.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama_sekolah' => 'required|max:255',
            'npsn' => 'nullable|max:50',
            'tentang' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'sejarah' => 'nullable',
            'alamat' => 'required',
            'kelurahan' => 'nullable|max:100',
            'kecamatan' => 'nullable|max:100',
            'kota' => 'required|max:100',
            'provinsi' => 'required|max:100',
            'kode_pos' => 'nullable|max:10',
            'telepon' => 'nullable|max:20',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'akreditasi' => 'nullable|max:5',
            'kepala_sekolah' => 'nullable|max:255',
            'logo' => 'nullable|image|max:2048',
            'foto_sekolah' => 'nullable|image|max:2048'
        ]);

        $profil = ProfilSekolah::first();

        if ($request->hasFile('logo')) {
            if ($profil && $profil->logo) {
                Storage::disk('public')->delete($profil->logo);
            }
            $validated['logo'] = $request->file('logo')->store('profil', 'public');
        }

        if ($request->hasFile('foto_sekolah')) {
            if ($profil && $profil->foto_sekolah) {
                Storage::disk('public')->delete($profil->foto_sekolah);
            }
            $validated['foto_sekolah'] = $request->file('foto_sekolah')->store('profil', 'public');
        }

        if ($profil) {
            $profil->update($validated);
        } else {
            ProfilSekolah::create($validated);
        }

        return redirect()->route('admin.profil-sekolah.index')->with('success', 'Profil sekolah berhasil diupdate');
    }
}

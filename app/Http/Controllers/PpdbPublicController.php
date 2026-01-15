<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbPublicController extends Controller
{
    public function index()
    {
        return view('ppdb.index');
    }

    public function create()
    {
        return view('ppdb.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nisn' => 'nullable|max:20',
            'nik' => 'nullable|max:20',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|max:50',
            'alamat' => 'required',
            'kelurahan' => 'nullable|max:100',
            'kecamatan' => 'nullable|max:100',
            'kota' => 'nullable|max:100',
            'provinsi' => 'nullable|max:100',
            'kode_pos' => 'nullable|max:10',
            'telepon' => 'nullable|max:20',
            'email' => 'nullable|email',
            'asal_sekolah' => 'required|max:255',
            'tahun_lulus' => 'nullable|max:4',
            'nama_ayah' => 'required|max:255',
            'pekerjaan_ayah' => 'nullable|max:100',
            'telepon_ayah' => 'nullable|max:20',
            'nama_ibu' => 'required|max:255',
            'pekerjaan_ibu' => 'nullable|max:100',
            'telepon_ibu' => 'nullable|max:20',
            'alamat_orangtua' => 'nullable',
            'foto' => 'required|image|max:2048',
            'kartu_keluarga' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'akta_lahir' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('ppdb/foto', 'public');
        }
        if ($request->hasFile('kartu_keluarga')) {
            $validated['kartu_keluarga'] = $request->file('kartu_keluarga')->store('ppdb/dokumen', 'public');
        }
        if ($request->hasFile('akta_lahir')) {
            $validated['akta_lahir'] = $request->file('akta_lahir')->store('ppdb/dokumen', 'public');
        }
        if ($request->hasFile('ijazah')) {
            $validated['ijazah'] = $request->file('ijazah')->store('ppdb/dokumen', 'public');
        }

        $ppdb = Ppdb::create($validated);

        return redirect()->route('ppdb.success', $ppdb->no_pendaftaran)
            ->with('success', 'Pendaftaran berhasil! Nomor pendaftaran Anda: ' . $ppdb->no_pendaftaran);
    }

    public function success($noPendaftaran)
    {
        $ppdb = Ppdb::where('no_pendaftaran', $noPendaftaran)->firstOrFail();
        return view('ppdb.success', compact('ppdb'));
    }

    public function cek()
    {
        return view('ppdb.cek');
    }

    public function checkStatus(Request $request)
    {
        $request->validate([
            'no_pendaftaran' => 'required'
        ]);

        $ppdb = Ppdb::where('no_pendaftaran', $request->no_pendaftaran)->first();

        if (!$ppdb) {
            return back()->with('error', 'Nomor pendaftaran tidak ditemukan');
        }

        return view('ppdb.status', compact('ppdb'));
    }
}

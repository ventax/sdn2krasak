<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KalenderAkademik;
use Illuminate\Http\Request;

class KalenderAkademikController extends Controller
{
    public function index()
    {
        $kalender = KalenderAkademik::latest()->paginate(10);
        return view('admin.kalender-akademik.index', compact('kalender'));
    }

    public function create()
    {
        return view('admin.kalender-akademik.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'kategori' => 'required|max:100',
            'warna' => 'nullable|max:7'
        ]);

        KalenderAkademik::create($validated);

        return redirect()->route('admin.kalender-akademik.index')->with('success', 'Kalender akademik berhasil ditambahkan');
    }

    public function edit(KalenderAkademik $kalenderAkademik)
    {
        return view('admin.kalender-akademik.edit', compact('kalenderAkademik'));
    }

    public function update(Request $request, KalenderAkademik $kalenderAkademik)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'kategori' => 'required|max:100',
            'warna' => 'nullable|max:7'
        ]);

        $kalenderAkademik->update($validated);

        return redirect()->route('admin.kalender-akademik.index')->with('success', 'Kalender akademik berhasil diupdate');
    }

    public function destroy(KalenderAkademik $kalenderAkademik)
    {
        $kalenderAkademik->delete();
        return redirect()->route('admin.kalender-akademik.index')->with('success', 'Kalender akademik berhasil dihapus');
    }
}

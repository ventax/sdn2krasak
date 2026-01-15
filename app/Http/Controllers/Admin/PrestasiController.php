<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::latest()->paginate(10);
        return view('admin.prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lomba' => 'required|max:255',
            'tingkat' => 'required|max:100',
            'juara' => 'required|max:100',
            'nama_siswa' => 'nullable|max:255',
            'kelas' => 'nullable|max:50',
            'pembimbing' => 'nullable|max:255',
            'tanggal' => 'required|date',
            'penyelenggara' => 'nullable|max:255',
            'gambar' => 'nullable|image|max:2048',
            'deskripsi' => 'nullable'
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        Prestasi::create($validated);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil ditambahkan');
    }

    public function edit(Prestasi $prestasi)
    {
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, Prestasi $prestasi)
    {
        $validated = $request->validate([
            'nama_lomba' => 'required|max:255',
            'tingkat' => 'required|max:100',
            'juara' => 'required|max:100',
            'nama_siswa' => 'nullable|max:255',
            'kelas' => 'nullable|max:50',
            'pembimbing' => 'nullable|max:255',
            'tanggal' => 'required|date',
            'penyelenggara' => 'nullable|max:255',
            'gambar' => 'nullable|image|max:2048',
            'deskripsi' => 'nullable'
        ]);

        if ($request->hasFile('gambar')) {
            if ($prestasi->gambar) {
                Storage::disk('public')->delete($prestasi->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        $prestasi->update($validated);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil diupdate');
    }

    public function destroy(Prestasi $prestasi)
    {
        if ($prestasi->gambar) {
            Storage::disk('public')->delete($prestasi->gambar);
        }

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil dihapus');
    }
}

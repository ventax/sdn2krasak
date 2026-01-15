<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(10);
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required|in:baik,rusak ringan,rusak berat'
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        Fasilitas::create($validated);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required|in:baik,rusak ringan,rusak berat'
        ]);

        if ($request->hasFile('gambar')) {
            if ($fasilitas->gambar) {
                Storage::disk('public')->delete($fasilitas->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        $fasilitas->update($validated);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil diupdate');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        if ($fasilitas->gambar) {
            Storage::disk('public')->delete($fasilitas->gambar);
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil dihapus');
    }
}

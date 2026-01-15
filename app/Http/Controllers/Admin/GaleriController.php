<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(12);
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'tipe' => 'required|in:foto,video',
            'file' => 'required_if:tipe,foto|nullable|image|max:5120',
            'video_url' => 'required_if:tipe,video|nullable|url',
            'kategori' => 'nullable|max:100'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('galeri', 'public');
        }

        Galeri::create($validated);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'tipe' => 'required|in:foto,video',
            'file' => 'nullable|image|max:5120',
            'video_url' => 'required_if:tipe,video|nullable|url',
            'kategori' => 'nullable|max:100'
        ]);

        if ($request->hasFile('file')) {
            if ($galeri->file) {
                Storage::disk('public')->delete($galeri->file);
            }
            $validated['file'] = $request->file('file')->store('galeri', 'public');
        }

        $galeri->update($validated);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diupdate');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->file) {
            Storage::disk('public')->delete($galeri->file);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus');
    }
}

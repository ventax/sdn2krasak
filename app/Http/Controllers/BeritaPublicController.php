<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaPublicController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::where('is_published', true);

        if ($request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->search) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $berita = $query->latest()->paginate(12);

        return view('berita.index', compact('berita'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->where('is_published', true)->firstOrFail();

        // Increment views
        $berita->increment('views');

        $beritaLainnya = Berita::where('is_published', true)
            ->where('id', '!=', $berita->id)
            ->latest()
            ->take(4)
            ->get();

        return view('berita.show', compact('berita', 'beritaLainnya'));
    }
}

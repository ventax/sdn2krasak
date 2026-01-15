<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriPublicController extends Controller
{
    public function index(Request $request)
    {
        $query = Galeri::query();

        if ($request->tipe) {
            $query->where('tipe', $request->tipe);
        }

        if ($request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        $galeri = $query->latest()->paginate(12);

        return view('galeri.index', compact('galeri'));
    }

    public function show(Galeri $galeri)
    {
        return view('galeri.show', compact('galeri'));
    }
}

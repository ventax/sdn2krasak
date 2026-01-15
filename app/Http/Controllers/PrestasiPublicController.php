<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiPublicController extends Controller
{
    public function index(Request $request)
    {
        $query = Prestasi::query();

        if ($request->tingkat) {
            $query->where('tingkat', $request->tingkat);
        }

        $prestasi = $query->latest('tanggal')->paginate(12);

        return view('prestasi.index', compact('prestasi'));
    }
}

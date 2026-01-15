<?php

namespace App\Http\Controllers;

use App\Models\KalenderAkademik;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index()
    {
        $kalender = KalenderAkademik::orderBy('tanggal_mulai', 'asc')->get();
        return view('kalender.index', compact('kalender'));
    }
}

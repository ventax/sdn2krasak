<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdb = Ppdb::latest()->paginate(10);
        return view('admin.ppdb.index', compact('ppdb'));
    }

    public function show(Ppdb $ppdb)
    {
        return view('admin.ppdb.show', compact('ppdb'));
    }

    public function edit(Ppdb $ppdb)
    {
        return view('admin.ppdb.edit', compact('ppdb'));
    }

    public function update(Request $request, Ppdb $ppdb)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,diterima,ditolak',
            'catatan' => 'nullable'
        ]);

        $ppdb->update($validated);

        return redirect()->route('admin.ppdb.index')->with('success', 'Status pendaftaran berhasil diupdate');
    }

    public function destroy(Ppdb $ppdb)
    {
        if ($ppdb->foto) {
            Storage::disk('public')->delete($ppdb->foto);
        }
        if ($ppdb->kartu_keluarga) {
            Storage::disk('public')->delete($ppdb->kartu_keluarga);
        }
        if ($ppdb->akta_lahir) {
            Storage::disk('public')->delete($ppdb->akta_lahir);
        }
        if ($ppdb->ijazah) {
            Storage::disk('public')->delete($ppdb->ijazah);
        }

        $ppdb->delete();

        return redirect()->route('admin.ppdb.index')->with('success', 'Data pendaftaran berhasil dihapus');
    }
}

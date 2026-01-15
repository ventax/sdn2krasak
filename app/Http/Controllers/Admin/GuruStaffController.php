<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuruStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruStaffController extends Controller
{
    public function index()
    {
        $guruStaff = GuruStaff::latest()->paginate(10);
        return view('admin.guru-staff.index', compact('guruStaff'));
    }

    public function create()
    {
        return view('admin.guru-staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'nullable|max:50',
            'nama' => 'required|max:255',
            'foto' => 'nullable|image|max:2048',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|max:255',
            'mata_pelajaran' => 'nullable|max:255',
            'pendidikan_terakhir' => 'nullable|max:100',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|max:20',
            'alamat' => 'nullable',
            'status' => 'required|in:guru,staff,kepala_sekolah',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('guru-staff', 'public');
        }

        GuruStaff::create($validated);

        return redirect()->route('admin.guru-staff.index')->with('success', 'Data Guru/Staff berhasil ditambahkan');
    }

    public function edit(GuruStaff $guruStaff)
    {
        return view('admin.guru-staff.edit', compact('guruStaff'));
    }

    public function update(Request $request, GuruStaff $guruStaff)
    {
        $validated = $request->validate([
            'nip' => 'nullable|max:50',
            'nama' => 'required|max:255',
            'foto' => 'nullable|image|max:2048',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|max:255',
            'mata_pelajaran' => 'nullable|max:255',
            'pendidikan_terakhir' => 'nullable|max:100',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|max:20',
            'alamat' => 'nullable',
            'status' => 'required|in:guru,staff,kepala_sekolah',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('foto')) {
            if ($guruStaff->foto) {
                Storage::disk('public')->delete($guruStaff->foto);
            }
            $validated['foto'] = $request->file('foto')->store('guru-staff', 'public');
        }

        $guruStaff->update($validated);

        return redirect()->route('admin.guru-staff.index')->with('success', 'Data Guru/Staff berhasil diupdate');
    }

    public function destroy(GuruStaff $guruStaff)
    {
        if ($guruStaff->foto) {
            Storage::disk('public')->delete($guruStaff->foto);
        }

        $guruStaff->delete();

        return redirect()->route('admin.guru-staff.index')->with('success', 'Data Guru/Staff berhasil dihapus');
    }
}

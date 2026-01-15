<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::latest()->paginate(10);
        return view('admin.downloads.index', compact('downloads'));
    }

    public function create()
    {
        return view('admin.downloads.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'file' => 'required|file|max:10240',
            'kategori' => 'required|max:100'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('downloads', 'public');
        }

        Download::create($validated);

        return redirect()->route('admin.downloads.index')->with('success', 'File download berhasil ditambahkan');
    }

    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    public function update(Request $request, Download $download)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'file' => 'nullable|file|max:10240',
            'kategori' => 'required|max:100'
        ]);

        if ($request->hasFile('file')) {
            if ($download->file) {
                Storage::disk('public')->delete($download->file);
            }
            $validated['file'] = $request->file('file')->store('downloads', 'public');
        }

        $download->update($validated);

        return redirect()->route('admin.downloads.index')->with('success', 'File download berhasil diupdate');
    }

    public function destroy(Download $download)
    {
        if ($download->file) {
            Storage::disk('public')->delete($download->file);
        }

        $download->delete();

        return redirect()->route('admin.downloads.index')->with('success', 'File download berhasil dihapus');
    }
}

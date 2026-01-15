<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadPublicController extends Controller
{
    public function index(Request $request)
    {
        $query = Download::query();

        if ($request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        $downloads = $query->latest()->paginate(12);

        return view('downloads.index', compact('downloads'));
    }

    public function download(Download $download)
    {
        $download->increment('download_count');

        return Storage::disk('public')->download($download->file);
    }
}

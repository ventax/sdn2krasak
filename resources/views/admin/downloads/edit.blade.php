@extends('layouts.admin')

@section('page-title', 'Edit File Download')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit File Download</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.downloads.update', $download) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $download->judul) }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('judul')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi', $download->deskripsi) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori', $download->kategori) }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">File</label>
                @if ($download->file_path)
                    <div class="mb-2 p-3 bg-gray-50 rounded border">
                        <p class="text-sm text-gray-600">File saat ini:</p>
                        <a href="{{ asset('storage/' . $download->file_path) }}" target="_blank"
                            class="text-blue-600 hover:text-blue-800 flex items-center mt-1">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" />
                            </svg>
                            {{ basename($download->file_path) }}
                        </a>
                    </div>
                @endif
                <input type="file" name="file_path" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip,.rar"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti file</p>
                @error('file_path')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Update
                </button>
                <a href="{{ route('admin.downloads.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

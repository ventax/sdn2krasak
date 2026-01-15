@extends('layouts.admin')

@section('page-title', 'Edit Galeri')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Galeri</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.galeri.update', $galeri) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('judul')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tipe</label>
                    <select name="tipe" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="foto" {{ $galeri->tipe == 'foto' ? 'selected' : '' }}>Foto</option>
                        <option value="video" {{ $galeri->tipe == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kategori</label>
                    <input type="text" name="kategori" value="{{ old('kategori', $galeri->kategori) }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">File Saat Ini</label>
                @if ($galeri->tipe == 'foto')
                    <img src="{{ asset('storage/' . $galeri->file) }}" class="mb-2 h-32 object-cover rounded">
                @else
                    <div class="mb-2 p-4 bg-gray-100 rounded">
                        <p class="text-sm text-gray-600">Video: {{ basename($galeri->file) }}</p>
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">File Baru (Opsional)</label>
                <input type="file" name="file" accept="image/*,video/*"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti file</p>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Update
                </button>
                <a href="{{ route('admin.galeri.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

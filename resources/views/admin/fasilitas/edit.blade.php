@extends('layouts.admin')

@section('page-title', 'Edit Fasilitas')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Fasilitas</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.fasilitas.update', $fasilitas) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nama Fasilitas</label>
                <input type="text" name="nama" value="{{ old('nama', $fasilitas->nama) }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="4"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Gambar</label>
                @if ($fasilitas->gambar)
                    <img src="{{ asset('storage/' . $fasilitas->gambar) }}" class="mb-2 h-32 object-cover rounded">
                @endif
                <input type="file" name="gambar" accept="image/*"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Jumlah</label>
                    <input type="number" name="jumlah" value="{{ old('jumlah', $fasilitas->jumlah) }}" required
                        min="1" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kondisi</label>
                    <select name="kondisi" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="baik" {{ $fasilitas->kondisi == 'baik' ? 'selected' : '' }}>Baik</option>
                        <option value="rusak ringan" {{ $fasilitas->kondisi == 'rusak ringan' ? 'selected' : '' }}>Rusak
                            Ringan</option>
                        <option value="rusak berat" {{ $fasilitas->kondisi == 'rusak berat' ? 'selected' : '' }}>Rusak
                            Berat</option>
                    </select>
                </div>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Update
                </button>
                <a href="{{ route('admin.fasilitas.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.admin')

@section('page-title', 'Tambah Berita')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Berita Baru</h2>

            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Judul Berita *</label>
                    <input type="text" name="judul" value="{{ old('judul') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Kategori</label>
                    <input type="text" name="kategori" value="{{ old('kategori') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Mis: Akademik, Kegiatan, Pengumuman">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Gambar</label>
                    <input type="file" name="gambar" accept="image/*"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-sm text-gray-500 mt-1">Max 2MB</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Konten Berita *</label>
                    <textarea name="konten" rows="10"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>{{ old('konten') }}</textarea>
                </div>

                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}
                            class="mr-2">
                        <span class="text-gray-700">Publish berita</span>
                    </label>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.berita.index') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection


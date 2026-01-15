@extends('layouts.admin')

@section('page-title', 'Tambah Prestasi')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Prestasi</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nama Lomba</label>
                <input type="text" name="nama_lomba" value="{{ old('nama_lomba') }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('nama_lomba')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Juara</label>
                    <input type="text" name="juara" value="{{ old('juara') }}"
                        placeholder="Juara 1, Juara 2, Harapan 1" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tingkat</label>
                    <select name="tingkat" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="sekolah">Sekolah</option>
                        <option value="kecamatan">Kecamatan</option>
                        <option value="kota">Kabupaten/Kota</option>
                        <option value="provinsi">Provinsi</option>
                        <option value="nasional">Nasional</option>
                        <option value="internasional">Internasional</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="{{ old('nama_siswa') }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input type="text" name="kelas" value="{{ old('kelas') }}" placeholder="X, XI, XII"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Pembimbing</label>
                    <input type="text" name="pembimbing" value="{{ old('pembimbing') }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Penyelenggara</label>
                    <input type="text" name="penyelenggara" value="{{ old('penyelenggara') }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal') }}" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Gambar</label>
                <input type="file" name="gambar" accept="image/*"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Simpan
                </button>
                <a href="{{ route('admin.prestasi.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

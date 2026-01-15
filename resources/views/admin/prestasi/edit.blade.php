@extends('layouts.admin')

@section('page-title', 'Edit Prestasi')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Prestasi</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.prestasi.update', $prestasi) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nama Lomba</label>
                <input type="text" name="nama_lomba" value="{{ old('nama_lomba', $prestasi->nama_lomba) }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('nama_lomba')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Juara</label>
                    <input type="text" name="juara" value="{{ old('juara', $prestasi->juara) }}" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tingkat</label>
                    <select name="tingkat" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="sekolah" {{ $prestasi->tingkat == 'sekolah' ? 'selected' : '' }}>Sekolah</option>
                        <option value="kecamatan" {{ $prestasi->tingkat == 'kecamatan' ? 'selected' : '' }}>Kecamatan
                        </option>
                        <option value="kota" {{ $prestasi->tingkat == 'kota' ? 'selected' : '' }}>Kabupaten/Kota
                        </option>
                        <option value="provinsi" {{ $prestasi->tingkat == 'provinsi' ? 'selected' : '' }}>Provinsi</option>
                        <option value="nasional" {{ $prestasi->tingkat == 'nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="internasional" {{ $prestasi->tingkat == 'internasional' ? 'selected' : '' }}>
                            Internasional</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="{{ old('nama_siswa', $prestasi->nama_siswa) }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input type="text" name="kelas" value="{{ old('kelas', $prestasi->kelas) }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Pembimbing</label>
                    <input type="text" name="pembimbing" value="{{ old('pembimbing', $prestasi->pembimbing) }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Penyelenggara</label>
                    <input type="text" name="penyelenggara" value="{{ old('penyelenggara', $prestasi->penyelenggara) }}"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', $prestasi->tanggal->format('Y-m-d')) }}"
                        required class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Gambar</label>
                @if ($prestasi->gambar)
                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" class="mb-2 h-32 object-cover rounded">
                @endif
                <input type="file" name="gambar" accept="image/*"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar</p>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Update
                </button>
                <a href="{{ route('admin.prestasi.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

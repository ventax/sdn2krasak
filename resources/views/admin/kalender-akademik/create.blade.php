@extends('layouts.admin')

@section('page-title', 'Tambah Kegiatan')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Kegiatan</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.kalender-akademik.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nama Kegiatan</label>
                <input type="text" name="kegiatan" value="{{ old('kegiatan') }}" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('kegiatan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('tanggal_mulai')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('tanggal_selesai')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Keterangan</label>
                <textarea name="keterangan" rows="4"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('keterangan') }}</textarea>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Simpan
                </button>
                <a href="{{ route('admin.kalender-akademik.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

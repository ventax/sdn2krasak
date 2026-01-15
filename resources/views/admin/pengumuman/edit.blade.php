@extends('layouts.admin')

@section('page-title', 'Edit Pengumuman')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Pengumuman</h2>

            <form action="{{ route('admin.pengumuman.update', $pengumuman) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Judul Pengumuman *</label>
                    <input type="text" name="judul" value="{{ old('judul', $pengumuman->judul) }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Konten Pengumuman *</label>
                    <textarea name="konten" rows="6"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>{{ old('konten', $pengumuman->konten) }}</textarea>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Prioritas *</label>
                        <select name="prioritas"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="info"
                                {{ old('prioritas', $pengumuman->prioritas) == 'info' ? 'selected' : '' }}>Info</option>
                            <option value="normal"
                                {{ old('prioritas', $pengumuman->prioritas) == 'normal' ? 'selected' : '' }}>Normal</option>
                            <option value="urgent"
                                {{ old('prioritas', $pengumuman->prioritas) == 'urgent' ? 'selected' : '' }}>Urgent</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Status</label>
                        <select name="is_active"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="1" {{ old('is_active', $pengumuman->is_active) == '1' ? 'selected' : '' }}>
                                Aktif</option>
                            <option value="0" {{ old('is_active', $pengumuman->is_active) == '0' ? 'selected' : '' }}>
                                Nonaktif</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai"
                            value="{{ old('tanggal_mulai', $pengumuman->tanggal_mulai?->format('Y-m-d')) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai"
                            value="{{ old('tanggal_selesai', $pengumuman->tanggal_selesai?->format('Y-m-d')) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.pengumuman.index') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection


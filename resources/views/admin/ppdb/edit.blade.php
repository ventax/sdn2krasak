@extends('layouts.admin')
@section('page-title', 'Update Status PPDB')
@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Update Status Pendaftar</h2>

            <div class="mb-6 p-4 bg-gray-50 rounded">
                <p class="font-semibold text-lg">{{ $ppdb->nama_lengkap }}</p>
                <p class="text-gray-600">{{ $ppdb->no_pendaftaran }}</p>
            </div>

            <form action="{{ route('admin.ppdb.update', $ppdb) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Status *</label>
                    <select name="status"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="pending" {{ old('status', $ppdb->status) == 'pending' ? 'selected' : '' }}>Pending
                        </option>
                        <option value="diterima" {{ old('status', $ppdb->status) == 'diterima' ? 'selected' : '' }}>Diterima
                        </option>
                        <option value="ditolak" {{ old('status', $ppdb->status) == 'ditolak' ? 'selected' : '' }}>Ditolak
                        </option>
                    </select>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">Catatan</label>
                    <textarea name="catatan" rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('catatan', $ppdb->catatan) }}</textarea>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.ppdb.index') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection


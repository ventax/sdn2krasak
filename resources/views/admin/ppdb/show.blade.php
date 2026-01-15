@extends('layouts.admin')
@section('page-title', 'Detail Pendaftar PPDB')
@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Detail Pendaftar</h2>

            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <h3 class="font-semibold text-lg mb-4">Data Pribadi</h3>
                    <div class="space-y-2">
                        <p><span class="font-medium">No Pendaftaran:</span> {{ $ppdb->no_pendaftaran }}</p>
                        <p><span class="font-medium">Nama:</span> {{ $ppdb->nama_lengkap }}</p>
                        <p><span class="font-medium">NISN:</span> {{ $ppdb->nisn }}</p>
                        <p><span class="font-medium">NIK:</span> {{ $ppdb->nik }}</p>
                        <p><span class="font-medium">Tempat, Tanggal Lahir:</span> {{ $ppdb->tempat_lahir }},
                            {{ $ppdb->tanggal_lahir->format('d M Y') }}</p>
                        <p><span class="font-medium">Jenis Kelamin:</span>
                            {{ $ppdb->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        <p><span class="font-medium">Agama:</span> {{ $ppdb->agama }}</p>
                        <p><span class="font-medium">Asal Sekolah:</span> {{ $ppdb->asal_sekolah }}</p>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold text-lg mb-4">Data Orang Tua</h3>
                    <div class="space-y-2">
                        <p><span class="font-medium">Nama Ayah:</span> {{ $ppdb->nama_ayah }}</p>
                        <p><span class="font-medium">Pekerjaan Ayah:</span> {{ $ppdb->pekerjaan_ayah }}</p>
                        <p><span class="font-medium">Telepon Ayah:</span> {{ $ppdb->telepon_ayah }}</p>
                        <p><span class="font-medium">Nama Ibu:</span> {{ $ppdb->nama_ibu }}</p>
                        <p><span class="font-medium">Pekerjaan Ibu:</span> {{ $ppdb->pekerjaan_ibu }}</p>
                        <p><span class="font-medium">Telepon Ibu:</span> {{ $ppdb->telepon_ibu }}</p>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h3 class="font-semibold text-lg mb-4">Dokumen</h3>
                <div class="grid grid-cols-4 gap-4">
                    @if ($ppdb->foto)
                        <div>
                            <p class="text-sm text-gray-600 mb-2">Foto</p>
                            <img src="{{ asset('storage/' . $ppdb->foto) }}" class="w-full h-32 object-cover rounded">
                        </div>
                    @endif
                    @if ($ppdb->kartu_keluarga)
                        <div>
                            <p class="text-sm text-gray-600 mb-2">KK</p>
                            <a href="{{ asset('storage/' . $ppdb->kartu_keluarga) }}" target="_blank"
                                class="text-blue-600">Lihat File</a>
                        </div>
                    @endif
                    @if ($ppdb->akta_lahir)
                        <div>
                            <p class="text-sm text-gray-600 mb-2">Akta</p>
                            <a href="{{ asset('storage/' . $ppdb->akta_lahir) }}" target="_blank"
                                class="text-blue-600">Lihat File</a>
                        </div>
                    @endif
                    @if ($ppdb->ijazah)
                        <div>
                            <p class="text-sm text-gray-600 mb-2">Ijazah</p>
                            <a href="{{ asset('storage/' . $ppdb->ijazah) }}" target="_blank" class="text-blue-600">Lihat
                                File</a>
                        </div>
                    @endif
                </div>
            </div>

            <div class="mb-6">
                <h3 class="font-semibold text-lg mb-2">Status:
                    <span
                        class="px-3 py-1 rounded-full text-sm
                    @if ($ppdb->status == 'pending') bg-yellow-100 text-yellow-800
                    @elseif($ppdb->status == 'diterima') bg-green-100 text-green-800
                    @else bg-red-100 text-red-800 @endif">
                        {{ ucfirst($ppdb->status) }}
                    </span>
                </h3>
                @if ($ppdb->catatan)
                    <p class="text-gray-600 mt-2">Catatan: {{ $ppdb->catatan }}</p>
                @endif
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('admin.ppdb.index') }}"
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Kembali</a>
                <a href="{{ route('admin.ppdb.edit', $ppdb) }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update Status</a>
            </div>
        </div>
    </div>
@endsection


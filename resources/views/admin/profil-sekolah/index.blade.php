@extends('layouts.admin')
@section('page-title', 'Profil Sekolah')
@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Profil Sekolah</h2>
        @if ($profil)
            <a href="{{ route('admin.profil-sekolah.edit') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Edit Profil</a>
        @endif
    </div>

    @if ($profil)
        <div class="bg-white rounded-lg shadow p-6">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-lg mb-4">Informasi Dasar</h3>
                    <div class="space-y-2">
                        <p><span class="font-medium">Nama Sekolah:</span> {{ $profil->nama_sekolah }}</p>
                        <p><span class="font-medium">NPSN:</span> {{ $profil->npsn }}</p>
                        <p><span class="font-medium">Akreditasi:</span> {{ $profil->akreditasi }}</p>
                        <p><span class="font-medium">Kepala Sekolah:</span> {{ $profil->kepala_sekolah }}</p>
                        <p><span class="font-medium">Email:</span> {{ $profil->email }}</p>
                        <p><span class="font-medium">Telepon:</span> {{ $profil->telepon }}</p>
                        <p><span class="font-medium">Website:</span> {{ $profil->website }}</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-4">Alamat</h3>
                    <div class="space-y-2">
                        <p>{{ $profil->alamat }}</p>
                        <p>{{ $profil->kelurahan }}, {{ $profil->kecamatan }}</p>
                        <p>{{ $profil->kota }}, {{ $profil->provinsi }} {{ $profil->kode_pos }}</p>
                    </div>
                    @if ($profil->logo || $profil->foto_sekolah)
                        <div class="mt-4">
                            <h3 class="font-semibold mb-2">Media</h3>
                            <div class="flex space-x-4">
                                @if ($profil->logo)
                                    <div>
                                        <p class="text-sm text-gray-600">Logo</p>
                                        <img src="{{ asset('storage/' . $profil->logo) }}"
                                            class="w-24 h-24 object-contain">
                                    </div>
                                @endif
                                @if ($profil->foto_sekolah)
                                    <div>
                                        <p class="text-sm text-gray-600">Foto Sekolah</p>
                                        <img src="{{ asset('storage/' . $profil->foto_sekolah) }}"
                                            class="w-32 h-24 object-cover">
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center">
            <p class="text-yellow-800 mb-4">Profil sekolah belum diatur</p>
            <a href="{{ route('admin.profil-sekolah.edit') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Atur Profil</a>
        </div>
    @endif
@endsection


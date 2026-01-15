@extends('layouts.admin')
@section('page-title', 'Edit Profil Sekolah')
@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Profil Sekolah</h2>

            <form action="{{ route('admin.profil-sekolah.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><label class="block text-gray-700 font-semibold mb-2">Nama Sekolah *</label>
                        <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah', $profil->nama_sekolah) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                    </div>
                    <div><label class="block text-gray-700 font-semibold mb-2">NPSN</label>
                        <input type="text" name="npsn" value="{{ old('npsn', $profil->npsn) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Tentang Sekolah *</label>
                    <textarea name="tentang" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>{{ old('tentang', $profil->tentang) }}</textarea>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><label class="block text-gray-700 font-semibold mb-2">Visi *</label>
                        <textarea name="visi" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>{{ old('visi', $profil->visi) }}</textarea>
                    </div>
                    <div><label class="block text-gray-700 font-semibold mb-2">Misi *</label>
                        <textarea name="misi" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>{{ old('misi', $profil->misi) }}</textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Sejarah</label>
                    <textarea name="sejarah" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2">{{ old('sejarah', $profil->sejarah) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Alamat *</label>
                    <textarea name="alamat" rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>{{ old('alamat', $profil->alamat) }}</textarea>
                </div>

                <div class="grid grid-cols-4 gap-4 mb-4">
                    <div><input type="text" name="kelurahan" value="{{ old('kelurahan', $profil->kelurahan) }}"
                            placeholder="Kelurahan" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                    <div><input type="text" name="kecamatan" value="{{ old('kecamatan', $profil->kecamatan) }}"
                            placeholder="Kecamatan" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                    <div><input type="text" name="kota" value="{{ old('kota', $profil->kota) }}" placeholder="Kota *"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2" required></div>
                    <div><input type="text" name="provinsi" value="{{ old('provinsi', $profil->provinsi) }}"
                            placeholder="Provinsi *" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-4 mb-4">
                    <div><input type="text" name="kode_pos" value="{{ old('kode_pos', $profil->kode_pos) }}"
                            placeholder="Kode Pos" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                    <div><input type="text" name="telepon" value="{{ old('telepon', $profil->telepon) }}"
                            placeholder="Telepon" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                    <div><input type="email" name="email" value="{{ old('email', $profil->email) }}"
                            placeholder="Email" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                    <div><input type="url" name="website" value="{{ old('website', $profil->website) }}"
                            placeholder="Website" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div><input type="text" name="akreditasi" value="{{ old('akreditasi', $profil->akreditasi) }}"
                            placeholder="Akreditasi" class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                    <div colspan="2"><input type="text" name="kepala_sekolah"
                            value="{{ old('kepala_sekolah', $profil->kepala_sekolah) }}" placeholder="Nama Kepala Sekolah"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2"></div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div><label class="block text-gray-700 font-semibold mb-2">Logo</label>
                        @if ($profil->logo)
                            <img src="{{ asset('storage/' . $profil->logo) }}" class="w-24 h-24 object-contain mb-2">
                        @endif
                        <input type="file" name="logo" accept="image/*"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    </div>
                    <div><label class="block text-gray-700 font-semibold mb-2">Foto Sekolah</label>
                        @if ($profil->foto_sekolah)
                            <img src="{{ asset('storage/' . $profil->foto_sekolah) }}"
                                class="w-32 h-24 object-cover mb-2">
                        @endif
                        <input type="file" name="foto_sekolah" accept="image/*"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.profil-sekolah.index') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection


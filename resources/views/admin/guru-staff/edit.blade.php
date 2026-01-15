@extends('layouts.admin')

@section('page-title', 'Edit Guru/Staff')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Guru/Staff</h2>

            <form action="{{ route('admin.guru-staff.update', $guruStaff) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">NIP</label>
                        <input type="text" name="nip" value="{{ old('nip', $guruStaff->nip) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                        <input type="text" name="nama" value="{{ old('nama', $guruStaff->nama) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Jenis Kelamin *</label>
                        <select name="jenis_kelamin"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="L"
                                {{ old('jenis_kelamin', $guruStaff->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="P"
                                {{ old('jenis_kelamin', $guruStaff->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Status *</label>
                        <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="guru" {{ old('status', $guruStaff->status) == 'guru' ? 'selected' : '' }}>Guru
                            </option>
                            <option value="staff" {{ old('status', $guruStaff->status) == 'staff' ? 'selected' : '' }}>
                                Staff</option>
                            <option value="kepala_sekolah"
                                {{ old('status', $guruStaff->status) == 'kepala_sekolah' ? 'selected' : '' }}>Kepala Sekolah
                            </option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Status Aktif</label>
                        <select name="is_active"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="1" {{ old('is_active', $guruStaff->is_active) == '1' ? 'selected' : '' }}>
                                Aktif</option>
                            <option value="0" {{ old('is_active', $guruStaff->is_active) == '0' ? 'selected' : '' }}>
                                Nonaktif</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Foto</label>
                    @if ($guruStaff->foto)
                        <img src="{{ asset('storage/' . $guruStaff->foto) }}" alt="Current Photo"
                            class="w-32 h-32 object-cover rounded mb-2">
                    @endif
                    <input type="file" name="foto" accept="image/*"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Jabatan *</label>
                        <input type="text" name="jabatan" value="{{ old('jabatan', $guruStaff->jabatan) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Mata Pelajaran</label>
                        <input type="text" name="mata_pelajaran"
                            value="{{ old('mata_pelajaran', $guruStaff->mata_pelajaran) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_terakhir"
                            value="{{ old('pendidikan_terakhir', $guruStaff->pendidikan_terakhir) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', $guruStaff->email) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Telepon</label>
                        <input type="text" name="telepon" value="{{ old('telepon', $guruStaff->telepon) }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea name="alamat" rows="3"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat', $guruStaff->alamat) }}</textarea>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.guru-staff.index') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection


@extends('layouts.public')

@section('title', 'Status Pendaftaran - ' . ($profil->nama_sekolah ?? 'Sekolah'))

@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-xl p-8">
                <!-- Header Status -->
                <div class="text-center mb-8">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 rounded-full mb-4
                    {{ $ppdb->status == 'accepted' ? 'bg-green-100' : ($ppdb->status == 'rejected' ? 'bg-red-100' : 'bg-yellow-100') }}">
                        @if ($ppdb->status == 'accepted')
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @elseif($ppdb->status == 'rejected')
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @else
                            <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @endif
                    </div>

                    <h1 class="text-3xl font-bold text-gray-900 mb-2">
                        @if ($ppdb->status == 'accepted')
                            Selamat! Pendaftaran Diterima
                        @elseif($ppdb->status == 'rejected')
                            Pendaftaran Belum Berhasil
                        @else
                            Pendaftaran Sedang Diproses
                        @endif
                    </h1>
                    <p class="text-gray-600">Nomor Pendaftaran: <span
                            class="font-semibold">{{ $ppdb->no_pendaftaran }}</span></p>
                </div>

                <!-- Status Badge -->
                <div class="mb-8 text-center">
                    @if ($ppdb->status == 'pending')
                        <span
                            class="inline-flex items-center px-6 py-3 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Menunggu Verifikasi
                        </span>
                    @elseif($ppdb->status == 'accepted')
                        <span
                            class="inline-flex items-center px-6 py-3 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Diterima
                        </span>
                    @else
                        <span
                            class="inline-flex items-center px-6 py-3 rounded-full text-sm font-semibold bg-red-100 text-red-800">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            Ditolak
                        </span>
                    @endif
                </div>

                <!-- Data Pendaftaran -->
                <div class="border-t border-gray-200 pt-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Data Pendaftaran</h2>
                    <dl class="grid grid-cols-1 gap-4">
                        <div class="bg-gray-50 px-4 py-3 rounded-lg">
                            <dt class="text-sm font-medium text-gray-500">Nama Lengkap</dt>
                            <dd class="mt-1 text-sm text-gray-900 font-semibold">{{ $ppdb->nama_lengkap }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 rounded-lg">
                            <dt class="text-sm font-medium text-gray-500">NIK</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $ppdb->nik }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 rounded-lg grid grid-cols-2 gap-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Tempat Lahir</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $ppdb->tempat_lahir }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Tanggal Lahir</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ \Carbon\Carbon::parse($ppdb->tanggal_lahir)->format('d F Y') }}</dd>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 rounded-lg">
                            <dt class="text-sm font-medium text-gray-500">Alamat</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $ppdb->alamat }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 rounded-lg grid grid-cols-2 gap-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">No. Telepon</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $ppdb->no_hp }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Tanggal Daftar</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $ppdb->created_at->format('d F Y, H:i') }}</dd>
                            </div>
                        </div>
                    </dl>
                </div>

                <!-- Catatan -->
                @if ($ppdb->catatan)
                    <div class="mt-6 border-t border-gray-200 pt-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Catatan</h2>
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
                            <p class="text-sm text-blue-700">{{ $ppdb->catatan }}</p>
                        </div>
                    </div>
                @endif

                <!-- Informasi Lanjutan -->
                <div class="mt-8 border-t border-gray-200 pt-6">
                    @if ($ppdb->status == 'pending')
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
                            <h3 class="text-sm font-medium text-yellow-800 mb-2">Informasi:</h3>
                            <ul class="text-sm text-yellow-700 space-y-1">
                                <li>• Pendaftaran Anda sedang dalam proses verifikasi</li>
                                <li>• Harap menunggu 1-3 hari kerja untuk proses verifikasi</li>
                                <li>• Anda akan dihubungi melalui nomor telepon yang terdaftar</li>
                                <li>• Simpan nomor pendaftaran untuk pengecekan status selanjutnya</li>
                            </ul>
                        </div>
                    @elseif($ppdb->status == 'accepted')
                        <div class="bg-green-50 border-l-4 border-green-400 p-4 rounded">
                            <h3 class="text-sm font-medium text-green-800 mb-2">Langkah Selanjutnya:</h3>
                            <ul class="text-sm text-green-700 space-y-1">
                                <li>✓ Selamat! Anda telah diterima sebagai siswa baru</li>
                                <li>✓ Harap menunggu panggilan dari pihak sekolah</li>
                                <li>✓ Siapkan dokumen asli untuk verifikasi</li>
                                <li>✓ <strong>Ingat: Tidak ada biaya pendaftaran atau SPP yang harus dibayar!</strong></li>
                            </ul>
                        </div>
                    @else
                        <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded">
                            <h3 class="text-sm font-medium text-red-800 mb-2">Informasi:</h3>
                            <p class="text-sm text-red-700">
                                Mohon maaf, pendaftaran Anda belum dapat diproses saat ini.
                                Silakan hubungi sekolah untuk informasi lebih lanjut atau dapat mendaftar kembali setelah
                                melengkapi persyaratan.
                            </p>
                        </div>
                    @endif
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('ppdb.index') }}"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg text-center transition duration-200">
                        Kembali ke PPDB
                    </a>
                    <button onclick="window.print()"
                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        Cetak
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


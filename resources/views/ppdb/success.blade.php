@extends('layouts.public')

@section('title', 'Berhasil Mendaftar - ' . ($profil->nama_sekolah ?? 'Sekolah'))

@section('content')
    <div class="bg-gradient-to-br from-green-50 to-blue-50 min-h-screen py-12 flex items-center">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="bg-white rounded-lg shadow-2xl p-8 text-center">
                <!-- Success Icon -->
                <div class="inline-flex items-center justify-center w-24 h-24 bg-green-100 rounded-full mb-6">
                    <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <!-- Title -->
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Pendaftaran Berhasil!</h1>
                <p class="text-lg text-gray-600 mb-8">Terima kasih telah mendaftar di
                    {{ $profil->nama_sekolah ?? 'sekolah kami' }}</p>

                <!-- Registration Number -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-lg p-6 mb-8">
                    <p class="text-sm text-gray-600 mb-2">Nomor Pendaftaran Anda:</p>
                    <div class="flex items-center justify-center gap-3">
                        <p class="text-3xl font-bold text-blue-600">{{ $noPendaftaran }}</p>
                        <button onclick="copyToClipboard('{{ $noPendaftaran }}')"
                            class="p-2 bg-blue-100 hover:bg-blue-200 rounded-lg transition duration-200"
                            title="Salin nomor">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                            </svg>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-3">
                        <strong>PENTING:</strong> Simpan nomor ini untuk pengecekan status pendaftaran
                    </p>
                </div>

                <!-- Free School Badge -->
                <div class="bg-yellow-400 rounded-lg p-4 mb-8">
                    <p class="text-gray-900 font-bold text-lg">🎓 SEKOLAH 100% GRATIS</p>
                    <p class="text-gray-800 text-sm mt-1">Tidak ada biaya pendaftaran atau SPP yang harus dibayar!</p>
                </div>

                <!-- Next Steps -->
                <div class="text-left bg-blue-50 rounded-lg p-6 mb-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        Langkah Selanjutnya:
                    </h2>
                    <ol class="space-y-3 text-sm text-gray-700">
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center mr-3 text-xs font-bold">1</span>
                            <span>Proses verifikasi dokumen akan dilakukan dalam <strong>1-3 hari kerja</strong></span>
                        </li>
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center mr-3 text-xs font-bold">2</span>
                            <span>Tim kami akan menghubungi Anda melalui <strong>nomor telepon yang
                                    terdaftar</strong></span>
                        </li>
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center mr-3 text-xs font-bold">3</span>
                            <span>Anda dapat <strong>mengecek status pendaftaran</strong> menggunakan nomor
                                pendaftaran</span>
                        </li>
                        <li class="flex items-start">
                            <span
                                class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center mr-3 text-xs font-bold">4</span>
                            <span>Siapkan <strong>dokumen asli</strong> untuk verifikasi jika diterima</span>
                        </li>
                    </ol>
                </div>

                <!-- Warning -->
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-8 text-left">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Perhatian!</h3>
                            <p class="text-sm text-red-700 mt-1">
                                <strong>Hati-hati dengan penipuan!</strong> Sekolah kami tidak pernah meminta pembayaran
                                apapun. Jika ada yang meminta uang atas nama sekolah, segera laporkan ke pihak sekolah.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('ppdb.cek') }}"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        Cek Status Pendaftaran
                    </a>
                    <a href="{{ route('home') }}"
                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-lg transition duration-200 text-center">
                        Kembali ke Beranda
                    </a>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <p class="text-sm text-gray-600 mb-2">Butuh bantuan?</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4 text-sm">
                        <a href="tel:{{ $profil->telepon ?? '' }}"
                            class="text-blue-600 hover:text-blue-800 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            {{ $profil->telepon ?? 'Telepon' }}
                        </a>
                        <a href="{{ route('kontak.index') }}"
                            class="text-blue-600 hover:text-blue-800 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Nomor pendaftaran berhasil disalin!');
            }, function(err) {
                console.error('Gagal menyalin: ', err);
            });
        }
    </script>
@endsection


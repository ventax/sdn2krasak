@extends('layouts.public')

@section('title', 'Hubungi Kami - ' . ($profil->nama_sekolah ?? 'Sekolah'))

@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Hubungi Kami</h1>
                <p class="text-lg text-gray-600">Kami siap membantu menjawab pertanyaan Anda</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Info Kontak -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Alamat -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Alamat</h3>
                                <p class="mt-2 text-gray-600">
                                    {{ $profil->alamat ?? 'Jl. Pendidikan No. 123, Kota' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Telepon</h3>
                                <p class="mt-2 text-gray-600">
                                    {{ $profil->telepon ?? '(0xx) xxxx-xxxx' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                <p class="mt-2 text-gray-600">
                                    {{ $profil->email ?? 'info@sekolah.sch.id' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Jam Layanan</h3>
                                <div class="mt-2 text-gray-600 space-y-1">
                                    <p>Senin - Jumat: 07:00 - 16:00</p>
                                    <p>Sabtu: 07:00 - 12:00</p>
                                    <p class="text-red-600 font-medium">Minggu & Libur: Tutup</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Gratis -->
                    <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">🎓 SEKOLAH GRATIS</h3>
                        <p class="text-gray-900 font-semibold">Tanpa Biaya SPP</p>
                        <p class="text-sm text-gray-800 mt-2">Pendidikan Berkualitas untuk Semua</p>
                    </div>
                </div>

                <!-- Form Kontak -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>

                        @if (session('success'))
                            <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-700">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('kontak.send') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                                        Nama Lengkap <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="nama" id="nama" required value="{{ old('nama') }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @error('nama')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" name="email" id="email" required
                                        value="{{ old('email') }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-2">
                                        No. Telepon/HP <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" name="no_hp" id="no_hp" required
                                        value="{{ old('no_hp') }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @error('no_hp')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">
                                        Subjek <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="subjek" id="subjek" required
                                        value="{{ old('subjek') }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @error('subjek')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">
                                    Pesan <span class="text-red-500">*</span>
                                </label>
                                <textarea name="pesan" id="pesan" rows="6" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-200 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="mt-8 bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200 h-96 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                </svg>
                                <p class="text-gray-500">Lokasi Sekolah</p>
                                <p class="text-sm text-gray-400 mt-2">
                                    Embed Google Maps di sini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('layouts.public')

@section('title', 'Staff & Tenaga Kependidikan - ' . ($profil->nama_sekolah ?? 'Sekolah'))

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Menu -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-lg p-6 sticky top-24">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Menu Profil</h3>
                        <nav class="space-y-2">
                            <a href="{{ route('profil.index') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Tentang Sekolah
                            </a>
                            <a href="{{ route('profil.visi-misi') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Visi & Misi
                            </a>
                            <a href="{{ route('profil.sejarah') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Sejarah
                            </a>
                            <a href="{{ route('profil.guru') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Kepala Sekolah & Guru
                            </a>
                            <a href="{{ route('profil.staff') }}" class="block px-4 py-2 bg-blue-600 text-white rounded">
                                Staff & Tenaga Kependidikan
                            </a>
                            <a href="{{ route('profil.fasilitas') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Fasilitas
                            </a>
                            <a href="{{ route('profil.ekstrakurikuler') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Ekstrakurikuler
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:col-span-3">
                    <!-- Header -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-8 text-white">
                            <h1 class="text-4xl font-bold mb-2">Staff & Tenaga Kependidikan</h1>
                            <p class="text-blue-100">Tim pendukung pendidikan berkualitas</p>
                        </div>
                    </div>

                    @if ($staff && $staff->count() > 0)
                        <!-- Staff Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($staff as $item)
                                <div
                                    class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-200">
                                    <!-- Photo -->
                                    <div class="aspect-w-3 aspect-h-4 bg-gray-200">
                                        @if ($item->foto)
                                            <img src="{{ Storage::url($item->foto) }}" alt="{{ $item->nama }}"
                                                class="w-full h-64 object-cover">
                                        @else
                                            <div
                                                class="w-full h-64 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                                <svg class="w-24 h-24 text-gray-500" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Info -->
                                    <div class="p-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $item->nama }}</h3>
                                        <p class="text-blue-600 font-semibold mb-2">{{ $item->jabatan }}</p>

                                        @if ($item->nip)
                                            <p class="text-sm text-gray-500 mb-2">NIP: {{ $item->nip }}</p>
                                        @endif

                                        @if ($item->pendidikan)
                                            <div class="flex items-center text-sm text-gray-600 mb-2">
                                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                                </svg>
                                                {{ $item->pendidikan }}
                                            </div>
                                        @endif

                                        @if ($item->email)
                                            <div class="flex items-center text-sm text-gray-600 mb-2">
                                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                                <a href="mailto:{{ $item->email }}"
                                                    class="text-blue-600 hover:underline">{{ $item->email }}</a>
                                            </div>
                                        @endif

                                        @if ($item->no_hp)
                                            <div class="flex items-center text-sm text-gray-600">
                                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                                {{ $item->no_hp }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        @if ($staff->hasPages())
                            <div class="mt-8">
                                {{ $staff->links() }}
                            </div>
                        @endif
                    @else
                        <!-- Empty State -->
                        <div class="bg-white rounded-lg shadow-lg p-12 text-center">
                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Data Staff Belum Tersedia</h3>
                            <p class="text-gray-600">Informasi staff dan tenaga kependidikan akan segera ditambahkan</p>
                        </div>
                    @endif

                    <!-- Info Box -->
                    <div class="mt-8 bg-blue-50 border-l-4 border-blue-400 p-6 rounded-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-blue-800">Informasi</h3>
                                <div class="mt-2 text-sm text-blue-700">
                                    <p>Staff dan tenaga kependidikan kami berdedikasi penuh untuk mendukung proses
                                        pembelajaran di {{ $profil->nama_sekolah ?? 'sekolah kami' }}. Semua tenaga
                                        profesional bekerja dengan komitmen tinggi untuk menciptakan lingkungan belajar yang
                                        kondusif.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


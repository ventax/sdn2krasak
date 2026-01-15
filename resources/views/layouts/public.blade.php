<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-white text-gray-900">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="text-3xl font-bold text-blue-600">🎓</div>
                        <div>
                            <div class="text-xl font-bold text-gray-900">SEKOLAH GRATIS</div>
                            <div class="text-xs text-gray-600">100% Tanpa Biaya SPP</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}"
                        class="px-4 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600 font-semibold' : '' }}">
                        Beranda
                    </a>

                    <!-- Profil Dropdown -->
                    <div class="relative group">
                        <button
                            class="px-4 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition flex items-center">
                            Profil
                            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('profil.index') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Tentang Sekolah</a>
                            <a href="{{ route('profil.visi-misi') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Visi & Misi</a>
                            <a href="{{ route('profil.sejarah') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Sejarah</a>
                            <a href="{{ route('profil.guru') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Guru</a>
                            <a href="{{ route('profil.staff') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Staff</a>
                            <a href="{{ route('profil.fasilitas') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Fasilitas</a>
                            <a href="{{ route('profil.ekstrakurikuler') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Ekstrakurikuler</a>
                        </div>
                    </div>

                    <a href="{{ route('berita.index') }}"
                        class="px-4 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition {{ request()->routeIs('berita.*') ? 'bg-blue-50 text-blue-600 font-semibold' : '' }}">
                        Berita
                    </a>
                    <a href="{{ route('galeri.index') }}"
                        class="px-4 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition {{ request()->routeIs('galeri.*') ? 'bg-blue-50 text-blue-600 font-semibold' : '' }}">
                        Galeri
                    </a>
                    <a href="{{ route('prestasi.index') }}"
                        class="px-4 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition {{ request()->routeIs('prestasi.*') ? 'bg-blue-50 text-blue-600 font-semibold' : '' }}">
                        Prestasi
                    </a>
                    <a href="{{ route('kontak.index') }}"
                        class="px-4 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition {{ request()->routeIs('kontak.*') ? 'bg-blue-50 text-blue-600 font-semibold' : '' }}">
                        Kontak
                    </a>
                    <a href="{{ route('ppdb.index') }}"
                        class="ml-2 px-6 py-2 bg-gradient-to-r from-green-500 to-green-600 text-white font-bold rounded-full hover:from-green-600 hover:to-green-700 transition shadow-lg">
                        PPDB
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Beranda</a>
                <a href="{{ route('profil.index') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Tentang Sekolah</a>
                <a href="{{ route('profil.visi-misi') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Visi & Misi</a>
                <a href="{{ route('profil.sejarah') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Sejarah</a>
                <a href="{{ route('profil.guru') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Guru</a>
                <a href="{{ route('profil.staff') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Staff</a>
                <a href="{{ route('profil.fasilitas') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Fasilitas</a>
                <a href="{{ route('profil.ekstrakurikuler') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Ekstrakurikuler</a>
                <a href="{{ route('berita.index') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Berita</a>
                <a href="{{ route('galeri.index') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Galeri</a>
                <a href="{{ route('prestasi.index') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Prestasi</a>
                <a href="{{ route('kontak.index') }}"
                    class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50">Kontak</a>
                <a href="{{ route('ppdb.index') }}"
                    class="block px-3 py-2 bg-green-500 text-white font-bold rounded-md hover:bg-green-600">PPDB</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">🎓 SEKOLAH GRATIS</h3>
                    <p class="text-gray-400 mb-4">Pendidikan berkualitas untuk semua, tanpa biaya SPP. 100% GRATIS!</p>
                    <div class="bg-yellow-500 text-gray-900 px-4 py-2 rounded-lg font-bold inline-block">
                        🎓 100% GRATIS - TANPA SPP
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak</h4>
                    <div class="space-y-2 text-gray-400">
                        <p>📍 Jl. Pendidikan No. 123</p>
                        <p>📞 021-12345678</p>
                        <p>✉️ info@sekolahgratis.sch.id</p>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Link Cepat</h4>
                    <div class="space-y-2">
                        <a href="{{ route('ppdb.index') }}"
                            class="block text-gray-400 hover:text-white transition">Pendaftaran PPDB</a>
                        <a href="{{ route('ppdb.cek') }}" class="block text-gray-400 hover:text-white transition">Cek
                            Status PPDB</a>
                        <a href="{{ route('downloads.index') }}"
                            class="block text-gray-400 hover:text-white transition">Download</a>
                        <a href="{{ route('kalender.index') }}"
                            class="block text-gray-400 hover:text-white transition">Kalender Akademik</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Sekolah Gratis. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>

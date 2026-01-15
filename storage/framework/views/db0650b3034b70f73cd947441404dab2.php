<?php $__env->startSection('title', $profil->nama_sekolah ?? 'Sekolah Gratis Berkualitas'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMCAxLjEwNS0uODk1IDItMiAycy0yLS44OTUtMi0yIC44OTUtMiAyLTIgMiAuODk1IDIgMm0tMTggMGMwIDEuMTA1LS44OTUgMi0yIDJzLTItLjg5NS0yLTIgLjg5NS0yIDItMiAyIC44OTUgMiAybTE4LTE4YzAgMS4xMDUtLjg5NSAyLTIgMnMtMi0uODk1LTItMiAuODk1LTIgMi0yIDIgLjg5NSAyIDJtLTE4IDBjMCAxLjEwNS0uODk1IDItMiAycy0yLS44OTUtMi0yIC44OTUtMiAyLTIgMiAuODk1IDIgMnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-10">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <div class="inline-block mb-6">
                        <span
                            class="bg-yellow-400 text-gray-900 text-sm font-bold px-6 py-3 rounded-full shadow-lg animate-pulse">
                            🎓 100% GRATIS - TANPA BIAYA SPP
                        </span>
                    </div>

                    <h1 class="text-4xl lg:text-6xl font-extrabold mb-6 leading-tight">
                        <?php echo e($profil->nama_sekolah ?? 'Sekolah Gratis Berkualitas'); ?>

                    </h1>

                    <p class="text-xl lg:text-2xl mb-4 text-blue-100">
                        Pendidikan Berkualitas untuk Semua
                    </p>

                    <p class="text-lg mb-8 text-blue-100 max-w-xl mx-auto lg:mx-0">
                        Memberikan kesempatan belajar terbaik tanpa biaya. Karena pendidikan adalah hak setiap anak.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="<?php echo e(route('ppdb.create')); ?>"
                            class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-lg shadow-xl transition duration-200 transform hover:scale-105">
                            Daftar Sekarang
                        </a>
                        <a href="<?php echo e(route('profil.index')); ?>"
                            class="bg-white bg-opacity-20 hover:bg-opacity-30 backdrop-blur-sm text-white font-bold py-4 px-8 rounded-lg border-2 border-white transition duration-200">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="hidden lg:block">
                    <?php if($profil && $profil->foto_sekolah): ?>
                        <img src="<?php echo e(Storage::url($profil->foto_sekolah)); ?>" alt="Foto Sekolah"
                            class="rounded-2xl shadow-2xl transform rotate-3 hover:rotate-0 transition duration-500">
                    <?php else: ?>
                        <div
                            class="bg-white bg-opacity-10 backdrop-blur-md rounded-2xl p-8 h-96 flex items-center justify-center">
                            <svg class="w-32 h-32 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-white py-12 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-blue-600 mb-2"><?php echo e($stats['total_guru'] ?? 0); ?>+</div>
                    <div class="text-gray-600 font-medium">Guru Profesional</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-green-600 mb-2"><?php echo e($stats['total_siswa'] ?? 0); ?>+</div>
                    <div class="text-gray-600 font-medium">Siswa Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-purple-600 mb-2"><?php echo e($stats['total_prestasi'] ?? 0); ?>+
                    </div>
                    <div class="text-gray-600 font-medium">Prestasi</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-yellow-600 mb-2">100%</div>
                    <div class="text-gray-600 font-medium">GRATIS</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-lg text-gray-600">Komitmen kami untuk pendidikan berkualitas tanpa biaya</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-200">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">100% Gratis</h3>
                    <p class="text-gray-600">Tidak ada biaya pendaftaran, SPP, atau biaya tersembunyi lainnya. Pendidikan
                        berkualitas untuk semua.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-200">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Guru Berkualitas</h3>
                    <p class="text-gray-600">Tenaga pengajar profesional dan berpengalaman yang berdedikasi untuk pendidikan
                        siswa.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-200">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fasilitas Lengkap</h3>
                    <p class="text-gray-600">Sarana dan prasarana modern untuk mendukung proses pembelajaran yang optimal.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-200">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Akreditasi <?php echo e($profil->akreditasi ?? 'A'); ?></h3>
                    <p class="text-gray-600">Sekolah dengan akreditasi terbaik, menjamin kualitas pendidikan yang standar
                        nasional.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-200">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Ekstrakurikuler</h3>
                    <p class="text-gray-600">Beragam kegiatan ekstrakurikuler untuk mengembangkan bakat dan minat siswa.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-200">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lingkungan Kondusif</h3>
                    <p class="text-gray-600">Suasana belajar yang nyaman dan mendukung perkembangan karakter siswa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest News -->
    <?php if($berita->count() > 0): ?>
        <div class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Berita Terbaru</h2>
                        <p class="text-gray-600">Informasi dan update terkini dari sekolah</p>
                    </div>
                    <a href="<?php echo e(route('berita.index')); ?>"
                        class="text-blue-600 hover:text-blue-800 font-semibold flex items-center">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php $__currentLoopData = $berita->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-200">
                            <a href="<?php echo e(route('berita.show', $item->slug)); ?>">
                                <?php if($item->gambar): ?>
                                    <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>"
                                        class="w-full h-48 object-cover">
                                <?php else: ?>
                                    <div
                                        class="w-full h-48 bg-gradient-to-br from-blue-400 to-indigo-600 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white opacity-50" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </a>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <?php echo e($item->created_at->format('d F Y')); ?>

                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                                    <a href="<?php echo e(route('berita.show', $item->slug)); ?>"
                                        class="hover:text-blue-600"><?php echo e($item->judul); ?></a>
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    <?php echo e(Str::limit(strip_tags($item->konten), 100)); ?></p>
                                <a href="<?php echo e(route('berita.show', $item->slug)); ?>"
                                    class="text-blue-600 hover:text-blue-800 font-semibold inline-flex items-center">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Achievements -->
    <?php if($prestasi->count() > 0): ?>
        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Prestasi Terbaru</h2>
                        <p class="text-gray-600">Kebanggaan siswa-siswi kami</p>
                    </div>
                    <a href="<?php echo e(route('prestasi.index')); ?>"
                        class="text-blue-600 hover:text-blue-800 font-semibold flex items-center">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php $__currentLoopData = $prestasi->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition duration-200">
                            <?php if($item->gambar): ?>
                                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->nama_lomba); ?>"
                                    class="w-full h-48 object-cover rounded-lg mb-4">
                            <?php endif; ?>
                            <div class="flex items-start mb-4">
                                <div class="flex-shrink-0 mr-3">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center shadow-lg">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo e($item->nama_lomba); ?></h3>
                                    <p class="text-sm font-semibold text-blue-600 mb-1"><?php echo e($item->juara); ?></p>
                                    <?php if($item->nama_siswa): ?>
                                        <p class="text-sm text-gray-600 mb-1"><?php echo e($item->nama_siswa); ?></p>
                                    <?php endif; ?>
                                    <div class="flex items-center text-xs text-gray-500 mb-2">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <?php echo e($item->tanggal->format('d M Y')); ?>

                                    </div>
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                                        <?php echo e($item->tingkat == 'internasional'
                                            ? 'bg-purple-100 text-purple-800'
                                            : ($item->tingkat == 'nasional'
                                                ? 'bg-red-100 text-red-800'
                                                : ($item->tingkat == 'provinsi'
                                                    ? 'bg-blue-100 text-blue-800'
                                                    : 'bg-green-100 text-green-800'))); ?>">
                                        <?php echo e(ucfirst($item->tingkat)); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Gallery Preview -->
    <?php if($galeri->count() > 0): ?>
        <div class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Galeri</h2>
                        <p class="text-gray-600">Dokumentasi kegiatan sekolah</p>
                    </div>
                    <a href="<?php echo e(route('galeri.index')); ?>"
                        class="text-blue-600 hover:text-blue-800 font-semibold flex items-center">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php $__currentLoopData = $galeri->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('galeri.show', $item->id)); ?>"
                            class="group relative aspect-square overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-200">
                            <?php if($item->tipe == 'foto'): ?>
                                <img src="<?php echo e(asset('storage/' . $item->file)); ?>" alt="<?php echo e($item->judul); ?>"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <?php else: ?>
                                <div
                                    class="w-full h-full bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-200 flex items-center justify-center">
                                <span
                                    class="text-white opacity-0 group-hover:opacity-100 transition duration-200 font-semibold"><?php echo e($item->judul); ?></span>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">
                    Siap Bergabung dengan Kami?
                </h2>
                <p class="text-xl text-blue-100 mb-8">
                    Daftar sekarang dan raih masa depan cerah tanpa beban biaya pendidikan!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo e(route('ppdb.create')); ?>"
                        class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-lg shadow-xl transition duration-200 transform hover:scale-105">
                        Daftar PPDB Sekarang
                    </a>
                    <a href="<?php echo e(route('kontak.index')); ?>"
                        class="bg-white bg-opacity-20 hover:bg-opacity-30 backdrop-blur-sm text-white font-bold py-4 px-8 rounded-lg border-2 border-white transition duration-200">
                        Hubungi Kami
                    </a>
                </div>
                <div class="mt-8 text-white text-sm">
                    <p>📞 <?php echo e($profil->telepon ?? '(021) xxx-xxxx'); ?> | ✉️ <?php echo e($profil->email ?? 'info@sekolah.sch.id'); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/welcome.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Sejarah Sekolah - ' . ($profil->nama_sekolah ?? 'Sekolah')); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Menu -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-lg p-6 sticky top-24">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Menu Profil</h3>
                        <nav class="space-y-2">
                            <a href="<?php echo e(route('profil.index')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Tentang Sekolah
                            </a>
                            <a href="<?php echo e(route('profil.visi-misi')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Visi & Misi
                            </a>
                            <a href="<?php echo e(route('profil.sejarah')); ?>" class="block px-4 py-2 bg-blue-600 text-white rounded">
                                Sejarah
                            </a>
                            <a href="<?php echo e(route('profil.guru')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Kepala Sekolah & Guru
                            </a>
                            <a href="<?php echo e(route('profil.staff')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Staff & Tenaga Kependidikan
                            </a>
                            <a href="<?php echo e(route('profil.fasilitas')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Fasilitas
                            </a>
                            <a href="<?php echo e(route('profil.ekstrakurikuler')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded transition">
                                Ekstrakurikuler
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Content -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <!-- Header -->
                        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-8 text-white">
                            <h1 class="text-4xl font-bold mb-2">Sejarah Sekolah</h1>
                            <p class="text-blue-100">Perjalanan <?php echo e($profil->nama_sekolah ?? 'Sekolah'); ?></p>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <?php if($profil && $profil->sejarah): ?>
                                <!-- Timeline Style -->
                                <div class="relative">
                                    <!-- Timeline Line -->
                                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-blue-200"></div>

                                    <!-- Content Sections -->
                                    <div class="space-y-8">
                                        <?php echo nl2br(e($profil->sejarah)); ?>

                                    </div>
                                </div>

                                <!-- Additional Info -->
                                <?php if($profil->foto_sekolah): ?>
                                    <div class="mt-8 rounded-lg overflow-hidden">
                                        <img src="<?php echo e(Storage::url($profil->foto_sekolah)); ?>" alt="Foto Sekolah"
                                            class="w-full h-96 object-cover">
                                    </div>
                                <?php endif; ?>

                                <!-- Key Facts -->
                                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <?php if($profil->tahun_berdiri): ?>
                                        <div class="bg-blue-50 rounded-lg p-6 text-center">
                                            <div class="text-4xl font-bold text-blue-600 mb-2"><?php echo e($profil->tahun_berdiri); ?>

                                            </div>
                                            <div class="text-gray-600">Tahun Berdiri</div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($profil->akreditasi): ?>
                                        <div class="bg-green-50 rounded-lg p-6 text-center">
                                            <div class="text-4xl font-bold text-green-600 mb-2"><?php echo e($profil->akreditasi); ?>

                                            </div>
                                            <div class="text-gray-600">Akreditasi</div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="bg-yellow-50 rounded-lg p-6 text-center">
                                        <div class="text-2xl font-bold text-yellow-600 mb-2">100% GRATIS</div>
                                        <div class="text-gray-600">Tanpa Biaya SPP</div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <!-- Empty State -->
                                <div class="text-center py-12">
                                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Sejarah Belum Tersedia</h3>
                                    <p class="text-gray-600">Informasi sejarah sekolah akan segera ditambahkan</p>
                                </div>
                            <?php endif; ?>

                            <!-- Achievement Timeline (Optional) -->
                            <div class="mt-12">
                                <h2 class="text-2xl font-bold text-gray-900 mb-6">Pencapaian & Milestone</h2>

                                <div class="relative">
                                    <!-- Vertical Line -->
                                    <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-blue-200 hidden md:block"></div>

                                    <!-- Timeline Items -->
                                    <div class="space-y-8">
                                        <!-- Example Timeline Item -->
                                        <div class="relative pl-0 md:pl-12">
                                            <div
                                                class="absolute left-2 top-2 w-4 h-4 bg-blue-600 rounded-full hidden md:block">
                                            </div>
                                            <div
                                                class="bg-gradient-to-r from-blue-50 to-white border-l-4 border-blue-600 rounded-lg p-6">
                                                <div class="text-sm font-semibold text-blue-600 mb-1"><?php echo e(date('Y')); ?>

                                                </div>
                                                <h3 class="text-lg font-bold text-gray-900 mb-2">Program Sekolah Gratis</h3>
                                                <p class="text-gray-600">Melanjutkan komitmen menyediakan pendidikan
                                                    berkualitas tanpa biaya untuk seluruh siswa</p>
                                            </div>
                                        </div>

                                        <?php if($profil && $profil->tahun_berdiri): ?>
                                            <div class="relative pl-0 md:pl-12">
                                                <div
                                                    class="absolute left-2 top-2 w-4 h-4 bg-green-600 rounded-full hidden md:block">
                                                </div>
                                                <div
                                                    class="bg-gradient-to-r from-green-50 to-white border-l-4 border-green-600 rounded-lg p-6">
                                                    <div class="text-sm font-semibold text-green-600 mb-1">
                                                        <?php echo e($profil->tahun_berdiri); ?></div>
                                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pendirian Sekolah</h3>
                                                    <p class="text-gray-600"><?php echo e($profil->nama_sekolah); ?> resmi didirikan
                                                        dan memulai kegiatan belajar mengajar</p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/profil/sejarah.blade.php ENDPATH**/ ?>
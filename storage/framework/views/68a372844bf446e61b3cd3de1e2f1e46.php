<?php $__env->startSection('title', 'Tentang Sekolah'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Tentang <?php echo e($profil->nama_sekolah ?? 'Sekolah'); ?></h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <?php if($profil): ?>
                    <div class="bg-white rounded-lg shadow p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Profil Sekolah</h2>
                        <?php if($profil->foto_sekolah): ?>
                            <img src="<?php echo e(asset('storage/' . $profil->foto_sekolah)); ?>" alt="Sekolah"
                                class="w-full h-64 object-cover rounded-lg mb-6">
                        <?php endif; ?>
                        <p class="text-gray-700 leading-relaxed mb-4"><?php echo e($profil->tentang); ?></p>

                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="border-l-4 border-blue-600 pl-4">
                                <p class="text-sm text-gray-600">NPSN</p>
                                <p class="font-semibold text-gray-800"><?php echo e($profil->npsn ?? '-'); ?></p>
                            </div>
                            <div class="border-l-4 border-green-600 pl-4">
                                <p class="text-sm text-gray-600">Akreditasi</p>
                                <p class="font-semibold text-gray-800"><?php echo e($profil->akreditasi ?? '-'); ?></p>
                            </div>
                            <div class="border-l-4 border-purple-600 pl-4">
                                <p class="text-sm text-gray-600">Kepala Sekolah</p>
                                <p class="font-semibold text-gray-800"><?php echo e($profil->kepala_sekolah ?? '-'); ?></p>
                            </div>
                            <div class="border-l-4 border-orange-600 pl-4">
                                <p class="text-sm text-gray-600">Status</p>
                                <p class="font-semibold text-green-600">SEKOLAH GRATIS</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Menu Profil</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo e(route('profil.index')); ?>"
                                class="block px-4 py-2 text-blue-600 bg-blue-50 rounded hover:bg-blue-100">Tentang
                                Sekolah</a></li>
                        <li><a href="<?php echo e(route('profil.visi-misi')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Visi & Misi</a></li>
                        <li><a href="<?php echo e(route('profil.sejarah')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Sejarah</a></li>
                        <li><a href="<?php echo e(route('profil.guru')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Guru</a></li>
                        <li><a href="<?php echo e(route('profil.staff')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Staff</a></li>
                        <li><a href="<?php echo e(route('profil.fasilitas')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Fasilitas</a></li>
                        <li><a href="<?php echo e(route('profil.ekstrakurikuler')); ?>"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Ekstrakurikuler</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/profil/index.blade.php ENDPATH**/ ?>
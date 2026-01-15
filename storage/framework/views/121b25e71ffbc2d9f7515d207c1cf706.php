<?php $__env->startSection('title', 'Guru & Staff'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Guru & Tenaga Pendidik</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <?php if($kepalaSekolah): ?>
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kepala Sekolah</h2>
                <div class="bg-white rounded-lg shadow p-8 max-w-2xl mx-auto">
                    <div class="flex flex-col md:flex-row items-center">
                        <?php if($kepalaSekolah->foto): ?>
                            <img src="<?php echo e(asset('storage/' . $kepalaSekolah->foto)); ?>" alt="<?php echo e($kepalaSekolah->nama); ?>"
                                class="w-40 h-40 rounded-full object-cover mb-4 md:mb-0 md:mr-8">
                        <?php else: ?>
                            <div
                                class="w-40 h-40 rounded-full bg-blue-100 flex items-center justify-center mb-4 md:mb-0 md:mr-8">
                                <span
                                    class="text-5xl text-blue-600 font-bold"><?php echo e(substr($kepalaSekolah->nama, 0, 1)); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2"><?php echo e($kepalaSekolah->nama); ?></h3>
                            <p class="text-gray-600 mb-2"><?php echo e($kepalaSekolah->jabatan); ?></p>
                            <p class="text-sm text-gray-500 mb-2"><?php echo e($kepalaSekolah->pendidikan_terakhir); ?></p>
                            <?php if($kepalaSekolah->email): ?>
                                <p class="text-sm text-blue-600">📧 <?php echo e($kepalaSekolah->email); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Guru</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php $__empty_1 = true; $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="bg-white rounded-lg shadow p-6 text-center hover:shadow-lg transition">
                        <?php if($item->foto): ?>
                            <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" alt="<?php echo e($item->nama); ?>"
                                class="w-32 h-32 rounded-full object-cover mx-auto mb-4">
                        <?php else: ?>
                            <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4">
                                <span class="text-3xl text-gray-500 font-bold"><?php echo e(substr($item->nama, 0, 1)); ?></span>
                            </div>
                        <?php endif; ?>
                        <h3 class="text-lg font-semibold text-gray-800 mb-1"><?php echo e($item->nama); ?></h3>
                        <p class="text-sm text-gray-600 mb-1"><?php echo e($item->jabatan); ?></p>
                        <?php if($item->mata_pelajaran): ?>
                            <p class="text-sm text-blue-600 font-medium"><?php echo e($item->mata_pelajaran); ?></p>
                        <?php endif; ?>
                        <p class="text-xs text-gray-500 mt-2"><?php echo e($item->pendidikan_terakhir); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-4 text-center py-12 text-gray-500">Belum ada data guru</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/profil/guru.blade.php ENDPATH**/ ?>
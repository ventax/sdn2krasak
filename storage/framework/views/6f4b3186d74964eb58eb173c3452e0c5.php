<?php $__env->startSection('title', 'Ekstrakurikuler'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Ekstrakurikuler</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $ekstrakurikuler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    <div class="flex flex-col md:flex-row">
                        <?php if($item->gambar): ?>
                            <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->nama); ?>"
                                class="w-full md:w-48 h-48 object-cover">
                        <?php else: ?>
                            <div
                                class="w-full md:w-48 h-48 bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center">
                                <span class="text-white text-6xl">⭐</span>
                            </div>
                        <?php endif; ?>
                        <div class="p-6 flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo e($item->nama); ?></h3>
                            <?php if($item->deskripsi): ?>
                                <p class="text-gray-600 mb-4"><?php echo e($item->deskripsi); ?></p>
                            <?php endif; ?>
                            <div class="space-y-2 text-sm text-gray-700">
                                <?php if($item->pembina): ?>
                                    <p><span class="font-semibold">Pembina:</span> <?php echo e($item->pembina); ?></p>
                                <?php endif; ?>
                                <?php if($item->hari): ?>
                                    <p><span class="font-semibold">Jadwal:</span> <?php echo e($item->hari); ?>

                                        <?php echo e($item->waktu ? ', ' . $item->waktu : ''); ?></p>
                                <?php endif; ?>
                                <?php if($item->tempat): ?>
                                    <p><span class="font-semibold">Tempat:</span> <?php echo e($item->tempat); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-2 text-center py-12 text-gray-500">Belum ada data ekstrakurikuler</div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/profil/ekstrakurikuler.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Fasilitas'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Fasilitas Sekolah</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    <?php if($item->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->nama); ?>"
                            class="w-full h-48 object-cover">
                    <?php else: ?>
                        <div
                            class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <span class="text-white text-6xl">🏢</span>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo e($item->nama); ?></h3>
                        <?php if($item->deskripsi): ?>
                            <p class="text-gray-600 mb-4"><?php echo e($item->deskripsi); ?></p>
                        <?php endif; ?>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Jumlah: <?php echo e($item->jumlah); ?></span>
                            <span
                                class="px-3 py-1 rounded-full text-sm font-semibold
                        <?php if($item->kondisi == 'baik'): ?> bg-green-100 text-green-800
                        <?php elseif($item->kondisi == 'rusak ringan'): ?> bg-yellow-100 text-yellow-800
                        <?php else: ?> bg-red-100 text-red-800 <?php endif; ?>">
                                <?php echo e(ucfirst($item->kondisi)); ?>

                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-3 text-center py-12 text-gray-500">Belum ada data fasilitas</div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/profil/fasilitas.blade.php ENDPATH**/ ?>
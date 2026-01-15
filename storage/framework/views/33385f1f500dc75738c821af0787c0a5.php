<?php $__env->startSection('title', 'Prestasi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Prestasi Sekolah</h1>
            <p class="mt-2 text-lg">Kebanggaan kami, inspirasi generasi masa depan</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-6 flex flex-wrap gap-2">
            <a href="<?php echo e(route('prestasi.index')); ?>"
                class="px-4 py-2 <?php echo e(!request('tingkat') ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700'); ?> rounded-lg">Semua</a>
            <a href="<?php echo e(route('prestasi.index', ['tingkat' => 'internasional'])); ?>"
                class="px-4 py-2 <?php echo e(request('tingkat') == 'internasional' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700'); ?> rounded-lg">Internasional</a>
            <a href="<?php echo e(route('prestasi.index', ['tingkat' => 'nasional'])); ?>"
                class="px-4 py-2 <?php echo e(request('tingkat') == 'nasional' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700'); ?> rounded-lg">Nasional</a>
            <a href="<?php echo e(route('prestasi.index', ['tingkat' => 'provinsi'])); ?>"
                class="px-4 py-2 <?php echo e(request('tingkat') == 'provinsi' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700'); ?> rounded-lg">Provinsi</a>
            <a href="<?php echo e(route('prestasi.index', ['tingkat' => 'kota'])); ?>"
                class="px-4 py-2 <?php echo e(request('tingkat') == 'kota' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700'); ?> rounded-lg">Kota</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    <?php if($item->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->nama_lomba); ?>"
                            class="w-full h-48 object-cover">
                    <?php else: ?>
                        <div
                            class="w-full h-48 bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center">
                            <span class="text-8xl">🏆</span>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <span
                            class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded mb-2"><?php echo e(ucfirst($item->tingkat)); ?></span>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo e($item->nama_lomba); ?></h3>
                        <div class="text-2xl font-bold text-yellow-600 mb-2"><?php echo e($item->juara); ?></div>

                        <?php if($item->nama_siswa): ?>
                            <p class="text-gray-700 mb-1"><span class="font-semibold">Siswa:</span> <?php echo e($item->nama_siswa); ?>

                                <?php echo e($item->kelas ? '(' . $item->kelas . ')' : ''); ?></p>
                        <?php endif; ?>

                        <?php if($item->pembimbing): ?>
                            <p class="text-gray-600 text-sm mb-1"><span class="font-semibold">Pembimbing:</span>
                                <?php echo e($item->pembimbing); ?></p>
                        <?php endif; ?>

                        <p class="text-gray-500 text-sm mb-2"><?php echo e($item->tanggal->format('d F Y')); ?></p>

                        <?php if($item->penyelenggara): ?>
                            <p class="text-gray-600 text-sm"><span class="font-semibold">Penyelenggara:</span>
                                <?php echo e($item->penyelenggara); ?></p>
                        <?php endif; ?>

                        <?php if($item->deskripsi): ?>
                            <p class="text-gray-600 mt-3"><?php echo e(Str::limit($item->deskripsi, 100)); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-3 text-center py-12 text-gray-500">Belum ada prestasi</div>
            <?php endif; ?>
        </div>

        <div class="mt-8">
            <?php echo e($prestasi->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/prestasi/index.blade.php ENDPATH**/ ?>
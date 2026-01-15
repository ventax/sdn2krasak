<?php $__env->startSection('title', 'Berita'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Berita & Artikel</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-6 flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
            <div>
                <form method="GET" class="flex space-x-2">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Cari berita..."
                        class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Cari</button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    <?php if($item->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>"
                            class="w-full h-48 object-cover">
                    <?php else: ?>
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400">No Image</span>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <?php if($item->kategori): ?>
                            <span
                                class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2"><?php echo e($item->kategori); ?></span>
                        <?php endif; ?>
                        <div class="text-sm text-gray-500 mb-2"><?php echo e($item->created_at->format('d M Y')); ?> •
                            <?php echo e($item->views); ?> views</div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2"><?php echo e($item->judul); ?></h3>
                        <p class="text-gray-600 mb-4 line-clamp-3"><?php echo e(Str::limit(strip_tags($item->konten), 120)); ?></p>
                        <a href="<?php echo e(route('berita.show', $item->slug)); ?>"
                            class="text-blue-600 hover:text-blue-800 font-semibold">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-3 text-center py-12 text-gray-500">Tidak ada berita ditemukan</div>
            <?php endif; ?>
        </div>

        <div class="mt-8">
            <?php echo e($berita->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/berita/index.blade.php ENDPATH**/ ?>
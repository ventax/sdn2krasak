<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stats Cards -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Berita</p>
                    <p class="text-2xl font-semibold text-gray-900"><?php echo e($stats['total_berita']); ?></p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Guru</p>
                    <p class="text-2xl font-semibold text-gray-900"><?php echo e($stats['total_guru']); ?></p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total PPDB</p>
                    <p class="text-2xl font-semibold text-gray-900"><?php echo e($stats['total_ppdb']); ?></p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">PPDB Pending</p>
                    <p class="text-2xl font-semibold text-gray-900"><?php echo e($stats['ppdb_pending']); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Berita Terbaru -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Berita Terbaru</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <?php $__empty_1 = true; $__currentLoopData = $berita_terbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900"><?php echo e($berita->judul); ?></h4>
                                <p class="text-sm text-gray-500 mt-1">
                                    <span class="font-medium"><?php echo e($berita->user->name); ?></span> •
                                    <?php echo e($berita->created_at->diffForHumans()); ?>

                                </p>
                            </div>
                            <span
                                class="text-xs px-2 py-1 rounded <?php echo e($berita->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800'); ?>">
                                <?php echo e($berita->is_published ? 'Published' : 'Draft'); ?>

                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-gray-500 text-center py-4">Belum ada berita</p>
                    <?php endif; ?>
                </div>
                <a href="<?php echo e(route('admin.berita.index')); ?>"
                    class="block text-center text-blue-600 hover:text-blue-800 mt-4">Lihat Semua →</a>
            </div>
        </div>

        <!-- PPDB Terbaru -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Pendaftaran PPDB Terbaru</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <?php $__empty_1 = true; $__currentLoopData = $ppdb_terbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaftar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="flex items-start justify-between pb-4 border-b border-gray-100 last:border-0">
                            <div>
                                <h4 class="font-medium text-gray-900"><?php echo e($pendaftar->nama_lengkap); ?></h4>
                                <p class="text-sm text-gray-500 mt-1"><?php echo e($pendaftar->no_pendaftaran); ?></p>
                                <p class="text-xs text-gray-400"><?php echo e($pendaftar->created_at->format('d M Y H:i')); ?></p>
                            </div>
                            <span
                                class="text-xs px-2 py-1 rounded
                        <?php if($pendaftar->status == 'pending'): ?> bg-yellow-100 text-yellow-800
                        <?php elseif($pendaftar->status == 'diterima'): ?> bg-green-100 text-green-800
                        <?php else: ?> bg-red-100 text-red-800 <?php endif; ?>">
                                <?php echo e(ucfirst($pendaftar->status)); ?>

                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-gray-500 text-center py-4">Belum ada pendaftar</p>
                    <?php endif; ?>
                </div>
                <a href="<?php echo e(route('admin.ppdb.index')); ?>"
                    class="block text-center text-blue-600 hover:text-blue-800 mt-4">Lihat Semua →</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
<?php $__env->startSection('page-title', 'Manajemen Berita'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Berita</h2>
        <a href="<?php echo e(route('admin.berita.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Tambah Berita
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900"><?php echo e($item->judul); ?></div>
                            <div class="text-sm text-gray-500"><?php echo e($item->created_at->format('d M Y')); ?></div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($item->kategori ?? '-'); ?></td>
                        <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($item->user->name); ?></td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo e($item->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800'); ?>">
                                <?php echo e($item->is_published ? 'Published' : 'Draft'); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($item->views); ?></td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="<?php echo e(route('admin.berita.edit', $item)); ?>"
                                class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                            <form action="<?php echo e(route('admin.berita.destroy', $item)); ?>" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada data berita</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($berita->links()); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/admin/berita/index.blade.php ENDPATH**/ ?>
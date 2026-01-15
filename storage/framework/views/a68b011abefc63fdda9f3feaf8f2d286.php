<?php $__env->startSection('page-title', 'Manajemen PPDB'); ?>
<?php $__env->startSection('content'); ?>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Pendaftar PPDB</h2>
    </div>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No Pendaftaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Daftar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $ppdb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900"><?php echo e($item->no_pendaftaran); ?></td>
                        <td class="px-6 py-4 text-sm text-gray-900"><?php echo e($item->nama_lengkap); ?></td>
                        <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($item->created_at->format('d M Y H:i')); ?></td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                        <?php if($item->status == 'pending'): ?> bg-yellow-100 text-yellow-800
                        <?php elseif($item->status == 'diterima'): ?> bg-green-100 text-green-800
                        <?php else: ?> bg-red-100 text-red-800 <?php endif; ?>">
                                <?php echo e(ucfirst($item->status)); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="<?php echo e(route('admin.ppdb.show', $item)); ?>"
                                class="text-blue-600 hover:text-blue-900 mr-3">Detail</a>
                            <a href="<?php echo e(route('admin.ppdb.edit', $item)); ?>"
                                class="text-green-600 hover:text-green-900 mr-3">Update</a>
                            <form action="<?php echo e(route('admin.ppdb.destroy', $item)); ?>" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada pendaftar</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="mt-4"><?php echo e($ppdb->links()); ?></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/admin/ppdb/index.blade.php ENDPATH**/ ?>
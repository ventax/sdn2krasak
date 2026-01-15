<?php $__env->startSection('page-title', 'Kelola Prestasi'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Kelola Prestasi</h2>
        <a href="<?php echo e(route('admin.prestasi.create')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
            + Tambah Prestasi
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Lomba</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Juara</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Siswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tingkat</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-6 py-4">
                            <?php if($item->gambar): ?>
                                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" class="h-12 w-12 object-cover rounded">
                            <?php else: ?>
                                <div class="h-12 w-12 bg-gray-200 rounded"></div>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4"><?php echo e($item->nama_lomba); ?></td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-800 font-semibold">
                                <?php echo e($item->juara); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4"><?php echo e($item->nama_siswa ?? '-'); ?></td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded bg-blue-100 text-blue-800">
                                <?php echo e(ucfirst($item->tingkat)); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4"><?php echo e($item->tanggal->format('d/m/Y')); ?></td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="<?php echo e(route('admin.prestasi.edit', $item)); ?>"
                                class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="<?php echo e(route('admin.prestasi.destroy', $item)); ?>" method="POST"
                                onsubmit="return confirm('Yakin hapus?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($prestasi->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/admin/prestasi/index.blade.php ENDPATH**/ ?>
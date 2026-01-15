<?php $__env->startSection('page-title', 'Profil Sekolah'); ?>
<?php $__env->startSection('content'); ?>
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Profil Sekolah</h2>
        <?php if($profil): ?>
            <a href="<?php echo e(route('admin.profil-sekolah.edit')); ?>"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Edit Profil</a>
        <?php endif; ?>
    </div>

    <?php if($profil): ?>
        <div class="bg-white rounded-lg shadow p-6">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-lg mb-4">Informasi Dasar</h3>
                    <div class="space-y-2">
                        <p><span class="font-medium">Nama Sekolah:</span> <?php echo e($profil->nama_sekolah); ?></p>
                        <p><span class="font-medium">NPSN:</span> <?php echo e($profil->npsn); ?></p>
                        <p><span class="font-medium">Akreditasi:</span> <?php echo e($profil->akreditasi); ?></p>
                        <p><span class="font-medium">Kepala Sekolah:</span> <?php echo e($profil->kepala_sekolah); ?></p>
                        <p><span class="font-medium">Email:</span> <?php echo e($profil->email); ?></p>
                        <p><span class="font-medium">Telepon:</span> <?php echo e($profil->telepon); ?></p>
                        <p><span class="font-medium">Website:</span> <?php echo e($profil->website); ?></p>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-4">Alamat</h3>
                    <div class="space-y-2">
                        <p><?php echo e($profil->alamat); ?></p>
                        <p><?php echo e($profil->kelurahan); ?>, <?php echo e($profil->kecamatan); ?></p>
                        <p><?php echo e($profil->kota); ?>, <?php echo e($profil->provinsi); ?> <?php echo e($profil->kode_pos); ?></p>
                    </div>
                    <?php if($profil->logo || $profil->foto_sekolah): ?>
                        <div class="mt-4">
                            <h3 class="font-semibold mb-2">Media</h3>
                            <div class="flex space-x-4">
                                <?php if($profil->logo): ?>
                                    <div>
                                        <p class="text-sm text-gray-600">Logo</p>
                                        <img src="<?php echo e(asset('storage/' . $profil->logo)); ?>"
                                            class="w-24 h-24 object-contain">
                                    </div>
                                <?php endif; ?>
                                <?php if($profil->foto_sekolah): ?>
                                    <div>
                                        <p class="text-sm text-gray-600">Foto Sekolah</p>
                                        <img src="<?php echo e(asset('storage/' . $profil->foto_sekolah)); ?>"
                                            class="w-32 h-24 object-cover">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center">
            <p class="text-yellow-800 mb-4">Profil sekolah belum diatur</p>
            <a href="<?php echo e(route('admin.profil-sekolah.edit')); ?>"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Atur Profil</a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/admin/profil-sekolah/index.blade.php ENDPATH**/ ?>
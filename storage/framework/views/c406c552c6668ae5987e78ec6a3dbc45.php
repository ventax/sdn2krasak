<?php $__env->startSection('page-title', 'Edit Prestasi'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Prestasi</h2>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="<?php echo e(route('admin.prestasi.update', $prestasi)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nama Lomba</label>
                <input type="text" name="nama_lomba" value="<?php echo e(old('nama_lomba', $prestasi->nama_lomba)); ?>" required
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <?php $__errorArgs = ['nama_lomba'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"><?php echo e(old('deskripsi', $prestasi->deskripsi)); ?></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Juara</label>
                    <input type="text" name="juara" value="<?php echo e(old('juara', $prestasi->juara)); ?>" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tingkat</label>
                    <select name="tingkat" required
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="sekolah" <?php echo e($prestasi->tingkat == 'sekolah' ? 'selected' : ''); ?>>Sekolah</option>
                        <option value="kecamatan" <?php echo e($prestasi->tingkat == 'kecamatan' ? 'selected' : ''); ?>>Kecamatan
                        </option>
                        <option value="kota" <?php echo e($prestasi->tingkat == 'kota' ? 'selected' : ''); ?>>Kabupaten/Kota
                        </option>
                        <option value="provinsi" <?php echo e($prestasi->tingkat == 'provinsi' ? 'selected' : ''); ?>>Provinsi</option>
                        <option value="nasional" <?php echo e($prestasi->tingkat == 'nasional' ? 'selected' : ''); ?>>Nasional</option>
                        <option value="internasional" <?php echo e($prestasi->tingkat == 'internasional' ? 'selected' : ''); ?>>
                            Internasional</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="<?php echo e(old('nama_siswa', $prestasi->nama_siswa)); ?>"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input type="text" name="kelas" value="<?php echo e(old('kelas', $prestasi->kelas)); ?>"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Pembimbing</label>
                    <input type="text" name="pembimbing" value="<?php echo e(old('pembimbing', $prestasi->pembimbing)); ?>"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Penyelenggara</label>
                    <input type="text" name="penyelenggara" value="<?php echo e(old('penyelenggara', $prestasi->penyelenggara)); ?>"
                        class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                    <input type="date" name="tanggal" value="<?php echo e(old('tanggal', $prestasi->tanggal->format('Y-m-d'))); ?>"
                        required class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Gambar</label>
                <?php if($prestasi->gambar): ?>
                    <img src="<?php echo e(asset('storage/' . $prestasi->gambar)); ?>" class="mb-2 h-32 object-cover rounded">
                <?php endif; ?>
                <input type="file" name="gambar" accept="image/*"
                    class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar</p>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Update
                </button>
                <a href="<?php echo e(route('admin.prestasi.index')); ?>"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/admin/prestasi/edit.blade.php ENDPATH**/ ?>
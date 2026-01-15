<?php $__env->startSection('title', 'Pendaftaran PPDB - ' . ($profil->nama_sekolah ?? 'Sekolah')); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="text-center">
                    <span class="inline-block bg-yellow-400 text-gray-900 text-xs font-bold px-4 py-2 rounded-full mb-4">
                        🎓 100% GRATIS - TANPA BIAYA SPP
                    </span>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Formulir Pendaftaran PPDB</h1>
                    <p class="text-gray-600"><?php echo e($profil->nama_sekolah ?? 'Sekolah Gratis'); ?></p>
                    <p class="text-sm text-green-600 font-semibold mt-2">✓ Pendidikan Berkualitas Tanpa Biaya</p>
                </div>
            </div>

            <?php if($errors->any()): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Terdapat kesalahan:</h3>
                            <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('ppdb.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                <?php echo csrf_field(); ?>

                <!-- Data Pribadi -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Data Pribadi Siswa
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="nama_lengkap" value="<?php echo e(old('nama_lengkap')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">NIK <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="nik" value="<?php echo e(old('nik')); ?>" required maxlength="16"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir <span
                                    class="text-red-500">*</span></label>
                            <input type="date" name="tanggal_lahir" value="<?php echo e(old('tanggal_lahir')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin <span
                                    class="text-red-500">*</span></label>
                            <select name="jenis_kelamin" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Pilih...</option>
                                <option value="L" <?php echo e(old('jenis_kelamin') == 'L' ? 'selected' : ''); ?>>Laki-laki
                                </option>
                                <option value="P" <?php echo e(old('jenis_kelamin') == 'P' ? 'selected' : ''); ?>>Perempuan
                                </option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Agama <span
                                    class="text-red-500">*</span></label>
                            <select name="agama" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Pilih...</option>
                                <option value="Islam" <?php echo e(old('agama') == 'Islam' ? 'selected' : ''); ?>>Islam</option>
                                <option value="Kristen" <?php echo e(old('agama') == 'Kristen' ? 'selected' : ''); ?>>Kristen</option>
                                <option value="Katolik" <?php echo e(old('agama') == 'Katolik' ? 'selected' : ''); ?>>Katolik</option>
                                <option value="Hindu" <?php echo e(old('agama') == 'Hindu' ? 'selected' : ''); ?>>Hindu</option>
                                <option value="Buddha" <?php echo e(old('agama') == 'Buddha' ? 'selected' : ''); ?>>Buddha</option>
                                <option value="Konghucu" <?php echo e(old('agama') == 'Konghucu' ? 'selected' : ''); ?>>Konghucu
                                </option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap <span
                                    class="text-red-500">*</span></label>
                            <textarea name="alamat" rows="3" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"><?php echo e(old('alamat')); ?></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">No. Telepon/HP <span
                                    class="text-red-500">*</span></label>
                            <input type="tel" name="no_hp" value="<?php echo e(old('no_hp')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Data Orang Tua -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Data Orang Tua/Wali
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Ayah <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="nama_ayah" value="<?php echo e(old('nama_ayah')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Ibu <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="nama_ibu" value="<?php echo e(old('nama_ibu')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan_ayah" value="<?php echo e(old('pekerjaan_ayah')); ?>"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaan_ibu" value="<?php echo e(old('pekerjaan_ibu')); ?>"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">No. HP Orang Tua <span
                                    class="text-red-500">*</span></label>
                            <input type="tel" name="no_hp_ortu" value="<?php echo e(old('no_hp_ortu')); ?>" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Upload Dokumen -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        Upload Dokumen Pendaftaran
                    </h2>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                        <p class="text-sm text-yellow-700">
                            <strong>Catatan:</strong> Upload dokumen dalam format JPG, PNG, atau PDF (max 2MB per file)
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pas Foto 3x4 <span
                                    class="text-red-500">*</span></label>
                            <input type="file" name="foto" required accept="image/*"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kartu Keluarga <span
                                    class="text-red-500">*</span></label>
                            <input type="file" name="kartu_keluarga" required accept="image/*,application/pdf"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Akta Kelahiran <span
                                    class="text-red-500">*</span></label>
                            <input type="file" name="akta_lahir" required accept="image/*,application/pdf"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ijazah/SKL <span
                                    class="text-red-500">*</span></label>
                            <input type="file" name="ijazah" required accept="image/*,application/pdf"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700">
                                    <strong>Ingat:</strong> Pendaftaran ini 100% GRATIS. Anda tidak akan dikenakan biaya
                                    apapun selama proses pendaftaran maupun selama bersekolah. Tidak ada SPP, tidak ada
                                    biaya gedung, tidak ada pungutan lainnya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start mb-4">
                        <input type="checkbox" name="persetujuan" required
                            class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label class="ml-2 text-sm text-gray-700">
                            Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan. <span
                                class="text-red-500">*</span>
                        </label>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="submit"
                            class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Daftar Sekarang
                        </button>
                        <a href="<?php echo e(route('ppdb.index')); ?>"
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-lg transition duration-200 text-center">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/ppdb/create.blade.php ENDPATH**/ ?>
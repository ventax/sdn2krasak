<?php $__env->startSection('title', 'PPDB - Pendaftaran Siswa Baru'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-gradient-to-r from-green-600 to-blue-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-4">Pendaftaran Peserta Didik Baru</h1>
            <p class="text-2xl mb-2">SEKOLAH GRATIS - TANPA BIAYA PENDAFTARAN & SPP</p>
            <p class="text-xl opacity-90">Daftar sekarang dan wujudkan impian masa depanmu!</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="bg-white rounded-lg shadow p-6 text-center hover:shadow-lg transition">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Daftar Online</h3>
                    <p class="text-gray-600 mb-6">Isi formulir pendaftaran secara online dan unggah dokumen yang diperlukan
                    </p>
                    <a href="<?php echo e(route('ppdb.create')); ?>"
                        class="bg-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-700 inline-block">
                        Daftar Sekarang
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow p-6 text-center hover:shadow-lg transition">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Cek Status</h3>
                    <p class="text-gray-600 mb-6">Pantau status pendaftaran Anda dengan memasukkan nomor pendaftaran</p>
                    <a href="<?php echo e(route('ppdb.cek')); ?>"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 inline-block">
                        Cek Status
                    </a>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-8">
                <h3 class="text-xl font-bold text-yellow-900 mb-2">🎓 SEKOLAH 100% GRATIS!</h3>
                <ul class="text-yellow-800 space-y-1">
                    <li>✓ Tanpa biaya pendaftaran</li>
                    <li>✓ Tanpa biaya SPP bulanan</li>
                    <li>✓ Tanpa biaya seragam (bantuan pemerintah)</li>
                    <li>✓ Program Indonesia Pintar (PIP) tersedia</li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Persyaratan Pendaftaran</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Ijazah/SKHUN (asli dan fotokopi)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Akta Kelahiran (fotokopi)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Kartu Keluarga (fotokopi)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Foto ukuran 3x4 (3 lembar)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Kartu NISN</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Alur Pendaftaran</h3>
                    <ol class="space-y-3">
                        <li class="flex">
                            <span
                                class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">1</span>
                            <span class="text-gray-700">Isi formulir pendaftaran online</span>
                        </li>
                        <li class="flex">
                            <span
                                class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">2</span>
                            <span class="text-gray-700">Unggah dokumen persyaratan</span>
                        </li>
                        <li class="flex">
                            <span
                                class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">3</span>
                            <span class="text-gray-700">Dapatkan nomor pendaftaran</span>
                        </li>
                        <li class="flex">
                            <span
                                class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">4</span>
                            <span class="text-gray-700">Tunggu pengumuman hasil seleksi</span>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="bg-blue-50 rounded-lg p-8 mt-8 text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Butuh Bantuan?</h3>
                <p class="text-gray-700 mb-6">Hubungi kami untuk informasi lebih lanjut tentang pendaftaran</p>
                <a href="<?php echo e(route('kontak.index')); ?>"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 inline-block">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\website-sekolah\resources\views/ppdb/index.blade.php ENDPATH**/ ?>
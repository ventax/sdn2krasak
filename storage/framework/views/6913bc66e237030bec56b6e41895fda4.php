<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h2 class="text-2xl font-bold">Admin Panel</h2>
                <p class="text-sm text-gray-400">Website Sekolah</p>
            </div>
            <nav class="mt-4">
                <a href="<?php echo e(route('admin.dashboard')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gray-700' : ''); ?>">
                    Dashboard
                </a>
                <a href="<?php echo e(route('admin.profil-sekolah.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.profil-sekolah.*') ? 'bg-gray-700' : ''); ?>">
                    Profil Sekolah
                </a>
                <a href="<?php echo e(route('admin.berita.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.berita.*') ? 'bg-gray-700' : ''); ?>">
                    Berita
                </a>
                <a href="<?php echo e(route('admin.pengumuman.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.pengumuman.*') ? 'bg-gray-700' : ''); ?>">
                    Pengumuman
                </a>
                <a href="<?php echo e(route('admin.guru-staff.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.guru-staff.*') ? 'bg-gray-700' : ''); ?>">
                    Guru & Staff
                </a>
                <a href="<?php echo e(route('admin.fasilitas.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.fasilitas.*') ? 'bg-gray-700' : ''); ?>">
                    Fasilitas
                </a>
                <a href="<?php echo e(route('admin.ekstrakurikuler.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.ekstrakurikuler.*') ? 'bg-gray-700' : ''); ?>">
                    Ekstrakurikuler
                </a>
                <a href="<?php echo e(route('admin.prestasi.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.prestasi.*') ? 'bg-gray-700' : ''); ?>">
                    Prestasi
                </a>
                <a href="<?php echo e(route('admin.galeri.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.galeri.*') ? 'bg-gray-700' : ''); ?>">
                    Galeri
                </a>
                <a href="<?php echo e(route('admin.ppdb.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.ppdb.*') ? 'bg-gray-700' : ''); ?>">
                    PPDB
                </a>
                <a href="<?php echo e(route('admin.kalender-akademik.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.kalender-akademik.*') ? 'bg-gray-700' : ''); ?>">
                    Kalender Akademik
                </a>
                <a href="<?php echo e(route('admin.downloads.index')); ?>"
                    class="block px-4 py-3 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.downloads.*') ? 'bg-gray-700' : ''); ?>">
                    Downloads
                </a>
                <hr class="my-4 border-gray-700">
                <a href="<?php echo e(route('home')); ?>" target="_blank" class="block px-4 py-3 hover:bg-gray-700">
                    Lihat Website
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-6 py-4">
                    <h1 class="text-2xl font-semibold text-gray-800"><?php echo $__env->yieldContent('page-title'); ?></h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600"><?php echo e(auth()->user()->name ?? 'Admin'); ?></span>
                        <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6">
                <?php if(session('success')): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                <?php if($errors->any()): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\website-sekolah\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
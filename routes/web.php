<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaPublicController;
use App\Http\Controllers\GaleriPublicController;
use App\Http\Controllers\PrestasiPublicController;
use App\Http\Controllers\PpdbPublicController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\DownloadPublicController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\GuruStaffController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PpdbController;
use App\Http\Controllers\Admin\KalenderAkademikController;
use App\Http\Controllers\Admin\DownloadController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard route (redirect to admin dashboard)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware('auth')->name('dashboard');

// Profil Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('index');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');
    Route::get('/guru', [ProfilController::class, 'guru'])->name('guru');
    Route::get('/staff', [ProfilController::class, 'staff'])->name('staff');
    Route::get('/fasilitas', [ProfilController::class, 'fasilitas'])->name('fasilitas');
    Route::get('/ekstrakurikuler', [ProfilController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
});

// Berita Routes
Route::get('/berita', [BeritaPublicController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaPublicController::class, 'show'])->name('berita.show');

// Galeri Routes
Route::get('/galeri', [GaleriPublicController::class, 'index'])->name('galeri.index');
Route::get('/galeri/{galeri}', [GaleriPublicController::class, 'show'])->name('galeri.show');

// Prestasi Route
Route::get('/prestasi', [PrestasiPublicController::class, 'index'])->name('prestasi.index');

// PPDB Routes
Route::prefix('ppdb')->name('ppdb.')->group(function () {
    Route::get('/', [PpdbPublicController::class, 'index'])->name('index');
    Route::get('/create', [PpdbPublicController::class, 'create'])->name('create');
    Route::post('/store', [PpdbPublicController::class, 'store'])->name('store');
    Route::get('/cek', [PpdbPublicController::class, 'cek'])->name('cek');
    Route::post('/status', [PpdbPublicController::class, 'status'])->name('status');
});

// Kalender Akademik Route
Route::get('/kalender', [KalenderController::class, 'index'])->name('kalender.index');

// Download Routes
Route::get('/downloads', [DownloadPublicController::class, 'index'])->name('downloads.index');

// Kontak Route
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Admin Routes
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->middleware('auth');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profil Sekolah
    Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah.index');
    Route::get('/profil-sekolah/edit', [ProfilSekolahController::class, 'edit'])->name('profil-sekolah.edit');
    Route::put('/profil-sekolah', [ProfilSekolahController::class, 'update'])->name('profil-sekolah.update');

    // Resource Routes
    Route::resource('berita', BeritaController::class)->parameters(['berita' => 'berita']);
    Route::resource('pengumuman', PengumumanController::class)->parameters(['pengumuman' => 'pengumuman']);
    Route::resource('guru-staff', GuruStaffController::class);
    Route::resource('fasilitas', FasilitasController::class)->parameters(['fasilitas' => 'fasilitas']);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class)->parameters(['ekstrakurikuler' => 'ekstrakurikuler']);
    Route::resource('prestasi', PrestasiController::class)->parameters(['prestasi' => 'prestasi']);
    Route::resource('galeri', GaleriController::class)->parameters(['galeri' => 'galeri']);
    Route::resource('ppdb', PpdbController::class)->except(['create', 'store']);
    Route::resource('kalender-akademik', KalenderAkademikController::class);
    Route::resource('downloads', DownloadController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

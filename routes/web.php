<?php

use App\Http\Controllers\cekController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\PanduanController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BeritaController::class, 'home'])->name('index');

// Profil Kami
Route::get('/sejarah', function () {
    return view('user/sejarah');
});

Route::get('/visi-misi', function () {
    return view('user/visi-misi');
});

Route::get('/struktur', function () {
    return view('user/struktur');
});

Route::get('/sambutan', function () {
    return view('profile.sambutan');
});

Route::get('/profil', function () {
    return view('user/profil');
});

Route::get('/fasilitas', function () {
    return view('user/fasilitas');
});

Route::get('/unit-kerja', function () {
    return view('user/unit');
});

Route::get('/daftar', function () {
    return view('user/daftar');
});

Route::get('/cek', function () {
    return view('user/cek');
});

// Route::get('/panduan', function () {
//     return view('user/panduan');
// });

Route::get('/data-pendaftar', function () {
    return view('admin/pendaftar');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/panduan', [PanduanController::class, 'user'])->name('panduan.user');

// cek status
Route::post('/cek/show_status', [cekController::class, 'show'])->name('cek.show-status');

Route::get('/Pendaftaran', [DaftarController::class, 'index'])->name('daftar.index');

// route siswa pendaftar
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.create');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store');

// login admin
Route::prefix('admin')->group(function () {
    // Login routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Protected routes (harus login)
    Route::middleware('auth:admin')->group(function () {
        // Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('admin.pendaftar');
        Route::get('/data-pendaftar', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/admin/pendaftar', [AdminController::class, 'pendaftar'])->name('admin.pendaftar');
        Route::get('/admin/pendaftar/{nisn}/edit', [AdminController::class, 'edit'])->name('admin.pendaftar.edit');
        Route::get('/admin/pendaftar/detail/{id}', [AdminController::class, 'detail'])->name('admin.pendaftar.detail');
        Route::put('/admin/pendaftar/status', [AdminController::class, 'updateStatus'])->name('admin.pendaftar.status');
        Route::delete('/admin/pendaftar/delete/{id}', [AdminController::class, 'destroy'])->name('admin.pendaftar.delete');
        // berita
        Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
        Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
        Route::post('/admin/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
        Route::get('/admin/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
        Route::put('/admin/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
        Route::delete('/admin/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
        // pengumuman
        Route::get('/pengumuman', [PanduanController::class, 'index'])->name('admin.pengumuman.index');
       
        Route::get('/tambahPengumuman', [PanduanController::class, 'create'])->name('admin.pengumuman.create');
        Route::post('/storepengumuman', [PanduanController::class, 'store'])->name('admin.pengumuman.store');
         Route::put('/update_status_pengumuman/{id}', [PanduanController::class, 'update'])->name('admin.status_pengumuman.update');
         Route::put('/disable_status_pengumuman/{id}', [PanduanController::class, 'disable'])->name('admin.status_pengumuman.disable');
        Route::delete('/hapuspengumuman', [PanduanController::class, 'destroy'])->name('admin.pengumuman.destroy');
    });
});

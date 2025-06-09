<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProdukAdminController;
use App\Http\Controllers\Admin\EdukasiAdminController;
use App\Http\Controllers\Admin\GaleriAdminController;
use App\Http\Controllers\Admin\AccountController;

// ===========================
// Halaman Publik
// ===========================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// ===========================
// Autentikasi (tanpa register)
// ===========================
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// ===========================
// Redirect dashboard setelah login
// ===========================
Route::middleware(['auth'])->get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

// ===========================
// Admin Panel (akses hanya setelah login)
// ===========================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // CRUD Produk
    Route::resource('produk', ProdukAdminController::class);

    // CRUD Edukasi
    Route::resource('edukasi', EdukasiAdminController::class);

    // Galeri (khusus upload & hapus)
    Route::get('/galeri', [GaleriAdminController::class, 'index'])->name('galeri.index');
    Route::post('/galeri', [GaleriAdminController::class, 'store'])->name('galeri.store');
    Route::delete('/galeri/{galeri}', [GaleriAdminController::class, 'destroy'])->name('galeri.destroy');

    // Pengaturan Akun
    Route::get('/password', [AccountController::class, 'editPassword'])->name('password.change');
    Route::post('/password', [AccountController::class, 'updatePassword'])->name('password.update');

    // Tambah Admin Baru
    Route::get('/create-admin', [AccountController::class, 'createAdmin'])->name('create');
    Route::post('/create-admin', [AccountController::class, 'storeAdmin'])->name('store');
});

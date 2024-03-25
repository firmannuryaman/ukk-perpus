<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

Route::get('/', [BukuController::class, 'welcome'])->name('welcome');

// semua level admin user yang belum masuk
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/buku', [BukuController::class, 'index'])->name('buku');
    Route::get('/buku/tambah', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/delete/{id}', [BukuController::class, 'delete'])->name('buku.delete');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::patch('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
    Route::get('/peminjaman/create', [PeminjamanController::class, 'tambahPeminjaman'])->name('peminjaman.create');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'storePeminjaman'])->name('peminjaman.store');
    Route::post('/selesai/{id}', [PeminjamanController::class, 'kembalikanBuku'])->name('peminjaman.kembalikan');
    Route::get('/report', [PeminjamanController::class, 'print'])->name('print');
});

//user
Route::get('/user/peminjaman', [PeminjamanController::class, 'userPeminjaman'])->name('peminjaman.user')
    ->middleware(['auth', 'role:user']);
Route::get('/detail/{id}', [BukuController::class, 'detail'])->name('detail');

// Route::get('/user/detail/{id}', [BukuController::class, 'detail'])->name('detail');

require __DIR__ . '/auth.php';

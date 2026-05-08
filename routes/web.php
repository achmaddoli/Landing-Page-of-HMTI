<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FungsionarisController;

// layanan
Route::get('/bph', function () {
    return view('layanan.layanan1');
});
Route::get('/internal', function () {
    return view('layanan.layanan2');
});
Route::get('/psdm', function () {
    return view('layanan.layanan3');
});
Route::get('/rmb', function () {
    return view('layanan.layanan4');
});
Route::get('/eksternal', function () {
    return view('layanan.layanan5');
});
Route::get('/kominfo', function () {
    return view('layanan.layanan6');
});

// profil
Route::get('/profil', [FungsionarisController::class, 'tampil'])->name('profil');

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// news
Route::get('/news', [NewsController::class, 'tampil'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// login dan logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// autentikasi
Route::middleware(['auth'])->group(function () {
    // jabatan
    Route::get('/admin/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
    Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::post('/jabatan/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/jabatan/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');
    Route::resource('jabatan', JabatanController::class);

    // karyawan
    Route::get('/admin/pegawai', [FungsionarisController::class, 'index'])->name('fungsionaris.index');
    Route::get('/pegawai/create', [FungsionarisController::class, 'create'])->name('fungsionaris.create');
    Route::post('/pegawai', [FungsionarisController::class, 'store'])->name('fungsionaris.store');
    Route::get('/tambah-jabatan', [FungsionarisController::class, 'getJabatan'])->name('jabatan');
    Route::get('/pegawai/edit/{id}', [FungsionarisController::class, 'edit'])->name('fungsionaris.edit');
    Route::post('/pegawai/{id}', [FungsionarisController::class, 'update'])->name('fungsionaris.update');
    Route::delete('/pegawai/{id}', [FungsionarisController::class, 'destroy'])->name('fungsionaris.destroy');

    // news
    Route::get('/admin/berita', [NewsController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [NewsController::class, 'create'])->name('berita.create');
    Route::post('/berita', [NewsController::class, 'store'])->name('news.store');
    Route::get('/berita/edit/{id}', [NewsController::class, 'edit'])->name('berita.edit');
    Route::post('/berita/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/berita/{id}', [NewsController::class, 'destroy'])->name('berita.destroy');

    // profile
    Route::get('/admin/profile', [AdminController::class, 'index'])->name('profile.index');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('profile.edit');
    Route::post('/admin/{id}', [AdminController::class, 'update'])->name('profile.update');
});

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenelitianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ResearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Research', [ResearchController::class, 'index'])->name('research.index');
Route::get('/Information', [InfoController::class, 'index'])->name('information.index');
Route::get('/About', [AboutController::class, 'index'])->name('about.index');
Route::get('/research/detail/{id}', [ResearchController::class, 'detail'])->name('detail.penelitian');
// Admin Routes 
Route::middleware(['guest:admin'])->group(function () { // Guest khusus untuk guard admin
    Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
});

Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // {{-- ===== KELOLA DATA BERITA  ===== --}}
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');


    // {{-- ===== KELOLA DATA PENELITIAN  ===== --}}
    Route::get('/admin/penelitian', [PenelitianController::class, 'index'])->name('penelitian.index');
    Route::get('/admin/penelitian/create', [PenelitianController::class, 'create'])->name('penelitian.create');
    Route::post('//penelitian/store', [PenelitianController::class, 'store'])->name('penelitian.store');
    Route::get('//penelitian/{id}/edit', [PenelitianController::class, 'edit'])->name('penelitian.edit');
    Route::put('//penelitian/{id}/update', [PenelitianController::class, 'update'])->name('penelitian.update');
    Route::delete('//penelitian/{id}/delete', [PenelitianController::class, 'destroy'])->name('penelitian.destroy');
});

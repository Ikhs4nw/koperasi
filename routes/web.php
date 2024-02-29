<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:Admin'])->group(function () {
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    Route::get('/simpanan', [SimpananController::class, 'index'])->name('simpanan.index');
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
});

Route::middleware(['auth', 'verified', 'role:Anggota'])->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
});

Route::middleware(['auth', 'verified', 'role_or_permission:create-data|Admin'])->group(function () {
    Route::post('/simpanan', [SimpananController::class, 'store'])->name('simpanan.store');
    Route::post('/pinjaman', [PinjamanController::class, 'store'])->name('pinjaman.store');
});

Route::middleware(['auth', 'verified', 'role_or_permission:update-data|Admin'])->group(function () {
    Route::post('/simpanan/{id}', [SimpananController::class, 'update'])->name('simpanan.update');
    Route::post('/pinjaman/{id}', [PinjamanController::class, 'update'])->name('pinjaman.update');

});

Route::middleware(['auth', 'verified', 'role_or_permission:deleted-data|Admin'])->group(function () {
    Route::get('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
    Route::get('/simpanan/{id}/destroy', [SimpananController::class, 'destroy'])->name('simpanan.destroy');
    Route::get('/pinjaman/{id}/destroy', [PinjamanController::class, 'destroy'])->name('pinjaman.destroy');
});

Route::middleware(['auth', 'verified', 'role_or_permission:export-data|Admin'])->group(function () {
    Route::get('/simpanan/export/excel', [SimpananController::class, 'export_simpanan'])->name('simpanan.export');
    Route::get('/pinjaman/export/excel', [PinjamanController::class, 'export_pinjaman'])->name('pinjaman.export');
});

require __DIR__ . '/auth.php';

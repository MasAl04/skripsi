<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\HasilKerjaController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('karyawan', KaryawanController::class);
    Route::resource('pekerjaan', PekerjaanController::class);
    Route::resource('hasil', HasilKerjaController::class);

    Route::get('/gaji', [PenggajianController::class, 'index']);
    Route::get('/gaji/generate/{id}', [PenggajianController::class, 'generate']);
});

require __DIR__.'/auth.php';

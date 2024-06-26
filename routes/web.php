<?php

use App\Models\Kursus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\HargaPasarController;
use App\Http\Controllers\TitikKesuburanTanahController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/auth', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login Session
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

//Route Permintaan Tiap Halaman
Route::get('/kursus', [KursusController::class, 'index'])->middleware(['auth', 'verified'])->name('kursus');


Route::get('/kursus/{kursus:slug}', function (Kursus $kursus) {
    return view('detail-kursus', ['kursus' => $kursus]);
})->middleware(['auth', 'verified'])->name('kursus');

Route::get('/toko', [TokoController::class, 'index'])->middleware(['auth', 'verified'])->name('kursus');

Route::get('/harga-pasar', [HargaPasarController::class, 'index'])->middleware(['auth', 'verified'])->name('kursus');

Route::get('/titik-kesuburan-tanah', [TitikKesuburanTanahController::class, 'index'])->middleware(['auth', 'verified'])->name('kursus');

require __DIR__ . '/auth.php';

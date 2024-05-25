<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/auth', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login Session
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

//Route Permintaan Tiap Halaman
Route::get('/kursus', function () {
    return view('kursus', ['title' => 'Kursus']);
});

Route::get('/kursus/kursus-1', function() {
    return view('detail-kursus', ['title' => 'Single Post']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/jual-beli', function () {
    return view('jual-beli', ['title' => 'Jual Beli']);
});

Route::get('/harga-pasar', function () {
    return view('harga-pasar', ['title' => 'Harga Pasar']);
});

Route::get('/titik-kesuburan-tanah', function () {
    return view('titik-kesuburan-tanah', ['title' => 'Titik Kesuburan Tanah']);
});

require __DIR__.'/auth.php';

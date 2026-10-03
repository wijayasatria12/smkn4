<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $beritas = \App\Models\Berita::latest()->take(3)->get();
    $galeris = \App\Models\Galeri::latest()->take(6)->get();

    return view('welcome', compact('beritas', 'galeris'));
})->name('home');

Route::post('/feedback', [FeedbackController::class, 'store'])
    ->name('feedback.store');

Route::get('/tentang', function () {
    return view('Frontend.tentang.tentang');
})->name('tentang');

Route::get('/berita', [BeritaController::class, 'publicIndex'])
    ->name('berita');

Route::get('/detail/{berita}', [BeritaController::class, 'publicShow'])
    ->name('berita.detail');

Route::get('/galeri', function () {
    $galeris = \App\Models\Galeri::latest()->get();

    return view('Frontend.galeri.galeri', compact('galeris'));
})->name('galeri');

Route::get('/kontak', function () {
    return view('Frontend.kontak.kontak');
})->name('kontak');


// ================================
// LOGIN & LOGOUT
// ================================

Route::get('/login', [AuthController::class, 'index'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// ================================
// DASHBOARD
// ================================

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');


// ================================
// CRUD BERITA
// ================================

Route::resource('/dashboard/berita', BeritaController::class)
    ->names('dashboard.berita')
    ->parameters(['berita' => 'berita'])
    ->middleware('auth');


// ================================
// CRUD GALERI
// Tidak menggunakan halaman show
// ================================

Route::resource('/dashboard/galeri', GaleriController::class)
    ->names('dashboard.galeri')
    ->except(['show'])
    ->middleware('auth');

// ================================
// FEEDBACK
// ================================

Route::get('/dashboard/feedback', [FeedbackController::class, 'index'])
    ->name('dashboard.feedback')
    ->middleware('auth');

Route::delete('/dashboard/feedback/{feedback}', [FeedbackController::class, 'destroy'])
    ->name('dashboard.feedback.destroy')
    ->middleware('auth');

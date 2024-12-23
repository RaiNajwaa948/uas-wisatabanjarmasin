<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/profiles', [ProfileController::class, 'index']);

// Route untuk halaman utama
Route::get('/', [ProfileController::class, 'index'])->name('profil.index');

// Route untuk halaman Generic
Route::get('/generic', function () {
    return view('front.generic');
})->name('generic');

// Route untuk halaman Element
Route::get('/element', function () {
    return view('front.element');
})->name('element');
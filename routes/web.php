<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/profiles', [ProfileController::class, 'index']);

// Route untuk halaman utama
Route::get('/', function () {
    return view('front.index');
});

// Route untuk halaman Generic
Route::get('/generic', function () {
    return view('front.generic'); // Sesuai dengan file 'generic.blade.php'
})->name('generic');

// Route untuk halaman Element
Route::get('/element', function () {
    return view('front.element'); // Sesuai dengan file 'element.blade.php'
})->name('element');
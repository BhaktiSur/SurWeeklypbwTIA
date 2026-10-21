<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Surya Bhakti",
        "nim" => "13242520027",
        "prodi" => "S1 Teknologi Informasi",
        "gambar" => "/images/Surya.jpg"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

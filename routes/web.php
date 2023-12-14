<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| TUGAS UJIAN BNSP - CLUB MOTOR COMPANY PROFILE
|--------------------------------------------------------------------------
|
| Nama                  : Rizki Puji Lestari
| Organisasi / Lembaga  : Universitas Nurtanio
| HP                    : +6281322286797
| Email                 : rizkipuj@gmail.com
|
*/

// 1. Cover depan (wajib)
// 2. Kata pengantar (Optional)
Route::get('/', [ProfileController::class, 'index']);

// 3. About us atau tentang kami atau sejarah singkat (wajib)
Route::get('/about-us', [ProfileController::class, 'aboutUs']);

// 4. Visi Misi :
Route::get('/visi-dan-misi', [ProfileController::class, 'visiMisi']);

// 5. Profile, Pengalaman Perusahaan dan Kelebihan Perusahaan 
Route::get('/profile', [ProfileController::class, 'profile']);

// 6. Produk / Jasa Perusahaan (wajib)
Route::get('/products', [ProductController::class, 'index']);

// 7. Gallery Foto (Wajib)
Route::get('/gallery', [GalleryController::class, 'index']);

// 8. Daftar Klien (Wajib)
Route::get('/clients', [ClientController::class, 'index']);

// 9. Kontak Kami (wajib)
Route::get('/contact-us', [ProfileController::class, 'contactUs']);

// 10. Artikel 
Route::get('/articles', [ArticleController::class, 'index']);

// 11. Event, Kumpulan kegiatan perusahaan 
Route::get('/events', [EventController::class, 'index']);

// tambahan halaman login dan register
Route::get('/sign-in', [AuthController::class, 'index']);
Route::get('/sign-up', [AuthController::class, 'create']);

Route::post('/sendWa', [ProfileController::class, 'sendWa']);
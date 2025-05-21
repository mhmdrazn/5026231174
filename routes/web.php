<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

// Route direct HTML
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route view blade
Route::get('/', function () {
    return view('welcome');
});

// Route view blade
Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

// Route controller
Route::get('/hello',
    [Coba::class, 'helloWolrd']
);

Route::get('/hello',
    'App\Http\Controllers\Coba@helloWolrd'
);

// Pertemuan 1
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});

// Pertemuan 2
Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});

// Pertemuan 3
Route::get('/pertemuan3', function () {
    return view('bootstrap2');
});


// Pertemuan 4
Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

// Linktree
Route::get('/linktree', function () {
    return view('linktree');
});

// Pertemuan 7.1
Route::get('/pertemuan7-1', function () {
    return view('js1');
});

// Pertemuan 7.2
Route::get('/pertemuan7-2', function () {
    return view('js2');
});

// Pertemuan 8
Route::get('/pertemuan8', function () {
    return view('danantara');
});

// ETS
Route::get('/ets', function () {
    return view('ets');
});

Route::get('/dosen',
    [Coba::class, 'index']
);

// Ambil data dari URL
Route::get('/pegawai/{nama}',
    [PegawaiController::class, 'index']
);

// Ambil data dari Input Formulir
// Halaman isian formulir
Route::get('/formulir',
    [PegawaiController::class, 'formulir']
);
Route::post('/formulir/proses',
    [PegawaiController::class, 'proses']
);

Route::get('/blog',
    [BlogController::class, 'home']
);

Route::get('/blog/tentang',
    [BlogController::class, 'tentang']
);

Route::get('/blog/kontak',
    [BlogController::class, 'kontak']
);

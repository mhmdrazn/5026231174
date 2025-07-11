<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KipasController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\NewKaryawanController;
use App\Http\Controllers\MahasiswaController;

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
// Route::get('/pegawai/{nama}',
//     [PegawaiController::class, 'index']
// );

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

// CRUD - Read data pegawai dari database
Route::get('/pegawai',
    [PegawaiDBController::class, 'index']
);

// CRUD - Create data pegawai ke database
Route::get('pegawai/tambah',
    [PegawaiDBController::class, 'tambah']
);

Route::post('pegawai/store',
    [PegawaiDBController::class, 'store']
);

// CRUD - Update data pegawai dari database
Route::get('pegawai/edit/{id}',
    [PegawaiDBController::class, 'edit']
);

Route::post('pegawai/update',
    [PegawaiDBController::class, 'update']
);

// CRUD - Delete data pegawai dari database
Route::get('pegawai/hapus/{id}',
    [PegawaiDBController::class, 'hapus']
);

Route::post('pegawai/update',
    [PegawaiDBController::class, 'update']
);

Route::get('pegawai/cari',
    [PegawaiDBController::class, 'cari']
);


Route::get('pegawai/input',
    [PegawaiDBController::class, 'input']
);

Route::post('/proses',
    [PegawaiDBController::class, 'proses']
);

// Tugas CRUD

// Create Kipas Angin
Route::get('/tugascrud/tambah',
    [KipasController::class, 'create']
);

Route::post('/tugascrud/store',
    [KipasController::class, 'store']
);

// Read Kipas Angin
Route::get('/tugascrud',
    [KipasController::class, 'read']
);

// Update Kipas Angin
Route::get('/tugascrud/edit/{id}',
    [KipasController::class, 'edit']
);

Route::post('/tugascrud/update',
    [KipasController::class, 'update']
);

// Delete Kipas Angin
Route::post('/tugascrud/delete/{id}',
    [KipasController::class, 'delete']
);

// Search Kipas Angin
Route::get('/tugascrud/cari',
    [KipasController::class, 'cari']
);

// ======

// Latihan 1 - Karyawan CRUD

// Create Kipas Angin
Route::get('/latihan1/tambah',
    [KaryawanController::class, 'create']
);

Route::post('/latihan1/store',
    [KaryawanController::class, 'store']
);

// Read
Route::get('/latihan1',
    [KaryawanController::class, 'read']
);

// Update
Route::get('/latihan1/edit/{kodepegawai}',
    [KaryawanController::class, 'edit']
);

Route::post('/latihan1/update',
    [KaryawanController::class, 'update']
);

// Delete
Route::post('/latihan1/delete/{kodepegawai}',
    [KaryawanController::class, 'delete']
);

// Search
Route::get('/latihan1/cari',
    [KaryawanController::class, 'cari']
);

// ======

// Latihan 2 - Counter

// Read
Route::get('/latihan2',
    [CounterController::class, 'read']
);

// Update
Route::get('/latihan2/edit/{id}',
    [CounterController::class, 'edit']
);


// ======

// Latihan 3 - Pembelian

// Create
Route::post('/latihan3/store',
    [BarangController::class, 'store']
);

Route::get('/latihan3/edit',
    [BarangController::class, 'edit']
);

// Read
Route::get('/latihan3',
    [BarangController::class, 'read']
);

// Delete
Route::post('/latihan3/delete/{id}',
    [BarangController::class, 'delete']
);


// ======

// Latihan AA

Route::get('/chat',
    [ChatController::class, 'read']
);


// ======

// Latihan BB

// read
Route::get('/mahasiswa',
    [MahasiswaController::class, 'read']
);

// update
Route::get('/mahasiswa/edit/{nrp}',
    [MahasiswaController::class, 'edit']
);

Route::post('/mahasiswa/update',
    [MahasiswaController::class, 'update']
);

Route::get('/mahasiswa/view/{nrp}',
    [MahasiswaController::class, 'view']
);

// ======

// Latihan CC

Route::get('/combo',
    [ComboboxController::class, 'read']
);

Route::get('/combo/send',
    [ComboboxController::class, 'handle']
);


// ======

// Latihan CC

// Read
Route::get('/eas',
    [NewKaryawanController::class, 'read']
);

// Create
Route::get('/eas/tambah',
    [NewKaryawanController::class, 'create']
);

Route::post('/eas/store',
    [NewKaryawanController::class, 'store']
);

// Delete
Route::post('/eas/delete/{nip}',
    [NewKaryawanController::class, 'delete']
);

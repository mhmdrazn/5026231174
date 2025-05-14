<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

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

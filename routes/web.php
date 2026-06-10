<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\SandalDBController;
use App\Http\Controllers\BelanjaDBController;


Route::get('/', function () {
    return view('menu');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('/pegawai', [PegawaiDBController::class, 'indexpegawai']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
Route::get('p2intro', [PageController::class, 'p2intro']);
Route::get('p2news', [PageController::class, 'p2news']);
Route::get('p3responsive', [PageController::class, 'p3responsive']);
Route::get('p3template', [PageController::class, 'p3template']);
Route::get('p3popover', [PageController::class, 'p3popover']);
Route::get('p4', [PageController::class, 'p4']);
Route::get('p5tugas', [PageController::class, 'p5tugas']);
Route::get('p5', [PageController::class, 'p5']);
Route::get('p6linktree', [PageController::class, 'p6linktree']);
Route::get('p6instagram', [PageController::class, 'p6instagram']);
Route::get('p7welcome', [PageController::class, 'p7welcome']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/sandal', [SandalDBController::class, 'indexsandal']);
Route::get('/sandal/cari', [SandalDBController::class, 'cari']);
Route::get('/sandal/tambah', [SandalDBController::class, 'tambah']);
Route::post('/sandal/store', [SandalDBController::class, 'store']);
Route::get('/sandal/edit/{kode}', [SandalDBController::class, 'edit']);
Route::post('/sandal/update', [SandalDBController::class, 'update']);
Route::get('/sandal/hapus/{kode}', [SandalDBController::class, 'hapus']);

Route::get('/belanja', [BelanjaDBController::class, 'index']);
Route::get('/belanja/tambah', [BelanjaDBController::class, 'tambah']);
Route::post('/belanja/store', [BelanjaDBController::class, 'store']);
Route::get('/belanja/hapus/{id}', [BelanjaDBController::class, 'hapus']);

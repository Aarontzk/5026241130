<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('menu');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});
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

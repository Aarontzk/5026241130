<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SandalDBController extends Controller
{
    public function indexsandal()
    {
        // mengambil data dari table sandal
        $sandal = DB::table('sandal')->paginate(10);

        // mengirim data sandal ke view index
        return view('indexsandal', ['sandal' => $sandal]);
    }

    // method untuk menampilkan view form tambah sandal
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahsandal');
    }

    // method untuk insert data ke table sandal
    public function store(Request $request)
    {
        // insert data ke table sandal
        // kodesandal tidak diisi karena AUTO_INCREMENT ("AutoNumber") mengisinya otomatis
        DB::table('sandal')->insert([
            'merksandal'  => $request->merksandal,
            'stocksandal' => $request->stocksandal,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }

    // method untuk edit data sandal
    public function edit($kode)
    {
        // mengambil data sandal berdasarkan kode yang dipilih
        $sandal = DB::table('sandal')->where('kodesandal', $kode)->get();
        // passing data sandal yang didapat ke view editsandal.blade.php
        return view('editsandal', ['sandal' => $sandal]);
    }

    // update data sandal
    public function update(Request $request)
    {
        // update data sandal
        DB::table('sandal')->where('kodesandal', $request->kodesandal)->update([
            'merksandal'  => $request->merksandal,
            'stocksandal' => $request->stocksandal,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }

    // method untuk hapus data sandal
    public function hapus($kode)
    {
        // menghapus data sandal berdasarkan kode yang dipilih
        DB::table('sandal')->where('kodesandal', $kode)->delete();

        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sandal sesuai pencarian merk
        $sandal = DB::table('sandal')
            ->where('merksandal', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data sandal ke view index
        return view('indexsandal', ['sandal' => $sandal]);
    }
}

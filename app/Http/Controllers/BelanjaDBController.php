<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaDBController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();


        // mengirim data ke view index
        return view('belanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('belanja.tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah'     => $request->jumlah,
            'Harga'      => $request->harga,
        ]);
        // alihkan halaman ke halaman index
        return redirect('/belanja');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman index
        return redirect('/belanja');
    }
}

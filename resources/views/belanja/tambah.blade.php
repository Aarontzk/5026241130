@extends('template')
@section('judul_halaman', 'Tambah Data')
@section('konten')
<a href="/belanja" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>

        <div class="card-body">
            <form action="/belanja/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodebarang" id="kodebarang" min="0" value="0" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="jumlah" id="jumlah" min="0" value="0" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga per item</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" id="harga" min="0" value="0" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

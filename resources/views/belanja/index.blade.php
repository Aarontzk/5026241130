@extends('template')
@section('judul_halaman', 'Data Belanja')
@section('konten')
    <p>
        <br><a href="/belanja/tambah" class="btn btn-primary"> Beli </a>
    </p>
    <br />
    <br />
    <table class="table table-hover table-striped">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $b)
            <tr>
                <td>{{ $b->ID }}</td>
                <td>{{ $b->KodeBarang }}</td>
                <td>{{ $b->Jumlah }}</td>
                <td>{{ number_format($b->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($b->Jumlah * $b->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/belanja/hapus/{{ $b->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $keranjangbelanja->links() }}
@endsection

@extends('template')
@section('judul_halaman', 'Data Sandal')
@section('konten')
    <p>
        <br><a href="/sandal/tambah" class="btn btn-primary"> + Tambah Sandal Baru</a>
    </p>
    <br />
    <br />

    <p>Cari Data Sandal :</p>
    <form action="/sandal/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari merk sandal .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>
    <br/>
    <table class="table table-hover table-striped">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sandal as $s)
            <tr>
                <td>{{ $s->kodesandal }}</td>
                <td>{{ $s->merksandal }}</td>
                <td>{{ $s->stocksandal }}</td>
                <td>{{ $s->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="/sandal/edit/{{ $s->kodesandal }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sandal/hapus/{{ $s->kodesandal }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sandal->links() }}
@endsection

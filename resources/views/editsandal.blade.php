@extends('template')
@section('judul_halaman', 'Edit Sandal')
@section('konten')
<a href="/sandal" class="btn btn-secondary mb-4">Kembali</a>
    @foreach($sandal as $s)
<div class="card">
        <div class="card-header">
            Form Edit Data Sandal
        </div>

        <div class="card-body">
            <form action="/sandal/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="kodesandal" value="{{ $s->kodesandal }}">

                <div class="row mb-3">
                    <label for="merksandal" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merksandal"
                            id="merksandal"
                            maxlength="30"
                            class="form-control"
                            required
                            value="{{ $s->merksandal }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stocksandal" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stocksandal"
                            id="stocksandal"
                            min="0"
                            class="form-control"
                            required
                            value="{{ $s->stocksandal }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control">
                            <option value="Y" {{ $s->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                            <option value="T" {{ $s->tersedia == 'T' ? 'selected' : '' }}>Tidak</option>
                        </select>
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
    @endforeach
@endsection

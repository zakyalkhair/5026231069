@extends('template')
@section('content')

    <a href="/karyawan"> Kembali</a>
    <br />
    <h2 class="mt-2">Data karyawan</h2>
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Kode</label>
            </div>
            <div class="col-6">
                <input type="text" name="kode" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Nama Lengkap</label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Divisi</label>
            </div>
            <div class="col-6">
                <input type="text" name="divisi" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Departemen</label>
            </div>
            <div class="col-6">
                <input type="text" name="departemen" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success mt-2" style="border-radius: 10px">
    </form>
@endsection

@extends('template')
@section('content')

    <a href="/eas"> Kembali</a>
    <br />
    <h2 class="mt-2">Data Nilai</h2>
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/eas/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">NRP</label>
            </div>
            <div class="col-6">
                <input type="text" name="nik" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Nilai Angka</label>
            </div>
            <div class="col-6">
                <input type="text" name="nilai" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">SKS</label>
            </div>
            <div class="col-6">
                <input type="text" name="sks" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success mt-2" style="border-radius: 10px">
    </form>
@endsection


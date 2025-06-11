@extends('template')
@section('content')
    <a href="/plastik"> Kembali</a>
    <br />
    <h2 class="mt-2">Data Plastik</h2>
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/plastik/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Merk</label>
            </div>
            <div class="col-6">
                <input type="text" name="merk" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Harga</label>
            </div>
            <div class="col-6">
                <input type="text" name="harga" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>

        <div class="row p-1 ">
            <div class="col-2">
                <label class="control-label" style="border-radius: 10px">Tersedia</label>
            </div>
            <div class="col-6" style="align-items: center">
                <input type="hidden" name="tersedia" value="0" style=" width: 25px; height: 25px;" >

                <!-- Standard checkbox input -->
                <input type="checkbox" id="tersedia" name="tersedia" value="1" style="width: 25px; height: 25px;">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat</label>
            </div>
            <div class="col-6">
                <input type="text" name="berat" required="required" class="form-control" style="border-radius: 10px">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success mt-2" style="border-radius: 10px">
    </form>
@endsection

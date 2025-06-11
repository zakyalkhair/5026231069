@extends('template')
@section('content')
    <a href="/plastik"> Kembali</a>
    <br />
    <br />
    <h3>Edit Data Plastik</h3>

    @foreach ($plastik as $p)
        <form action="/plastik/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->ID }}">
            <br />
            <label class="mr-2">Merk</label>
            <input type="text" required="required" name="merk" value="{{ $p->merkplastik }}">
            <br />
            <label class="mr-2">Harga</label>
            <input type="text" required="required" name="harga" value="{{ $p->hargaplastik }}">
            <br />
            <label class="mr-2">Tersedia</label>
            <input type="hidden" name="tersedia" value="0" style=" width: 25px; height: 25px;">
            <input type="checkbox" name="tersedia" value="1" {{ $p->tersedia ? 'checked' : '' }}
                style=" width: 25px; height: 25px;">
                <br />
            <label class="mr-2">Berat</label>
            <input type="text" required="required" name="berat" value="{{$p->berat }}">
            <br />
            <input type="submit" value="Simpan Data" class="btn btn-primary mt-2">
        </form>
    @endforeach
@endsection

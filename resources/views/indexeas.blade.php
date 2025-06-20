@extends('template')
@section('content')
    <h3>Data Nilai Siswa</h3>
    <a href="/eas/tambah" class="btn btn-primary mt-3"> + Tambah Nilai Baru</a>
    <br>
    <table border="1" class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nomorinduksiswa }}</td>
                <td>{{ $p->nilaiangka }}</td>
                <td>{{ $p->sks }}</td>
                <td>@if ($p->nilaiangka <= 40)
                    "D"
                @elseif ($p->nilaiangka <= 60 && $p->nilaiangka >= 41 )
                    "C"
                @elseif ($p->nilaiangka <= 80 && $p->nilaiangka >= 61 )
                    "B"
                @else
                    "A"
                @endif
                <td>{{ $p->nilaiangka * $p->sks }}</td>
            </tr>
        @endforeach

    </table>
@endsection

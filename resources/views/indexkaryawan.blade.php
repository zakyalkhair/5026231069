@extends('template')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h2>Data Karyawan</h2>
    <a href="/karyawan/tambah" class="btn btn-primary mt-3 mb-4" style="border-radius: 10px"> + Tambah karyawan Baru</a>
    <br>

    <table border="1" class="table table-striped">
        <tr>
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger"
                        style="border-radius: 10px">Hapus</a>
                </td>
            </tr>
        @endforeach

    </table>
    {{-- hanya bisa dipakai dengan paginate --}}
    {{ $karyawan->links('pagination::bootstrap-4') }}
@endsection

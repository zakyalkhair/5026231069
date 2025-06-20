@extends('template')
@section('content')
    <h2>Data Plastik</h2>
    <a href="/plastik/tambah" class="btn btn-primary mt-3" style="border-radius: 10px"> + Tambah Plastik Baru</a>
    <form action="/plastik/cari" method="GET" class="form-inline mt-3">
        <label class="form-tabel mr-3" >Cari Data Plastik</label>
        <input type="text" name="cari" placeholder="Cari Plastik .." class="form-control mr-3" style="border-radius: 10px">
        <input type="submit" value="Cari" class="btn btn-primary mr-3" style="border-radius: 10px">
    </form>
    <br>

    <table border="1" class="table table-striped" >
        <tr>
            <th>Merk Plastik</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Berat</th>
            <th>Action</th>
        </tr>
        @foreach ($plastik as $p)
            <tr>
                if ($d <= 40 ) {
            $nilaihuruf = "D" ;
        } elseif ($d <= 60 and $d >= 41) {
            $nilaihuruf = "C" ;
        } elseif ($d <= 80 and $d >= 61) {
            $nilaihuruf = "B" ;
        } else {
            $nilaihuruf  = "A"; // Jika bukan emoji, tetap tampilkan teks aslinya
        }
                <td>{{ $p->merkplastik }}</td>
                <td>{{ $p->hargaplastik }}</td>
                <td><p style="color: {{ $p->tersedia ? '#218838' : '#C82333' }};"
                                class=" text-sm px-3 py-1 rounded-pill d-inline-block">
                                {{ $p->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}
                            </p></td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/plastik/edit/{{ $p->ID }}" class="btn btn-success" style="border-radius: 10px">Edit</a>
                    <a href="/plastik/hapus/{{ $p->ID }}" class="btn btn-danger" style="border-radius: 10px">Hapus</a>
                </td>
            </tr>
        @endforeach

    </table>
    {{-- hanya bisa dipakai dengan paginate --}}
    {{ $plastik->links('pagination::bootstrap-4') }}
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;


class Karyawan2Controller extends Controller {
    public function index() {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();
        $karyawan = DB::table('karyawan')->paginate(10); //digunakan untuk pagination
         // mengirim data pegawai ke view index
        return view('indexkaryawan2', ['karyawan' => $karyawan]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah(){
        // memanggil view tambah
        return view('tambahkaryawan2');
    }

    public function store(Request $request)
{
    try {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/karyawan2');
    } catch (QueryException $e) {
        if ($e->errorInfo[1] == 1062) {
            // 1062 = Duplicate entry
            return redirect('/karyawan2')->with('error', 'Kode pegawai sudah ada!');
        }

        // Tangani error SQL lainnya
        return redirect('/karyawan2')->with('error', 'Gagal menyimpan data!');
    }
}

    // update data pegawai
    public function update(Request $request){
	    // update data pegawai
	    DB::table('karyawan')->where('kodepegawai',$request->id)->update([
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/karyawan2');
    }

    public function hapus($id){
        DB::table('karyawan')->where('kodepegawai',$id)->delete();
        return redirect('/karyawan2');
    }

}

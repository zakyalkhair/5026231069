<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();
        $nilai = DB::table('nilai')->get(); //digunakan untuk pagination
            
    return View('indexeas', ['nilai' => $nilai]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambah(){
        // memanggil view tambah
        return view('tambaheas');
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilai')->insert([
		'nomorinduksiswa' => $request->nik,
		'nilaiangka' => $request->nilai,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}
public function update(Request $request)
{
	// update data pegawai
	DB::table('nilai')->where('id',$request->id)->update([
		'nomorinduksiswa' => $request->nik,
		'nilaiangka' => $request->nilai,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}

}


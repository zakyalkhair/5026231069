<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlastikController extends Controller {
    public function index() {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();
        $plastik = DB::table('plastik')->paginate(10); //digunakan untuk pagination
         // mengirim data pegawai ke view index
        return view('indexplastik', ['plastik' => $plastik]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah(){
        // memanggil view tambah
        return view('tambahplastik');
    }

    public function store(Request $request){
        DB::table('plastik')->insert([
            'merkplastik' => $request->merk,
            'hargaplastik' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/plastik');
    }

    public function edit($id){
	// mengambil data pegawai berdasarkan id yang dipilih
	    $plastik = DB::table('plastik')->where('ID',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	    return view('editplastik',['plastik' => $plastik]);
    }

    // update data pegawai
    public function update(Request $request){
	    // update data pegawai
	    DB::table('plastik')->where('ID',$request->id)->update([
		    'merkplastik' => $request->merk,
            'hargaplastik' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/plastik');
    }

    public function hapus($id){
        DB::table('plastik')->where('ID',$id)->delete();
        return redirect('/plastik');
    }

    public function cari(Request $request){
        $cari = $request->cari;
        $plastik = DB::table('plastik')
        ->where('merkplastik','like',"%".$cari."%")
        ->paginate(10);

        return view('indexplastik',['plastik' => $plastik]);

        $cari = $request->cari;

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pegawai2Controller extends Controller
{
    //
    public function index($nama){
        return $nama;
}

 public function formulir(){

    	return view('formulir');

}

 public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
      	$nrp = $request->input('NRP');
        return "NRP : ".$nrp. "<br>Nama : ".$nama."<br> Alamat : ".$alamat. "<br> Aslinya request :".$request;
    }
}

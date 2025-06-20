<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PlastikController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\Karyawan2Controller;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\NilaiController;




Route::get('/eas', [NilaiController::class, 'index']);
Route::get('/eas/tambah', [NilaiController::class, 'tambah']);
Route::post('/eas/store', [NilaiController::class, 'store']);
Route::get('/eas/update',[NilaiController::class, 'update']);


Route::get('/', function () {
    return view('frontend');
});

Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
//Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

//Route latihan 1
Route::get('/pagecounter', [PageCounterController::class, 'index']);

//route latihan 2
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/karyawan/update',[KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

//route latihan 3
Route::get('/karyawan2', [Karyawan2Controller::class, 'index']);
Route::get('/karyawan2/tambah2', [Karyawan2Controller::class, 'tambah']);
Route::post('/karyawan2/store2', [Karyawan2Controller::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/karyawan2/update2',[Karyawan2Controller::class, 'update']);
Route::get('/karyawan2/hapus2/{id}', [Karyawan2Controller::class, 'hapus']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route tugas CRUD (plastik)
Route::get('/plastik', [PlastikController::class, 'index']);
Route::get('/plastik/tambah', [PlastikController::class, 'tambah']);
Route::post('/plastik/store', [PlastikController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/plastik/edit/{id}',[PlastikController::class, 'edit']);
Route::post('/plastik/update',[PlastikController::class, 'update']);
Route::get('/plastik/hapus/{id}', [PlastikController::class, 'hapus']);
Route::get('/plastik/cari', [PlastikController::class, 'cari']);


// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/template', [PegawaiDBController::class, 'template']);


Route::get('materi1', function () {return view('pertemuan1_html');});

Route::get('materi2button', function () {
	return view('pertemuan2_button');
});
Route::get('materi2link', function () {
	return view('pertemuan2_link');
});

Route::get('materi3', function () {
	return view('pertemuan3_grid');
});

Route::get('materi4', function () {
	return view('pertemuan4_bootstrap');
});

Route::get('materi5', function () {
	return view('pertemuan5_linktree');
});


Route::get('materi7validasi', function () {
	return view('pertemuan7_validasi');
});


Route::get('materi7kalkulator', function () {
	return view('pertemuan7_kalkulator');
});

Route::get('index', function () {
	return view('index');
});

Route::get('indexuts', function () {
	return view('indexuts');
});


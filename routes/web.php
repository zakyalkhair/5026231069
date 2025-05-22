<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;




Route::get('/', function () {
    return view('frontend');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);



Route::get('materi1', function () {
	return view('pertemuan1_html');
});

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

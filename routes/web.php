<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { 
    return view('frontend');
});

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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Jangan lupa import DB Facade

class KategoriController extends Controller
{
    /**
     * Fungsi ini untuk menampilkan halaman form dengan combo box (dropdown).
     */
    public function index()
    {
        $nilai = DB::table('nilai')->get();

        $data = $nilai->map(function ($item) {
            $item->nilaihuruf = $this->konversiHuruf($item->nilaiangka);
            $item->bobot = $item->nilaiangka * $item->sks;
            return $item;
        });

        return view('nilai.index', ['data' => $data]);
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        DB::table('nilai')->insert([
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
        ]);

        return redirect()->route('nilai.index');
    }

    private function konversiHuruf($nilai)
    {
        if ($nilai <= 40) return 'D';
        elseif ($nilai <= 60) return 'C';
        elseif ($nilai <= 80) return 'B';
        else return 'A';
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{

    public function index() {
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');
        $jumlah = DB::table('pagecounter')->where('ID', 1)->value('Jumlah');
        return view('indexpagecounter', compact('jumlah'));
    }


}

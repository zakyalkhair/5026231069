<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller {
    public function index(){
        $keranjang = DB::table('keranjang')->get();
        return View('indexkeranjang',['keranjangbelanja' => $keranjang]);
    }
}
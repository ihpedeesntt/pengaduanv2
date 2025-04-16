<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class DashboardController extends Controller
{
    public function aspirasi(){
        return view('content.tiketaspirasi');
    }
    
    public function pengaduan(){
        return view('content.tiketaspirasi');
    }
    
    public function tiket(Request $request){
     $tiket = DB::select(DB::raw("  SELECT tiket_aspirasi as tiket ,tindak_lanjut FROM aspirasi UNION ALL SELECT tiket_pengaduan as tiket ,tindak_lanjut FROM pengaduan;"));
    
     foreach($tiket as $t){
         if ( $request->tiket === $t->tiket ) {
             if ($t->tindak_lanjut == null) {
                Alert::info("Keterangan","Status tiket belum ditindaklanjuti.");
                return back();
             } else {
                Alert::info("Keterangan","Status tiket Sudah ditindaklanjuti.");
                return back();
             }
         } 
     }
        Alert::error("Error","Tiket Tidak ditemukan");
        return back();
    }
}

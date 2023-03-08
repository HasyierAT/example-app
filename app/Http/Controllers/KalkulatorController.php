<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function calculateFunc(Request $request) {
        $bil_1 = $request->input('pertama');
        $bil_2 = $request->input('kedua');
        $operasi = $request->input('operasi');

        //Operasi Aritmatika disesuaikan Operasinya
        if ($operasi == "+"){
            $hasil = $bil_1 + $bil_2;
        } else if ($operasi == "-"){
            $hasil = $bil_1 - $bil_2;
        } else if ($operasi == "*"){
            $hasil = $bil_1 * $bil_2;
        }else if ($operasi == "/"){
            if($bil_2 == "0"){ //Pengecekan Jika Pembagian Oleh Angka Nol
                $hasil = "Error: Division By Zero";
            } else {
                $hasil = $bil_1 / $bil_2;
            };
        } else {
            $hasil = 0;
        }

        return redirect('/moduleMath')->with('hasil', 'Hasilnya Adalah : ' . $hasil);
        
    }
}

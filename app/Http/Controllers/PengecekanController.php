<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengecekanController extends Controller
{
    public function calculateFuncc(Request $request) {
        $input_1 = $request->input('pertama');
        $input_2 = $request->input('kedua');

        $input_1ToLower = strtolower($input_1);
        
        $count = 0; // Variabel untuk menghitung jumlah karakter yang cocok
        $lengthInput_1 = strlen($input_1ToLower); // Menghitung panjang input pertama
        
        // Looping untuk memeriksa setiap karakter pada input pertama
        for($i = 0; $i < $lengthInput_1; $i++) {
           if(strpos($input_2, $input_1ToLower[$i]) !== false) { // Jika karakter ada di input kedua
              $count++; // Tambahkan jumlah karakter yang cocok
           }
        }
        
        $percentage = ($count / $lengthInput_1) * 100; // Menghitung persentase karakter yang cocok
        
        return redirect('/fiturPengecekan')->with('hasil', 'Hasilnya Adalah : ' . $percentage . '%');
        

    }
}

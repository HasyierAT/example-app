<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use App\Models\Sapi;
use App\Models\Serigala;

class InheritanceController extends Controller
{
    public function suaraSapi() {
        
        $sapi = new Sapi();

        $suara = $sapi->speak();
        
        return redirect('/moduleInheritance')->with('suara', 'Suaranya Adalah : ' . $suara);
        
    }

    public function suaraKucing() {
        
        $kucing = new Kucing();

        $suara = $kucing->speak();
        
        return redirect('/moduleInheritance')->with('suara', 'Suaranya Adalah : ' . $suara);
        
    }

    public function suaraSerigala() {
        
        $serigala = new Serigala();

        $suara = $serigala->speak();
        
        return redirect('/moduleInheritance')->with('suara', 'Suaranya Adalah : ' . $suara);
        
    }
}

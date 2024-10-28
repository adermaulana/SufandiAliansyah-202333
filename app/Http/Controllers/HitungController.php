<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SufandiAliansyah202333;

class HitungController extends Controller
{
    public function hitungduabilangan(){
        $bilang1 = 5;
        $bilang2 = 7;

        $hasil = $bilang1 + $bilang2;

        return view('view_hasiljumlah',[
            'hasil' => $hasil
        ]);
    }

    public function mahasiswa(){

        $hasil = SufandiAliansyah202333::all();

        return view('view_mahasiswa',[
            'hasil' => $hasil
        ]);
    }
}

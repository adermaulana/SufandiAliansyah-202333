<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

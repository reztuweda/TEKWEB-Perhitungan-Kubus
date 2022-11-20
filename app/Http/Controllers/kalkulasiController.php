<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulasiController extends Controller
{
    public function index(Request $request){
        $panjang = $request->panjang;
        $hasil = $panjang *$panjang;
        
        return view('kubus', compact('hasil'));   
    }
}
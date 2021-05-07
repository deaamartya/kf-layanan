<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function walkin(Request $request)
    {
        $online = $request->session()->has('status');

        return view('farmasi.resep-walkin',compact('online'));
    }

    public function online(Request $request)
    {
        return view('farmasi.pesanan-online');
    }
}

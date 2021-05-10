<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dokter\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeriksaController extends MainController
{
    public function halaman_periksa($id)
    {
        $pasien = MainController::get_pasien_data($id);
        return view('dokter/periksa', compact('pasien'));
    }

    public function store_data(Request $request)
    {
        $id_pasien = $request->input_id_pasien;
        $status_panggil = 3;

        Session::put('perawat_pasien.'.$id_pasien.'.status_panggil', $status_panggil);
        Session::put('perawat_session_status', 'modified');

        return redirect('/dokter');
    }

    public function download_dokumen($filename)
    {
        return response()->file(
            public_path('assets/dokter/document/' . $filename)
        );
    }
}
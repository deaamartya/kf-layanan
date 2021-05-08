<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dokter\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeriksaController extends Controller
{
    public function halaman_periksa($id)
    {
        $main_controller = new MainController;
        $pasien = $main_controller->get_pasien_data($id);

        return view('dokter/periksa', compact('pasien'));
    }
}
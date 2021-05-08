<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dokter\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RekamMedisController extends MainController
{
    public function index()
    {
        if(Session::has('perawat_session_status')){
            if(Session::get('perawat_session_status') == 'fresh'){
                MainController::create_session_data();
            }
        } else {
            MainController::create_session_data();
        }

        MainController::check_data_pasien_complete();

        return view('dokter/rekam_medis');
    }
}
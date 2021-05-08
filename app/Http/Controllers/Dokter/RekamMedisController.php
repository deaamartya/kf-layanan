<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dokter\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RekamMedisController extends Controller
{
    public function index()
    {
        $main_controller = new MainController;

        if(Session::has('perawat_session_status')){
            if(Session::get('perawat_session_status') == 'fresh'){
                $main_controller->create_session_data();
            }
        } else {
            $main_controller->create_session_data();
        }

        $main_controller->check_data_pasien_complete();
        $main_controller = new MainController;

        return view('dokter/rekam_medis');
    }
}
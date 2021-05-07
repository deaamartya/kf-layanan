<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function home()
    {
        $nama_dokter = "dr. Dian Permata Sari, SpOG";
        $spesialisasi_dokter = "Obstetri dan Ginekologi";
        $antrian_saat_ini = '01';

        $pasien = [
            [
                "id" => "PX0001",
                "no_antrian" => "01",
                "nama" => "Ayu Maudina",
                "status_panggil" => 0,
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            [
                "id" => "PX0002",
                "no_antrian" => "02",
                "nama" => "Pelita Harapan",
                "status_panggil" => 0,
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            [
                "id" => "PX0003",
                "no_antrian" => "03",
                "nama" => "Dwi Windy Astuti",
                "status_panggil" => 0,
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            [
                "id" => "PX0004",
                "no_antrian" => "04",
                "nama" => "Arin Widya",
                "status_panggil" => 0,
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            [
                "id" => "PX0005",
                "no_antrian" => "05",
                "nama" => "Nabila Putri",
                "status_panggil" => 0,
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ]
        ];

        Session::put('nama_dokter', 'dr. Dian Permata Sari, SpOG');
        Session::put('spesialisasi_dokter', 'Obstetri dan Ginekologi');
        Session::put('pasien', $pasien);
        Session::put('antrian_saat_ini', $antrian_saat_ini);

        return view('perawat/home');
    }
}
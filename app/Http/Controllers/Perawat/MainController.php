<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function home()
    {
        $this->create_session_data();
        return view('perawat/home');
    }

    public function reset_session()
    {
        Session::forget('perawat_nama_dokter');
        Session::forget('perawat_spesialisasi_dokter');
        Session::forget('perawat_pasien');
        Session::forget('perawat_antrian_saat_ini');

        return redirect('/perawat');
    }

    public function get_pasien_data($id)
    {
        return Session::get('perawat_pasien')[$id];
    }

    public function update_pasien_data(Request $request)
    {

    }

    private function create_session_data()
    {
        $perawat_nama_dokter = "dr. Dian Permata Sari, SpOG";
        $perawat_spesialisasi_dokter = "Obstetri dan Ginekologi";
        $perawat_antrian_saat_ini = '01';

        $perawat_pasien = [
            "PX0001" => [
                "id" => "PX0001",
                "no_antrian" => "01",
                "status_panggil" => 0,
                "nama" => "Ayu Maudina",
                "usia" => "",
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            "PX0002" => [
                "id" => "PX0002",
                "no_antrian" => "02",
                "status_panggil" => 0,
                "nama" => "Pelita Harapan",
                "usia" => "",
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            "PX0003" => [
                "id" => "PX0003",
                "no_antrian" => "03",
                "status_panggil" => 0,
                "nama" => "Dwi Windy Astuti",
                "usia" => "",
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            "PX0004" => [
                "id" => "PX0004",
                "no_antrian" => "04",
                "status_panggil" => 0,
                "nama" => "Arin Widya",
                "usia" => "",
                "tensi_atas" => "",
                "tensi_bawah" => "",
                "nadi" => "",
                "rr" => "",
                "suhu" => "",
                "berat" => "",
                "tinggi" => "",
                "is_data_complete" => false
            ],
            "PX0005" => [
                "id" => "PX0005",
                "no_antrian" => "05",
                "status_panggil" => 0,
                "nama" => "Nabila Putri",
                "usia" => "",
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

        Session::put('perawat_nama_dokter', $perawat_nama_dokter);
        Session::put('perawat_spesialisasi_dokter', $perawat_spesialisasi_dokter);
        Session::put('perawat_pasien', $perawat_pasien);
        Session::put('perawat_antrian_saat_ini', $perawat_antrian_saat_ini);
    }
}
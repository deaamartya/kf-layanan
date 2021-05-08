<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function home()
    {
        if(Session::has('perawat_session_status')){
            if(Session::get('perawat_session_status') == 'fresh'){
                $this->create_session_data();
            }
        } else {
            $this->create_session_data();
        }

        $this->check_data_pasien_complete();
        return view('perawat/home');
    }

    public function reset_session()
    {
        Session::forget('perawat_session_status');
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
        // dd($request->all());
        $id = $request->id;
        $nama = $request->nama;
        $usia = $request->usia;
        $tensi_atas = $request->tensi_atas;
        $tensi_bawah = $request->tensi_bawah;
        $nadi = $request->nadi;
        $rr = $request->rr;
        $suhu = $request->suhu;
        $berat = $request->berat;
        $tinggi = $request->tinggi;

        Session::put('perawat_pasien.'.$id.'.nama', $nama);
        Session::put('perawat_pasien.'.$id.'.usia', $usia);
        Session::put('perawat_pasien.'.$id.'.tensi_atas', $tensi_atas);
        Session::put('perawat_pasien.'.$id.'.tensi_bawah', $tensi_bawah);
        Session::put('perawat_pasien.'.$id.'.nadi', $nadi);
        Session::put('perawat_pasien.'.$id.'.rr', $rr);
        Session::put('perawat_pasien.'.$id.'.suhu', $suhu);
        Session::put('perawat_pasien.'.$id.'.berat', $berat);
        Session::put('perawat_pasien.'.$id.'.tinggi', $tinggi);
        Session::put('perawat_session_status', 'modified');

        return redirect('/perawat');
    }

    public function update_status_panggil(Request $request){
        $id = $request->id;
        $status_panggil = $request->status_panggil;

        Session::put('perawat_pasien.'.$id.'.status_panggil', $status_panggil);
        Session::put('perawat_session_status', 'modified');

        return 'success';
    }

    public function antrian(Request $request){
        $button = $request->button;
        $no_antrian = $request->no_antrian;
        $id_pasien = 'PX000' . $no_antrian;
        $status_panggil = Session::get('perawat_pasien')[$id_pasien]['status_panggil'];

        if($button == 'next'){
            if($status_panggil != 1){
                Session::put('perawat_pasien.'.$id_pasien.'.status_panggil', 2);
            }

            Session::put('perawat_antrian_saat_ini', (int)$no_antrian + 1);
            Session::put('perawat_status_antrian_saat_ini', 0);

        } elseif ($button == 'masuk') {
            Session::put('perawat_pasien.'.$id_pasien.'.status_panggil', 1);
            Session::put('perawat_status_antrian_saat_ini', 1);
        }

        Session::put('perawat_session_status', 'modified');
        return 'success';
    }

    private function create_session_data()
    {
        $perawat_nama_dokter = "dr. Dian Permata Sari, SpOG";
        $perawat_spesialisasi_dokter = "Obstetri dan Ginekologi";
        $perawat_antrian_saat_ini = 1;
        $perawat_status_antrian_saat_ini = 0;

        $perawat_pasien = [
            "PX0001" => [
                "id" => "PX0001",
                "no_antrian" => "01",
                "status_panggil" => 0,
                "nama" => "Ayu Maudina",
                "usia" => null,
                "tensi_atas" => null,
                "tensi_bawah" => null,
                "nadi" => null,
                "rr" => null,
                "suhu" => null,
                "berat" => null,
                "tinggi" => null,
                "is_data_complete" => false
            ],
            "PX0002" => [
                "id" => "PX0002",
                "no_antrian" => "02",
                "status_panggil" => 0,
                "nama" => "Pelita Harapan",
                "usia" => null,
                "tensi_atas" => null,
                "tensi_bawah" => null,
                "nadi" => null,
                "rr" => null,
                "suhu" => null,
                "berat" => null,
                "tinggi" => null,
                "is_data_complete" => false
            ],
            "PX0003" => [
                "id" => "PX0003",
                "no_antrian" => "03",
                "status_panggil" => 0,
                "nama" => "Dwi Windy Astuti",
                "usia" => null,
                "tensi_atas" => null,
                "tensi_bawah" => null,
                "nadi" => null,
                "rr" => null,
                "suhu" => null,
                "berat" => null,
                "tinggi" => null,
                "is_data_complete" => false
            ],
            "PX0004" => [
                "id" => "PX0004",
                "no_antrian" => "04",
                "status_panggil" => 0,
                "nama" => "Arin Widya",
                "usia" => null,
                "tensi_atas" => null,
                "tensi_bawah" => null,
                "nadi" => null,
                "rr" => null,
                "suhu" => null,
                "berat" => null,
                "tinggi" => null,
                "is_data_complete" => false
            ],
            "PX0005" => [
                "id" => "PX0005",
                "no_antrian" => "05",
                "status_panggil" => 0,
                "nama" => "Nabila Putri",
                "usia" => null,
                "tensi_atas" => null,
                "tensi_bawah" => null,
                "nadi" => null,
                "rr" => null,
                "suhu" => null,
                "berat" => null,
                "tinggi" => null,
                "is_data_complete" => false
            ]
        ];

        Session::put('perawat_session_status', 'fresh');
        Session::put('perawat_nama_dokter', $perawat_nama_dokter);
        Session::put('perawat_spesialisasi_dokter', $perawat_spesialisasi_dokter);
        Session::put('perawat_pasien', $perawat_pasien);
        Session::put('perawat_antrian_saat_ini', $perawat_antrian_saat_ini);
        Session::put('perawat_status_antrian_saat_ini', $perawat_status_antrian_saat_ini);
    }

    private function check_data_pasien_complete(){
        for($i = 1; $i <= count(Session::get('perawat_pasien')); $i++){
            if(Session::get('perawat_pasien')['PX000'.$i]['nama'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['usia'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['tensi_atas'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['tensi_bawah'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['nadi'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['rr'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['suhu'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['berat'] != null
                && Session::get('perawat_pasien')['PX000'.$i]['tinggi'] != null
            ){
                Session::put('perawat_pasien.'.'PX000'.$i.'.is_data_complete', true);
            } else {
                Session::put('perawat_pasien.'.'PX000'.$i.'.is_data_complete', false);
            }
        }
    }
}
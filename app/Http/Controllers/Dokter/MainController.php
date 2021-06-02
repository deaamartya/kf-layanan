<?php

namespace App\Http\Controllers\Dokter;

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
        return view('dokter/home');
    }

    public function reset_session()
    {
        Session::forget('perawat_session_status');
        Session::forget('perawat_nama_dokter');
        Session::forget('perawat_spesialisasi_dokter');
        Session::forget('perawat_pasien');
        Session::forget('perawat_antrian_saat_ini');

        return redirect('/dokter')->with('toast_msg', 'Reset session berhasil');
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

        return redirect('/dokter')->with('toast_msg', 'Data berhasil disimpan');
    }

    public function update_status_panggil(Request $request){
        $id = $request->id;
        $status_panggil = $request->status_panggil;
        $no_antrian = $request->no_antrian;
        Session::put('perawat_pasien.'.$id.'.status_panggil', $status_panggil);

        if($status_panggil == 1){  
            for($i = 1; $i <= 5; $i++){
                if(Session::get('perawat_pasien')['PX000' . $i]['status_panggil'] == 1){
                    Session::put('perawat_pasien.PX000' . $i . '.status_panggil', 3);
                }
            }

            Session::put('perawat_pasien.' . $id . '.status_panggil', 1);
            Session::put('perawat_antrian_saat_ini', (int)$no_antrian + 1);
            Session::put('perawat_status_antrian_saat_ini', 0);
            Session::put('toast_msg', 'Pasien masuk');
        }

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
                Session::put('toast_msg', 'Pasien dilewati');
            }

            Session::put('perawat_antrian_saat_ini', (int)$no_antrian + 1);
            Session::put('perawat_status_antrian_saat_ini', 0);

        } elseif ($button == 'masuk') {
            for($i = 1; $i <= 5; $i++){
                if(Session::get('perawat_pasien')['PX000' . $i]['status_panggil'] == 1){
                    Session::put('perawat_pasien.PX000' . $i . '.status_panggil', 3);
                }
            }

            Session::put('perawat_pasien.'.$id_pasien.'.status_panggil', 1);
            Session::put('perawat_status_antrian_saat_ini', 1);
            Session::put('toast_msg', 'Pasien masuk');
        }

        Session::put('perawat_session_status', 'modified');
        return 'success';
    }

    public function simulasi_perawat()
    {
        // reset session
        Session::forget('perawat_session_status');
        Session::forget('perawat_nama_dokter');
        Session::forget('perawat_spesialisasi_dokter');
        Session::forget('perawat_pasien');
        Session::forget('perawat_antrian_saat_ini');

        // create new session data
        $this->create_session_data();

        // update data pasien PX0001
        $id = 'PX0001';
        Session::put('perawat_pasien.'.$id.'.tensi_atas', 120);
        Session::put('perawat_pasien.'.$id.'.tensi_bawah', 80);
        Session::put('perawat_pasien.'.$id.'.nadi', 100);
        Session::put('perawat_pasien.'.$id.'.rr', 100);
        Session::put('perawat_pasien.'.$id.'.suhu', 35);
        Session::put('perawat_pasien.'.$id.'.berat', 55);
        Session::put('perawat_pasien.'.$id.'.tinggi', 165);
        Session::put('perawat_session_status', 'modified');

        // update antrian
        Session::put('perawat_pasien.'.$id.'.status_panggil', 1);
        Session::put('perawat_status_antrian_saat_ini', 1);

        return redirect('/dokter/periksa/PX0001');
    }

    protected function create_session_data()
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
                "usia" => 26,
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
                "usia" => 27,
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
                "usia" => 28,
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
                "usia" => 29,
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
                "usia" => 30,
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

    protected function check_data_pasien_complete()
    {
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FarmasiController extends Controller
{
    public function data()
    {
        $online = [
            [
                'ID_PESANAN' => 'P00001',
                'NAMA_PASIEN' => 'Dimas',
                'STATUS' => '1',
                'ISI_RESEP' => [[
                    'OBAT' => 'GLIMEPIRIDE DEXA 4MG',
                    'TAKARAN' => '1 - oo',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'ACARBOSE DAXA 100MG TAB 100S',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '18',
                ],
                ]
            ],
            [
                'ID_PESANAN' => 'P00002',
                'NAMA_PASIEN' => 'Ihsan',
                'STATUS' => '0',
                'ISI_RESEP' => [[
                    'OBAT' => 'GLIMEPIRIDE DEXA 4MG',
                    'TAKARAN' => '1 - oo',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'METROMIN IKA 500MG TAB',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '21',
                ],
                [
                    'OBAT' => 'ACARBOSE DAXA 100MG TAB 100S',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '18',
                ],
                ]
            ],
            [
                'ID_PESANAN' => 'P00003',
                'NAMA_PASIEN' => 'Almahdi',
                'STATUS' => '3',
                'ISI_RESEP' => [[
                    'OBAT' => 'BRAXIDIN TAB',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'PUMPITOR 20MG CAP',
                    'TAKARAN' => '2 x 1',
                    'JUMLAH' => '20',
                ],
                [
                    'OBAT' => 'EPISAN SYR 100 ML',
                    'TAKARAN' => '3 x 15 CC',
                    'JUMLAH' => '1',
                ],
                ]
            ],
            [
                'ID_PESANAN' => 'P00004',
                'NAMA_PASIEN' => 'Sultan',
                'STATUS' => '2',
                'ISI_RESEP' => [[
                    'OBAT' => 'PUMPITOR 20MG CAP',
                    'TAKARAN' => '2 x 1',
                    'JUMLAH' => '20',
                ],
                [
                    'OBAT' => 'EPISAN SYR 100 ML',
                    'TAKARAN' => '3 x 15 CC',
                    'JUMLAH' => '1',
                ],
                ]
            ],
            [
                'ID_PESANAN' => 'P00005',
                'NAMA_PASIEN' => 'Aqilla',
                'STATUS' => '4',
                'ISI_RESEP' => [[
                    'OBAT' => 'GLIMEPIRIDE DEXA 4MG',
                    'TAKARAN' => '1 - oo',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'METROMIN IKA 500MG TAB',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '21',
                ],
                [
                    'OBAT' => 'ACARBOSE DAXA 100MG TAB 100S',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '18',
                ],
                ]
            ],
            [
                'ID_PESANAN' => 'P00006',
                'NAMA_PASIEN' => 'Adinda',
                'STATUS' => '5',
                'ISI_RESEP' => [[
                    'OBAT' => 'BRAXIDIN TAB',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'PUMPITOR 20MG CAP',
                    'TAKARAN' => '2 x 1',
                    'JUMLAH' => '20',
                ],
                [
                    'OBAT' => 'EPISAN SYR 100 ML',
                    'TAKARAN' => '3 x 15 CC',
                    'JUMLAH' => '1',
                ],
                ]
            ],
            [
                'ID_PESANAN' => 'P00007',
                'NAMA_PASIEN' => 'Rifqi',
                'STATUS' => '6',
                'ISI_RESEP' => [[
                    'OBAT' => 'PUMPITOR 20MG CAP',
                    'TAKARAN' => '2 x 1',
                    'JUMLAH' => '20',
                ],
                [
                    'OBAT' => 'EPISAN SYR 100 ML',
                    'TAKARAN' => '3 x 15 CC',
                    'JUMLAH' => '1',
                ],
                ]
            ],
        ];

        return $online;
    }

    public function walkin(Request $request)
    {
        $online = FarmasiController::data();

        Session::put('online', $online);
        Session::put('audio', '0');
        Session::put('pesanan', '0');

        return view('farmasi.resep-walkin');
    }

    public function online(Request $request)
    {
        $online = FarmasiController::data();

        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function resetWalkin()
    {
        return redirect('farmasi');
    }

    public function resetOnline()
    {
        return redirect('pesanan-online');
    }

    public function checkStatus($id)
    {
        $online = FarmasiController::data();

        foreach($online as $online){
            if($online['ID_PESANAN'] == $id){
                $data = $online;
            }
        }
        if($data['STATUS'] == "0"){
            Session::put('data', $data);
            return view('farmasi.stock');
        }
        else if($data['STATUS'] == "2" || $data['STATUS'] == "4"){
            Session::put('data', $data);
            return view('farmasi.ambil');
        }
        else if($data['STATUS'] == "3" || $data['STATUS'] == "5"){
            Session::put('data', $data);
            return view('farmasi.kirim');
        }
    }

    public function checkStock($id, $status)
    {
        $online = FarmasiController::data();
        if($status == "0"){
            $status = "-1";
        }
        else{
            $status;
        }
        
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['ID_PESANAN'] == $id)
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = $status;
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function ambil($id)
    {
        $data = FarmasiController::data();

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "4";
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function diambil($id)
    {
        $data = FarmasiController::data();

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "7";
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function readyKirim($id)
    {
        $data = FarmasiController::data();

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "5";
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function otw($id)
    {
        $data = FarmasiController::data();

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "6";
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function pesanOnline()
    {
        $data = FarmasiController::data();

        $new = [
            'ID_PESANAN' => 'P00008',
            'NAMA_PASIEN' => 'Indah',
            'STATUS' => '0',
            'ISI_RESEP' => [[
                'OBAT' => 'GLIMEPIRIDE DEXA 4MG',
                'TAKARAN' => '1 - oo',
                'JUMLAH' => '30',
            ],
            [
                'OBAT' => 'ACARBOSE DAXA 100MG TAB 100S',
                'TAKARAN' => '3 x 1',
                'JUMLAH' => '18',
            ],
            ]
        ];

        $data[] = $new;
        // dd($data);
        Session::put('online', $data);
        Session::put('audio', '1');
        Session::put('pesanan', '1');
        return view('farmasi.resep-walkin')->with('info', 'Ada pesanan masuk.');
    }

    public function simAmbil()
    {
        $online = FarmasiController::data();
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['STATUS'] == "1")
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "2";
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function simKirim()
    {
        $online = FarmasiController::data();
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['STATUS'] == "1")
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "3";
            }
            else{
                $online = FarmasiController::data();
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function simSelesai()
    {
        $online = FarmasiController::data();
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['STATUS'] == "6")
            {
                $online = FarmasiController::data();
                $online[$i]['STATUS'] = "7";
            }
            else{
                $online = FarmasiController::data();
            }
        }
        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function copyResep($id)
    {
        $online = FarmasiController::data();

        foreach($online as $online){
            if($online['ID_PESANAN'] == $id){
                $data = $online;
            }
        }
        Session::put('data', $data);

        return view('farmasi.copy-resep');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FarmasiController extends Controller
{
    public function data(Request $request)
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

        $request->session()->put('online', $online);

        // return $online;
    }

    public function walkin(Request $request)
    {

        $data = $request->session()->get('online');
        Session::put('online', $data);

        return view('farmasi.resep-walkin');
    }

    public function online(Request $request)
    {
        $data = $request->session()->get('online');
        Session::put('online', $data);

        return view('farmasi.pesanan-online');
    }

    public function resetWalkin(Request $request)
    {
        $data = $request->session()->forget('online');
        $count = $request->session()->forget('pesanan-online');
        Session::put('pesanan-online', 0);
        Session::put('online', $data);

        return redirect('farmasi');
    }

    public function resetOnline(Request $request)
    {
        $data = $request->session()->forget('online');
        $count = $request->session()->forget('pesanan-online');
        Session::put('pesanan-online', 0);
        Session::put('online', $data);

        return redirect('pesanan-online');
    }

    public function checkStatus(Request $request, $id)
    {
        $online = $request->session()->get('online');

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

    public function checkStock(Request $request, $id, $status)
    {
        $online = $request->session()->get('online');
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
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = $status;
            }
        }
        Session::put('online', $online);

        return redirect('pesanan-online');
    }

    public function ambil(Request $request, $id)
    {
        $data = $request->session()->get('online');

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "4";
            }
        }
        Session::put('online', $online);

        return redirect('pesanan-online');
    }

    public function diambil(Request $request, $id)
    {
        $data = $request->session()->get('online');

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "7";
            }
        }
        Session::put('online', $online);

        return redirect('pesanan-online');
    }

    public function readyKirim(Request $request, $id)
    {
        $data = $request->session()->get('online');

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "5";
            }
        }
        Session::put('online', $online);

        return redirect('pesanan-online');
    }

    public function otw(Request $request, $id)
    {
        $data = $request->session()->get('online');

        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['ID_PESANAN'] == $id)
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "6";
            }
        }
        Session::put('online', $online);

        return redirect('pesanan-online');
    }

    public function countPesanan(Request $request)
    {
        $count = "0";
        $request->session()->put('pesanan-online', $count);
    }

    public function pesanOnline(Request $request)
    {
        $data = $request->session()->get('online');

        if($data == null){
            $id = "P00001";
        }
        else{
            for($i=0; $i<count($data); $i++){
                $id = $data[$i]['ID_PESANAN'];
            }

            $id = explode('P',$id);
            $id = $id[1] + 1;
            if($id >= "10"){
                $id = "P000".$id;
            }
            else{
                $id = "P0000".$id;
            }
        }

        $arr1 = [
            'ID_PESANAN' => $id,
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

        $arr2 = [
            'ID_PESANAN' => $id,
            'NAMA_PASIEN' => 'Muhammad',
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
        ];

        $arr3 = [
            'ID_PESANAN' => $id,
            'NAMA_PASIEN' => 'Ahsan',
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
            ]
        ];

        $count = $request->session()->get('pesanan-online');

        if($count == "0"){
            if($data == null){
                $data[] = $arr1;
                Session::put('pesanan-online', 1);
            }
            else{
                $data[] = $arr1;
                Session::put('pesanan-online', 1);
            }
        }
        else if($count == "1"){
            $data[] = $arr2;
            Session::put('pesanan-online', 2);
        }
        else if($count == "2"){
            $data[] = $arr3;
            Session::put('pesanan-online', 3);
        }
        
        // dd($count);
        Session::put('online', $data);
        Session::flash('audioOnline', '1');
        Session::flash('pesanan', '1');
        return redirect('pesanan-online')->with('info', 'Ada pesanan masuk.');
    }

    public function pesanOnlineWalkin(Request $request)
    {
        $data = $request->session()->get('online');

        if($data == null){
            $id = "P00001";
        }
        else{
            for($i=0; $i<count($data); $i++){
                $id = $data[$i]['ID_PESANAN'];
            }

            $id = explode('P',$id);
            $id = $id[1] + 1;
            if($id >= "10"){
                $id = "P000".$id;
            }
            else{
                $id = "P0000".$id;
            }
        }

        $arr1 = [
            'ID_PESANAN' => $id,
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

        $arr2 = [
            'ID_PESANAN' => $id,
            'NAMA_PASIEN' => 'Muhammad',
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
        ];

        $arr3 = [
            'ID_PESANAN' => $id,
            'NAMA_PASIEN' => 'Ahsan',
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
            ]
        ];

        $count = $request->session()->get('pesanan-online');

        if($count == "0"){
            if($data == null){
                $data[] = $arr1;
                Session::put('pesanan-online', 1);
            }
            else{
                $data[] = $arr1;
                Session::put('pesanan-online', 1);
            }
        }
        else if($count == "1"){
            $data[] = $arr2;
            Session::put('pesanan-online', 2);
        }
        else if($count == "2"){
            $data[] = $arr3;
            Session::put('pesanan-online', 3);
        }
        
        // dd($count);
        Session::put('online', $data);
        Session::flash('audio', '1');
        Session::flash('pesanan', '1');
        return redirect('farmasi')->with('info', 'Ada pesanan masuk.');
    }

    public function simAmbil(Request $request)
    {
        $online = $request->session()->get('online');
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['STATUS'] == "1")
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "2";
                Session::put('online', $online);
            }
        }

        return redirect('pesanan-online');
    }

    public function simKirim(Request $request)
    {
        $online = $request->session()->get('online');
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['STATUS'] == "1")
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "3";
                Session::put('online', $online);
            }
        }

        return redirect('pesanan-online');
    }

    public function simSelesai(Request $request)
    {
        $online = $request->session()->get('online');
        for($i=0; $i<count($online); $i++)
        {
            if($online[$i]['STATUS'] == "6")
            {
                $online = $request->session()->get('online');
                $online[$i]['STATUS'] = "7";
                Session::put('online', $online);
            }
        }

        return redirect('pesanan-online');
    }

    public function copyResep(Request $request, $id)
    {
        $online = $request->session()->get('online');

        foreach($online as $online){
            if($online['ID_PESANAN'] == $id){
                $data = $online;
            }
        }
        Session::put('data', $data);

        return view('farmasi.copy-resep');
    }
}

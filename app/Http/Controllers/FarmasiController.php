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
                'STATUS' => '0',
                'ISI_RESEP' => [
                    'OBAT' => 'GLIMEPIRIDE DEXA 4MG',
                    'TAKARAN' => '1 - oo',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'ACARBOSE DAXA 100MG TAB 100S',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '18',
                ]
            ],
            [
                'ID_PESANAN' => 'P00002',
                'NAMA_PASIEN' => 'Ihsan',
                'STATUS' => '0',
                'ISI_RESEP' => [
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
                ]
            ],
            [
                'ID_PESANAN' => 'P00003',
                'NAMA_PASIEN' => 'Almahdi',
                'STATUS' => '0',
                'ISI_RESEP' => [
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
                ]
            ],
            [
                'ID_PESANAN' => 'P00004',
                'NAMA_PASIEN' => 'Sultan',
                'STATUS' => '0',
                'ISI_RESEP' => [
                    'OBAT' => 'PUMPITOR 20MG CAP',
                    'TAKARAN' => '2 x 1',
                    'JUMLAH' => '20',
                ],
                [
                    'OBAT' => 'EPISAN SYR 100 ML',
                    'TAKARAN' => '3 x 15 CC',
                    'JUMLAH' => '1',
                ]
            ],
        ];

        return $online;
    }

    public function walkin(Request $request)
    {
        $online = data();

        Session::put('online', $online);

        return view('farmasi.resep-walkin',compact('online'));
    }

    public function online(Request $request)
    {
        $online = [
            [
                'ID_PESANAN' => 'P00001',
                'NAMA_PASIEN' => 'Dimas',
                'STATUS' => '0',
                'ISI_RESEP' => [
                    'OBAT' => 'GLIMEPIRIDE DEXA 4MG',
                    'TAKARAN' => '1 - oo',
                    'JUMLAH' => '30',
                ],
                [
                    'OBAT' => 'ACARBOSE DAXA 100MG TAB 100S',
                    'TAKARAN' => '3 x 1',
                    'JUMLAH' => '18',
                ]
            ],
            [
                'ID_PESANAN' => 'P00002',
                'NAMA_PASIEN' => 'Ihsan',
                'STATUS' => '0',
                'ISI_RESEP' => [
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
                ]
            ],
            [
                'ID_PESANAN' => 'P00003',
                'NAMA_PASIEN' => 'Almahdi',
                'STATUS' => '0',
                'ISI_RESEP' => [
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
                ]
            ],
            [
                'ID_PESANAN' => 'P00004',
                'NAMA_PASIEN' => 'Sultan',
                'STATUS' => '0',
                'ISI_RESEP' => [
                    'OBAT' => 'PUMPITOR 20MG CAP',
                    'TAKARAN' => '2 x 1',
                    'JUMLAH' => '20',
                ],
                [
                    'OBAT' => 'EPISAN SYR 100 ML',
                    'TAKARAN' => '3 x 15 CC',
                    'JUMLAH' => '1',
                ]
            ],
        ];

        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }

    public function checkStatus()
    {

    }
}

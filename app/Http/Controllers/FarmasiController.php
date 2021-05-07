<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FarmasiController extends Controller
{
    public function walkin(Request $request)
    {
        $online = [
            [
                'ID_RESEP' => 'R00001',
                'NAMA_PASIEN' => 'Dimas',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00002',
                'NAMA_PASIEN' => 'Ihsan',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00003',
                'NAMA_PASIEN' => 'Almahdi',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00004',
                'NAMA_PASIEN' => 'Sultan',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00005',
                'NAMA_PASIEN' => 'Saleh',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
        ];

        Session::put('online', $online);

        return view('farmasi.resep-walkin',compact('online'));
    }

    public function online(Request $request)
    {
        $online = [
            [
                'ID_RESEP' => 'R00001',
                'NAMA_PASIEN' => 'Dimas',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00002',
                'NAMA_PASIEN' => 'Ihsan',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00003',
                'NAMA_PASIEN' => 'Almahdi',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00004',
                'NAMA_PASIEN' => 'Sultan',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
            [
                'ID_RESEP' => 'R00005',
                'NAMA_PASIEN' => 'Saleh',
                'STATUS' => '0',
                'ISI_RESEP' => [

                ]
            ],
        ];

        Session::put('online', $online);

        return view('farmasi.pesanan-online');
    }
}

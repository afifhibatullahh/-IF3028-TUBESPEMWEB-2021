<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home'
        ];
        return \view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'judul' => 'Tentang LAPOR!'
        ];

        return \view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'judul' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Bunga lili',
                    'kota' => 'Bandar Lampung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Bunga Sepatu',
                    'kota' => 'Bandar Lampung'
                ]
            ]
        ];
        return \view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}

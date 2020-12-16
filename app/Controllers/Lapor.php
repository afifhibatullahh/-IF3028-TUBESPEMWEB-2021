<?php

namespace App\Controllers;

use App\Models\laporModel;
use CodeIgniter\Model;

class Lapor extends BaseController
{

    public function __construct()
    {
        $this->laporModel = new laporModel();
    }


    public function index()
    {
        // $lapor = $this->getLapor->findAll();
        $data = [
            'judul' => 'LAPOR! - Layanan Aspirasi Masyarakat',
            'lapor' => $this->laporModel->getLapor()
        ];

        // //konek database
        // $db = \Config\Database::connect();
        // $lapor = $db->query("SELECT * FROM laporan");
        // foreach ($lapor->getResultArray() as $row) {
        //     d($row);
        // }

        // $laporModel = new \App\Models\laporModel();

        return view('lapor/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'judul' => 'Detail LAPOR!',
            'lapor' => $this->laporModel->getLapor($id)
        ];

        if (empty($data['lapor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan dengan id ' . $id . ' tidak ditemukan');
        }

        return \view('lapor/detail', $data);
    }

    public function laporan()
    {
        $data = [
            'judul' => 'LAPOR! - Layanan Aspirasi Masyarakat',
            'lapor' => $this->laporModel->getLapor()
        ];

        // \dd($this->laporModel->getLapor());
        return view('lapor/laporan', $data);
    }

    public function buatLapor()
    {
        $data = [
            'judul' => "Buat Laporan"
        ];
        return \view('lapor/buatLapor', $data);
    }

    public function save()
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->laporModel->save([
            'nama' => $this->request->getVar('nama'),
            'isi' =>  $this->request->getVar('isi'),
            'aspek' => $this->request->getVar('aspek'),
            'lampiran' => $this->request->getVar('lampiran'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        // \dd($this->request->getVar());
        return \redirect()->to('/lapor');
    }


    //--------------------------------------------------------------------

}

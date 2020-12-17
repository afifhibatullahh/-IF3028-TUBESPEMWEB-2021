<?php

namespace App\Controllers;

use App\Models\laporModel;
use CodeIgniter\HTTP\Request;
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

        return view('pages/home', $data);
    }

    public function detail($id)
    {
        $data = [
            'judul' => 'Detail LAPOR!',
            'lapor' => $this->laporModel->getLapor($id)
        ];

        if (empty($data['lapor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan ' . $id . ' tidak ditemukan');
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

    public function delete($id)
    {
        $this->laporModel->delete($id);
        return redirect()->to('/lapor');
    }


    public function edit($id)
    {
        $data = [
            'judul' => "Buat Laporan",
            'lapor' => $this->laporModel->getLapor($id)
        ];
        return \view('lapor/edit', $data);
    }

    public function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->laporModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'isi' =>  $this->request->getVar('isi'),
            'aspek' => $this->request->getVar('aspek'),
            'lampiran' => $this->request->getVar('lampiran'),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // \dd($this->request->getVar());
        return \redirect()->to('/lapor/' . $id);
    }


    //--------------------------------------------------------------------

}

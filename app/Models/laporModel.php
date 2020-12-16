<?php

namespace App\Models;

use CodeIgniter\Model;

class laporModel extends Model
{
    protected $table = 'laporan';
    protected $allowedFields = ['nama', 'isi', 'aspek', 'lampiran'];

    protected $useTimestamps = true;

    public function getLapor($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}

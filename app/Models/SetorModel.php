<?php

namespace App\Models;

use CodeIgniter\Model;

class SetorModel extends Model
{
    protected $table            = 'setor';
    protected $primaryKey       = 'id_setor';
    protected $allowedFields    = ['tanggal_setor', 'nin', 'jenis_sampah', 'berat', 'harga', 'total', 'nia'];
    protected $useTimestamps    = false;
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class TarikModel extends Model
{
    protected $table            = 'tarik';
    protected $primaryKey       = 'id_tarik';
    protected $allowedFields    = ['tanggal_tarik', 'nin', 'saldo', 'jumlah_tarik', 'nia'];
    protected $useTimestamps    = false;
}

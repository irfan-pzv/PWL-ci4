<?php

namespace App\Models;

use CodeIgniter\Model;

class NasabahModel extends Model
{
    protected $table      = 'nasabah';
    protected $primaryKey = 'nin';
    protected $useAutoIncrement = false;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nin', 'nama', 'rt', 'alamat', 'telepon', 'email', 'password', 'saldo', 'sampah'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';
}
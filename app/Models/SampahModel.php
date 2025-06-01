<?php

namespace App\Models;

use CodeIgniter\Model;

class SampahModel extends Model
{
    protected $primaryKey = 'id';
    protected $table            = 'sampah';
   // protected $primaryKey       = 'jenis_sampah';
    protected $allowedFields    = ['id','jenis_sampah', 'satuan', 'harga', 'gambar', 'deskripsi'];
    protected $useTimestamps    = false;
}

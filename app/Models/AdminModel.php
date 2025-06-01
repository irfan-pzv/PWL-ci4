<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'nia';
    protected $useAutoIncrement = false;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['nia', 'nama', 'telepon', 'email', 'password', 'level'];
    
    protected $useTimestamps = false;
    
    protected $validationRules    = [
        'nia'      => 'required|min_length[9]|max_length[9]|is_unique[admin.nia,nia,{nia}]',
        'nama'     => 'required|min_length[3]|max_length[20]',
        'email'    => 'required|valid_email|max_length[50]',
        'password' => 'required|min_length[6]',
    ];
    
    protected $validationMessages = [
        'nia' => [
            'required' => 'NIA tidak boleh kosong',
            'min_length' => 'NIA minimal 9 karakter',
            'max_length' => 'NIA maksimal 9 karakter',
            'is_unique' => 'NIA sudah terdaftar',
        ],
    ];
    
    protected $skipValidation = false;
}
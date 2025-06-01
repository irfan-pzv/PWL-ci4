<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // $adminData = [
        //     [
        //         'nia'       => 'A12345678', 
        //         'nama'      => 'Admin Master', 
        //         'telepon'   => '08123456789', 
        //         'email'     => 'adminmaster@example.com', 
        //         'password'  => password_hash('password123', PASSWORD_BCRYPT), 
        //         'level'     => 'Master-admin'
        //     ],
        //     [
        //         'nia'       => 'A87654321',
        //         'nama'      => 'Admin Branch', 
        //         'telepon'   => '08987654321', 
        //         'email'     => 'adminbranch@example.com', 
        //         'password'  => password_hash('password123', PASSWORD_BCRYPT),
        //         'level'     => 'Admin'
        //     ]
        // ];
        // $this->db->table('admin')->insertBatch($adminData);

        $nasabahData = [
            [
                'nin'       => 'N1234567890',
                'nama'      => 'Nasabah Satu',
                'rt'        => 1,
                'alamat'    => 'Jl. Contoh No.1',
                'telepon'   => '0876543210',
                'email'     => 'nasabah1@example.com',
                'password'  => password_hash('password123', PASSWORD_BCRYPT), 
                'saldo'     => 50000,
                'sampah'    => 10
            ],
            [
                'nin'       => 'N0987654321',
                'nama'      => 'Nasabah Dua',
                'rt'        => 2,
                'alamat'    => 'Jl. Contoh No.2',
                'telepon'   => '0876543221',
                'email'     => 'nasabah3@example.com',
                'password'  => password_hash('password123', PASSWORD_BCRYPT),
                'saldo'     => 30000,
                'sampah'    => 5
            ]
        ];
        
        $this->db->table('nasabah')->insertBatch($nasabahData);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // admin table
        $this->forge->addField([
            'nia' => ['type' => 'VARCHAR', 'constraint' => 9],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 20],
            'telepon' => ['type' => 'VARCHAR', 'constraint' => 12, 'null' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => 50],
            'password' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'level' => ['type' => 'ENUM', 'constraint' => ['Master-admin', 'Admin'], 'null' => true],
        ]);
        $this->forge->addKey('nia', true);
        $this->forge->createTable('admin');

        // nasabah table
        $this->forge->addField([
            'nin' => ['type' => 'VARCHAR', 'constraint' => 10],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 20],
            'rt' => ['type' => 'INT', 'constraint' => 1],
            'alamat' => ['type' => 'VARCHAR', 'constraint' => 30],
            'telepon' => ['type' => 'VARCHAR', 'constraint' => 12],
            'email' => ['type' => 'VARCHAR', 'constraint' => 50],
            'password' => ['type' => 'VARCHAR', 'constraint' => 20],
            'saldo' => ['type' => 'INT', 'constraint' => 8, 'null' => true],
            'sampah' => ['type' => 'INT', 'constraint' => 4, 'null' => true],
        ]);
        $this->forge->addKey('nin', true);
        $this->forge->createTable('nasabah');

        // sampah table
        $this->forge->addField([
            'jenis_sampah' => ['type' => 'VARCHAR', 'constraint' => 15],
            'satuan' => ['type' => 'ENUM', 'constraint' => ['KG', 'PC', 'LT']],
            'harga' => ['type' => 'INT', 'constraint' => 5],
            'gambar' => ['type' => 'VARCHAR', 'constraint' => 150],
            'deskripsi' => ['type' => 'VARCHAR', 'constraint' => 40],
        ]);
        $this->forge->addKey('jenis_sampah', true);
        $this->forge->createTable('sampah');

        // setor table
        $this->forge->addField([
            'id_setor' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'tanggal_setor' => ['type' => 'DATE'],
            'nin' => ['type' => 'VARCHAR', 'constraint' => 10],
            'jenis_sampah' => ['type' => 'VARCHAR', 'constraint' => 15],
            'berat' => ['type' => 'INT', 'constraint' => 4],
            'harga' => ['type' => 'INT', 'constraint' => 6],
            'total' => ['type' => 'INT', 'constraint' => 8],
            'nia' => ['type' => 'VARCHAR', 'constraint' => 9],
        ]);
        $this->forge->addKey('id_setor', true);
        $this->forge->addForeignKey('nin', 'nasabah', 'nin', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('jenis_sampah', 'sampah', 'jenis_sampah', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('nia', 'admin', 'nia', 'CASCADE', 'CASCADE');
        $this->forge->createTable('setor');

        // tarik table
        $this->forge->addField([
            'id_tarik' => ['type' => 'INT', 'constraint' => 3, 'unsigned' => true, 'auto_increment' => true],
            'tanggal_tarik' => ['type' => 'DATE'],
            'nin' => ['type' => 'VARCHAR', 'constraint' => 10],
            'saldo' => ['type' => 'INT', 'constraint' => 7],
            'jumlah_tarik' => ['type' => 'INT', 'constraint' => 7],
            'nia' => ['type' => 'VARCHAR', 'constraint' => 9],
        ]);
        $this->forge->addKey('id_tarik', true);
        $this->forge->addForeignKey('nin', 'nasabah', 'nin', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('nia', 'admin', 'nia', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tarik');
    }

    public function down()
    {
        $this->forge->dropTable('tarik');
        $this->forge->dropTable('setor');
        $this->forge->dropTable('sampah');
        $this->forge->dropTable('nasabah');
        $this->forge->dropTable('admin');
    }
}

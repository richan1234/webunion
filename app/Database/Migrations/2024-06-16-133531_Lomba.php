<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'lomba_id' => [
                'type'           => 'CHAR',
                'constraint'     => 36,
            ],
            'nama_tim' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'kategori_lomba' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_lomba' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'poster_lomba' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_lomba' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan_lomba' => [
                'type' => 'TEXT',
            ],
            'tanggal_lomba' => [
                'type' => 'DATE',
            ],
            'tenggat_pendaftaran' => [
                'type' => 'DATE',
            ],
            'tanggal_mulai' => [
                'type' => 'DATE',
            ],
            'tanggal_selesai' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('lomba_id', TRUE);
        $this->forge->createTable('lomba');
    }
    public function down()
    {
        $this->forge->dropTable('lomba');
    }
}

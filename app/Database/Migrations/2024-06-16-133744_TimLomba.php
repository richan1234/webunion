<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TimLomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tim_lomba_id' => [
                'type'           => 'CHAR',
                'constraint'     => 36,
            ],
            'lomba_id' => [
                'type' => 'CHAR',
                'constraint' => 36,
            ],
            'nama_tim' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],

        ]);

        $this->forge->addKey('tim_lomba_id', TRUE);
        $this->forge->addForeignKey('lomba_id', 'lomba', 'lomba_id');
        $this->forge->createTable('tim_lomba');
    }
    public function down()
    {
        $this->forge->dropTable('tim_lomba');
    }
}

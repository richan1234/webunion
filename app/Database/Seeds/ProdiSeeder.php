<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'prodi_id' => 'TI',
            'nama_prodi' => 'Teknik Informatika',
            'fakultas' => 'Teknik',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Using the Model to insert data
        $this->db->table('prodi')->insert($data);
    }
}

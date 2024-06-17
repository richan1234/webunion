<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        // Fetch the first major_id from the major table
        $prodi = $this->db->table('prodi')->get()->getFirstRow();

        $data = [
            'NIM' => '01102170312',
            'prodi_id' => $prodi->prodi_id,
            'nama_lengkap' => 'Fulan',
            'email' => 'fulan@example.com',
            'password' => password_hash('fulanpassword', PASSWORD_DEFAULT),
            'photo' => 'fulan.jpg',
            'ipk' => 3.5,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Using the Model to insert data
        $this->db->table('mahasiswa')->insert($data);
    }
}

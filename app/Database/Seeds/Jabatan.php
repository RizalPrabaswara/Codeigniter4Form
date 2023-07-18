<?php

namespace App\Database\Seeds;

use App\Models\Jabatan as ModelsJabatan;
use CodeIgniter\Database\Seeder;

class Jabatan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Front-End Programmer'
            ],
            [
                'name' => 'Back-End Programmer'
            ],
            [
                'name' => 'Fullstack Programmer'
            ],
            [
                'name' => 'IT Support'
            ],
        ];

        // Using Query Builder
        $this->db->table('jabatan')->insertBatch($data);
    }
}

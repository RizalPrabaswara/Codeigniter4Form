<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class District extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_city' => 1,
                'name' => 'Sukolilo'
            ],
            [
                'id_city' => 1,
                'name' => 'Kenjeran'
            ],
            [
                'id_city' => 1,
                'name' => 'Krembangan'
            ],
            [
                'id_city' => 2,
                'name' => 'Mulyorejo'
            ],
        ];

        // Using Query Builder
        $this->db->table('districts')->insertBatch($data);
    }
}

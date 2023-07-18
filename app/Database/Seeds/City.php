<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class City extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_country' => 1,
                'name' => 'Surabaya'
            ],
            [
                'id_country' => 1,
                'name' => 'Blitar'
            ],
            [
                'id_country' => 2,
                'name' => 'Malang'
            ],
            [
                'id_country' => 3,
                'name' => 'Sidoarjo'
            ],
        ];

        // Using Query Builder
        $this->db->table('cities')->insertBatch($data);
    }
}

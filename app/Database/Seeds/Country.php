<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Country extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Indonesia'
            ],
            [
                'name' => 'Rusia'
            ],
            [
                'name' => 'England'
            ],
            [
                'name' => 'China'
            ],
        ];

        // Using Query Builder
        $this->db->table('country')->insertBatch($data);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Skill extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'PHP',
            ],
            [
                'name' => 'HTML',
            ],
            [
                'name' => 'MySQL',
            ],
            [
                'name' => 'Node.Js',
            ],
            [
                'name' => 'Bootstrap',
            ],
            [
                'name' => 'CodeIgniter',
            ],
            [
                'name' => 'Laravel',
            ],
            [
                'name' => 'Git',
            ],
            [
                'name' => 'Postman',
            ],
            [
                'name' => 'Tailwind Css',
            ],
            [
                'name' => 'Javascript',
            ],
        ];

        // Using Query Builder
        $this->db->table('skill')->insertBatch($data);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTable extends Migration
{
    public function up(): void
    {
        $alterquery1 = "AlTER TABLE users ADD FOREIGN KEY (id_jabatan) REFERENCES jabatan (id_jabatan)";
        // $alterquery2 = "AlTER TABLE users ADD FOREIGN KEY (id_skill) REFERENCES skill (id_skill)";
        $this->db->query($alterquery1);
        // $this->db->query($alterquery2);
    }

    public function down(): void
    {
        //$this->forge->dropForeignKey('users', 'users_ibfk_1');
        //$this->forge->dropForeignKey('users', 'users_ibfk_2');
    }
}

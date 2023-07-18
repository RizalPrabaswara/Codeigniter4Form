<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableCCD extends Migration
{
    public function up(): void
    {
        $alterquery1 = "AlTER TABLE users ADD FOREIGN KEY (id_country) REFERENCES country (id_country)";
        $alterquery2 = "AlTER TABLE cities ADD FOREIGN KEY (id_country) REFERENCES country (id_country)";
        $alterquery3 = "AlTER TABLE districts ADD FOREIGN KEY (id_city) REFERENCES cities (id_city)";
        //$alterquery4 = "AlTER TABLE users ADD FOREIGN KEY (id_skill) REFERENCES skill (id_skill)";
        //$alterquery5 = "AlTER TABLE users ADD FOREIGN KEY (id_skill) REFERENCES skill (id_skill)";
        $this->db->query($alterquery1);
        $this->db->query($alterquery2);
        $this->db->query($alterquery3);
        // $this->db->query($alterquery4);
        // $this->db->query($alterquery5);
    }

    public function down(): void
    {
        //$this->forge->dropForeignKey('users', 'users_ibfk_1');
        //$this->forge->dropForeignKey('users', 'users_ibfk_2');
        //$this->forge->dropForeignKey('users', 'users_ibfk_2');
    }
}

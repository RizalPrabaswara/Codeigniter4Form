<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableDistrict extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_district' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_city' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id_district', true);
        $this->forge->addKey('id_city', false, false, 'my_city');
        $this->forge->createTable('districts');
    }

    public function down()
    {
        $this->forge->dropTable('districts');
    }
}

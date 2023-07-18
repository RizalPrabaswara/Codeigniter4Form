<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCity extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_city' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_country' => [
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
        $this->forge->addKey('id_city', true);
        $this->forge->addKey('id_country', false, false, 'my_country');
        $this->forge->createTable('cities');
    }

    public function down()
    {
        $this->forge->dropTable('cities');
    }
}

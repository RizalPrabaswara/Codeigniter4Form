<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCountry extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_country' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id_country', true);
        $this->forge->createTable('country');
    }

    public function down()
    {
        $this->forge->dropTable('country');
    }
}

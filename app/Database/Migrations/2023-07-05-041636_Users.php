<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'id_jabatan' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            // 'id_skill' => [
            //     'type' => 'INT',
            //     'unsigned' => true,
            //     'null' => true
            // ],
            'skill' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ],
            'address' => [
                'type' => 'TEXT'
            ],
            'id_country' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            'id_city' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            'id_district' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            'sampul' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('id_jabatan', false, false, 'my_jabatan');
        //$this->forge->addKey('id_skill', false, false, 'my_skill');
        $this->forge->addKey('id_country', false, false, 'my_country');
        // $this->forge->addKey('id_city', false, false, 'my_city');
        // $this->forge->addKey('id_district', false, false, 'my_district');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

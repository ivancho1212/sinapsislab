<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserStatusTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'User_status_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'User_status_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'User_status_description' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('User_status_id', true);
        $this->forge->createTable('user_status');
    }

    public function down()
    {
        $this->forge->dropTable('user_status');
    }
}

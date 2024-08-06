<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModuleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Module_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Module_name' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false,
            ],
            'Module_icons' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'Module_route' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'Module_major' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => false,
            ],
            'Module_sub' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'Module_description' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
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

        $this->forge->addKey('Module_id', true);
        $this->forge->createTable('module');
    }

    public function down()
    {
        $this->forge->dropTable('module');
    }
}

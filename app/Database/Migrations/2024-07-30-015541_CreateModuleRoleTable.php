<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModuleRoleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Module_role_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Module_role_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Module_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, // Asegúrate de que sea 'unsigned'
                'null' => false,
            ],
            'Role_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, // Asegúrate de que sea 'unsigned'
                'null' => false,
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

        $this->forge->addKey('Module_role_id', true);
        $this->forge->addForeignKey('Module_fk', 'module', 'Module_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Role_fk', 'role', 'Role_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('module_role');
    }

    public function down()
    {
        $this->forge->dropTable('module_role');
    }
}

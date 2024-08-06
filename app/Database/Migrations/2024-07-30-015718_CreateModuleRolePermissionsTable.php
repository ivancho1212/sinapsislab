<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModuleRolePermissionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Module_role_permissions_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Module_role_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'Permissions_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
           
        ]);

        $this->forge->addKey('Module_role_permissions_id', true);
        $this->forge->addForeignKey('Module_role_fk', 'module_role', 'Module_role_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Permissions_fk', 'permissions', 'Permissions_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('module_role_permissions');
    }

    public function down()
    {
        $this->forge->dropTable('module_role_permissions');
    }
}

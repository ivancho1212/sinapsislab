<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Role_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Role_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Role_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'Company_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true, // Permitir que sea nulo
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

        $this->forge->addKey('Role_id', true);
        $this->forge->addForeignKey('Company_fk', 'company', 'Company_id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('role');
    }

    public function down()
    {
        $this->forge->dropTable('role');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'User_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'User_user' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
                'unique' => true,
            ],
            'User_password' => [
                'type' => 'VARCHAR',
                'constraint' => '35',
                'null' => false,
            ],
            'User_status_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true, // Permitir que sea nulo
            ],
            'Role_fk' => [
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

        $this->forge->addKey('User_id', true);
        $this->forge->addForeignKey('User_status_fk', 'user_status', 'User_status_id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('Role_fk', 'role', 'Role_id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}

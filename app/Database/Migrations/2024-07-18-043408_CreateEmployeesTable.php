<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Employees_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Employees_name' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'Employees_email' => [
                'type' => 'VARCHAR',
                'constraint' => 35,
                'null' => false,
            ],
            'Employees_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'Employees_address' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => false,
            ],
            'Employees_document' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'null' => false,
            ],
            'Document_type_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'User_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'Subscriber_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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

        $this->forge->addKey('Employees_id', true, true);
        $this->forge->addForeignKey('Document_type_fk', 'document_type', 'Document_type_id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('User_fk', 'user', 'User_id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('Subscriber_fk', 'subscriber', 'Subscriber_id', 'SET NULL', 'CASCADE');

        $this->forge->createTable('employees');
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}

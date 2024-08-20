<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuppliersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Suppliers_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Suppliers_name' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'Suppliers_email' => [
                'type' => 'VARCHAR',
                'constraint' => 35,
                'null' => false,
            ],
            'Suppliers_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'Suppliers_address' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => false,
            ],
            'Suppliers_document' => [
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
            'Company_type_fk' => [
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

        $this->forge->addKey('Suppliers_id', true, true);
        $this->forge->addForeignKey('Document_type_fk', 'document_type', 'Document_type_id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('Company_type_fk', 'company_type', 'Company_type_id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('User_fk', 'user', 'User_id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('suppliers');
    }

    public function down()
    {
        $this->forge->dropTable('suppliers');
    }
}

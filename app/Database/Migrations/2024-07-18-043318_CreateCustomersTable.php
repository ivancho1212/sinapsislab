<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Customers_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Customers_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Customers_email' => [
                'type' => 'VARCHAR',
                'constraint' => '35',
                'null' => false,
            ],
            'Customers_phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'Customers_address' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => false,
            ],
            'Customers_document' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
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

        $this->forge->addKey('Customers_id', true);
        $this->forge->addForeignKey('Document_type_fk', 'document_type', 'Document_type_id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('User_fk', 'user', 'User_id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('Subscriber_fk', 'subscriber', 'Subscriber_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}

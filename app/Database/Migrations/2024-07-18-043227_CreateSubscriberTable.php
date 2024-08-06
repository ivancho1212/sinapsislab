<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubscriberTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Subscriber_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Subscriber_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Subscriber_last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Subscriber_email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'Subscriber_phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'Subscriber_address' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => false,
            ],
            'Company_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true, // Permitir que sea nulo
            ],
            'User_fk' => [
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

        $this->forge->addKey('Subscriber_id', true);
        $this->forge->addForeignKey('Company_fk', 'company', 'Company_id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('User_fk', 'user', 'User_id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('subscriber');
    }

    public function down()
    {
        $this->forge->dropTable('subscriber');
    }
}

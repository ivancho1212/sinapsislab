<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuppliersSubscriberTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Suppliers_subscriber_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Suppliers_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'Subscriber_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
        ]);

        $this->forge->addKey('Suppliers_subscriber_id', true);
        $this->forge->addForeignKey('Suppliers_id', 'suppliers', 'Suppliers_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Subscriber_id', 'subscriber', 'Subscriber_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('suppliers_subscriber');
    }

    public function down()
    {
        $this->forge->dropTable('suppliers_subscriber');
    }
}

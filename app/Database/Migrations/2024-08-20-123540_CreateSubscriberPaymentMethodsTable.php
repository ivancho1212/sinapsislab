<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubscriberPaymentMethodsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Subscriber_payment_methods_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Subscriber_payment_methods_image' => [
                'type' => 'BLOB',
                'null' => true,
            ],
            'Subscriber_profile_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'Type_of_payment_methods_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey('Subscriber_payment_methods_id', true);

        $this->forge->addForeignKey('Subscriber_profile_id', 'subscriber_profile', 'Subscriber_profile_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Type_of_payment_methods_id', 'type_of_payment_methods', 'Type_of_payment_methods_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('subscriber_payment_methods');
    }

    public function down()
    {
        $this->forge->dropTable('subscriber_payment_methods');
    }
}

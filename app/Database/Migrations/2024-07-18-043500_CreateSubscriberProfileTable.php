<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubscriberProfileTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Subscriber_profile_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Subscriber_profile_about' => [
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => false,
            ],
            'Subscriber_profile_email' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'Subscriber_profile_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
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

        $this->forge->addKey('Subscriber_profile_id', true, true);
        $this->forge->addForeignKey('Subscriber_fk', 'subscriber', 'Subscriber_id', 'SET NULL', 'CASCADE');

        $this->forge->createTable('subscriber_profile');
    }

    public function down()
    {
        $this->forge->dropTable('subscriber_profile');
    }
}

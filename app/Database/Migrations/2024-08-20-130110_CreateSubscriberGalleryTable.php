<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubscriberGalleryTable extends Migration
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
           'Subscriber_profile_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'Files_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('Subscriber_profile_id', true);

        $this->forge->addForeignKey('Subscriber_profile_id', 'subscriber_profile', 'Subscriber_profile_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Files_id', 'files', 'Files_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('subscriber_gallery');
    }

    public function down()
    {
        $this->forge->dropTable('subscriber_gallery');
    }
}

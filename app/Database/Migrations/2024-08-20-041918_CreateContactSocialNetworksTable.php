<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactSocialNetworksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Contact_social_networks_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Subscriber_profile_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'Social_networks_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('Contact_social_networks_id', true);

        $this->forge->addForeignKey('Subscriber_profile_id', 'subscriber_profile', 'Subscriber_profile_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Social_networks_id', 'social_networks', 'Social_networks_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('contact_social_networks');
    }

    public function down()
    {
        $this->forge->dropTable('contact_social_networks');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSocialNetworksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Social_networks_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Social_networks_nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'Social_networks_link' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
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

        $this->forge->addKey('Social_networks_id', true);
        $this->forge->createTable('social_networks');
    }

    public function down()
    {
        $this->forge->dropTable('social_networks');
    }
}

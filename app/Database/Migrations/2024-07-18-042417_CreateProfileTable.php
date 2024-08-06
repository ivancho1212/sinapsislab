<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfileTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Profile_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Profile_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Profile_last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Profile_email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'Profile_phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'Profile_address' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => false,
            ],
            'Profile_photo' => [
                'type' => 'VARCHAR',
                'constraint' => '256',
                'null' => false,
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

        $this->forge->addKey('Profile_id', true);
        $this->forge->addForeignKey('User_fk', 'user', 'User_id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}

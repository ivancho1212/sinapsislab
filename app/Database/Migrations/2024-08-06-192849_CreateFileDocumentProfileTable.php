<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFileDocumentProfileTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Files_document_profile_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Files_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'Profile_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
        ]);

        $this->forge->addKey('Files_document_profile_id', true);
        $this->forge->addForeignKey('Files_id', 'files', 'Files_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Profile_id', 'profile', 'Profile_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('file_document_profile');
    }

    public function down()
    {
        $this->forge->dropTable('file_document_profile');
    }
}

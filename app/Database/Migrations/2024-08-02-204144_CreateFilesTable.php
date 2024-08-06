<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFilesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Files_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Files_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '35',
                'null'       => false,
            ],
            'Files_rute' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'Files_type' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null'       => false,
            ],
            'Files_size' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
            ],
            'Files_extension' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null'       => false,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'deleted_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        $this->forge->addKey('Files_id', true);
        $this->forge->createTable('files');
    }

    public function down()
    {
        $this->forge->dropTable('files');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDocumentTypeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Document_type_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Document_type_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'Document_type_code' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => false,
            ],
            'Document_type_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
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

        $this->forge->addKey('Document_type_id', true);
        $this->forge->createTable('document_type');
    }

    public function down()
    {
        $this->forge->dropTable('document_type');
    }
}

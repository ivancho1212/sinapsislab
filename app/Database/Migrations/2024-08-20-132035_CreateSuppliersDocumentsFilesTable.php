<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuppliersDocumentsFilesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Suppliers_documents_files_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Suppliers_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'Files_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('Suppliers_documents_files_id', true);

        $this->forge->addForeignKey('Suppliers_id', 'suppliers', 'Suppliers_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Files_id', 'files', 'Files_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('suppliers_documents_files');
    }

    public function down()
    {
        $this->forge->dropTable('suppliers_documents_files');
    }
}
<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCompanyDocumentsFilesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Company_documents_files_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Company_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'Files_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('Company_documents_files_id', true);

        $this->forge->addForeignKey('Company_id', 'company', 'Company_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Files_id', 'files', 'Files_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('company_documents_files');
    }

    public function down()
    {
        $this->forge->dropTable('company_documents_files');
    }
}
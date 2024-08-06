<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFileDocumentEmployeesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'File_document_employee_id' => [
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
            'Employees_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
        ]);

        $this->forge->addKey('File_document_employee_id', true);
        $this->forge->addForeignKey('Files_id', 'files', 'Files_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Employees_id', 'employees', 'Employees_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('file_document_employees');
    }

    public function down()
    {
        $this->forge->dropTable('file_document_employees');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCompanyTypeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Company_type_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Company_type_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'Company_type_code' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Company_type_description' => [
                'type' => 'TEXT',
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

        $this->forge->addKey('Company_type_id', true);
        $this->forge->createTable('company_type');
    }

    public function down()
    {
        $this->forge->dropTable('company_type');
    }
}

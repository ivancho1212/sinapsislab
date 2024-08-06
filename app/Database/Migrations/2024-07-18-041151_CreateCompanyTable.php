<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCompanyTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Company_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Company_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'Company_address' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'Company_phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'Company_email' => [
                'type' => 'VARCHAR',
                'constraint' => '35',
                'null' => false,
                'unique' => true,
            ],
            'Company_type_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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

        $this->forge->addKey('Company_id', true);
        $this->forge->addForeignKey('Company_type_fk', 'company_type', 'Company_type_id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('company');
    }

    public function down()
    {
        $this->forge->dropTable('company');
    }
}

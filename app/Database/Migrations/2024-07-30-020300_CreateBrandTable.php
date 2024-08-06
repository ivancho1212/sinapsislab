<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBrandTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Brand_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Brand_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'unique' => true,
            ],
            'Brand_description' => [
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

        $this->forge->addKey('Brand_id', true);
        $this->forge->createTable('brand'); // Cambiado a 'brand'
    }

    public function down()
    {
        $this->forge->dropTable('brand'); // Cambiado a 'brand'
    }
}
